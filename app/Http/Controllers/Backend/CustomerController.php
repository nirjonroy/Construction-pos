<?php

namespace App\Http\Controllers\Backend;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('backend.pages.customer', compact('customer'));
    }
    public function create(){
        return view('backend.pages.customer_create');
    }
    public function store(Request $request)
    {
         $data=$request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address'=>'required',
            'description' => '',
            
        ]);
        
        Customer::insert($data);
        // comment::create($request->all());
        return back()->with('success', 'Thanks for Contact us!');
        
    }

    public function destory($id){
        $data=Customer::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Delete Success');
    }

    public function edit ($id)
    {
       $customer = Customer::find($id);
       return view('backend.pages.customer-edit', compact('customer'));
    }
    public function update(Request $request, $id){
        $customer=Customer::find($id);
        $customer->name=request('name');
        $customer->phone=request('phone');
        $customer->address=request('address');
        $customer->description=request('description');
        $customer->save();
        return back()->with('success', 'Update Success');
    }
}
