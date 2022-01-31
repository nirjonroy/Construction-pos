<?php

namespace App\Http\Controllers\Backend;
use App\Category;
use App\Brand;
use App\Unit;
use App\Product;
use App\Http\Controllers\Controller;
use App\Purchase;
use App\Purchase_details;
use App\Supplier;
use session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PurchaseController extends Controller
{
    public function index(){
        $purchase = Purchase::with('supplier')->orderby('date', 'desc')->get();
        return view('backend.pages.purchase', compact('purchase'));
    }
    public function create()
    {
        $data['products'] = Product::orderby('name','asc')->get();
        $data['suppliers'] = Supplier::orderby('name','asc')->get();
        return view('backend.pages.purchase_create',$data);
    }


    function fetch(Request $request)
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
            'supplier_id' => 'required',
            'total_quantity' => 'required',
            'total_price' => 'required',
            'payment' => 'required|numeric',
            'date'=> '',
            'description'=> '',
            
        ]);

   


        $invoice_no = mt_rand(10000000, 99999999);

        $purchase = new Purchase();
        $purchase->invoice_no = $invoice_no;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->total_quantity = $request->total_quantity;
        $purchase->total_price = $request->total_price;
        $purchase->date = $request->date;
        $purchase->payment = $request->payment;
        $purchase->description = $request->description;
        $purchase->save();
        
        
        $data=[];
        foreach($request->product_id as $key=> $id){
            $data[]=[

                'product_id'=>$id,
                'purchase_id' => $purchase->id,
                'quantity'=>$request->quantity[$key],
                'price'=>$request->price[$key]
              

            ];  
        }



        Purchase_details::insert($data);
        return back()->with('success', 'Purchase Created Succesfully');
    }

    

}
