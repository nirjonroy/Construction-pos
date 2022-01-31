<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('backend.pages.supplier', compact('suppliers'));
    }

    public function create()
    {
        return view('backend.pages.supplier_create');
    }
    public function store(Request $request)
    {
         $data=$request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address'=>'required',
            'description' => '',
            
        ]);
        
        Supplier::insert($data);
        // comment::create($request->all());
        return back()->with('success', 'Thanks for Contact us!');
        
    }
    
    public function destroy($id)
    {
        $data=Supplier::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Delete Success');
    }
    public function edit ($id)
    {
       $supplier = Supplier::find($id);
       return view('backend.pages.supplier-edit', compact('supplier'));
    }

    public function update(Request $request, $id){
        $supplier=Supplier::find($id);
        $supplier->name=request('name');
        $supplier->phone=request('phone');
        $supplier->address=request('address');
        $supplier->description=request('description');
        $supplier->save();
        return back()->with('success', 'Update Success');
    }

}
