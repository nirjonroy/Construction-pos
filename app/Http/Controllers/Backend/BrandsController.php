<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('backend.pages.brand', compact('brands'));
    }
    public function create(){
        return view('backend.pages.create_brand');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|string',
            'description' => 'required',
            
            
        ]);
        
        Brand::insert($data);
        // comment::create($request->all());
        return back()->with('success', 'Thanks for Contact us!');
    }

    public function destroy(Request $request, $id)
    {
        $data=Brand::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Delete Success');
    }


    
    public function edit($id)
    {
        $brands = Brand::find($id);
        return view('backend.pages.brand_edit', compact('brands'));
    }


  public function update(Request $request, $id)
    {
        $brands=Brand::find($id);
        $brands->name=request('name');
        $brands->description=request('description');
        $brands->save();
        return back()->with('success', 'Update Success');
    }

}
