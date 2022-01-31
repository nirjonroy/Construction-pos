<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Sell;
use App\SellDetails;
use DB;
class SellController extends Controller
{
    public function index()
    {
        $sells = Sell::with('Customer')->orderby('date', 'desc')->get();
        return view('backend.pages.sell', compact('sells'));
    }

    public function create()
    {
        $data['products'] = Product::orderby('name','asc')->get();
        $data['customers'] = Customer::orderby('name','asc')->get();
        return view('backend.pages.sell_create',$data);
    }
    public function fetch(Request $request)
    {
      if($request->get('term'))
     {
      $query = $request->get('term');
      $data = DB::table('products')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();


       return json_decode($data);
     }
    }

    public function prodcutStore(Request $request){

        if (request()->ajax()) {

        $id = $request->get('id');
        $data = DB::table('products')
                ->where('id', $id)
                ->get();
        $output = '';
        foreach($data as $row){
        $output .= '<tr>
                <td>'.$row->id.'
                <input type="hidden" name="product_id[]"  value="'.$row->id.'"/></td>
                <td>'.$row->name.'</td>
                <td class="price">'.$row->price.'</td>
                <td>
                    <input type="number" class="quantity" value="1" name="quantity[]"/>
                    <input type="hidden" value="'.$row->price.'" name="price[]"/>
                </td>
                <td class="sub_total">'.$row->price.'</td>
                <td>
                  <a class="btn btn-sm btn-danger " id="DeleteButton">Remove</a>
                 
                </td>
           </tr>';
        }

      return response(['success'=>true,'view'=>$output]);


        }

    }  

       public function store(Request $request)
    {

 
        $purchase=$request->validate([
            'customer_id' => 'required',
            'total_quantity' => 'required',
            'total_price' => 'required',
            'payment' => 'required|numeric',
            'date'=> '',
            'description'=> '',
            
        ]);

   


        $invoice_no = mt_rand(10000000, 99999999);

        $sell = new Sell();
        $sell->invoice_no = $invoice_no;
        $sell->customer_id = $request->customer_id;
        $sell->total_quantity = $request->total_quantity;
        $sell->total_price = $request->total_price;
        $sell->date = $request->date;
        $sell->payment = $request->payment;
        $sell->description = $request->description;
        $sell->save();
        
        
        $data=[];
        foreach($request->product_id as $key=> $id){
            $data[]=[

                'product_id'=>$id,
                'sell_id' => $sell->id,
                'quantity'=>$request->quantity[$key],
                'price'=>$request->price[$key]
                

            ];  
        }

        

        SellDetails::insert($data);
        return back()->with('success', 'Sell Created Succesfully');



        
    } 
}
