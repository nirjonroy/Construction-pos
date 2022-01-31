<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('backend.pages.category', compact('category'));
    }
    public function create(){
        return view('backend.pages.category_create');
    }
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|string',
            'description' => 'required',
            
            
        ]);
        
        Category::insert($data);
        // comment::create($request->all());
        return back()->with('success', 'Thanks for Contact us!');
    }

    public function destroy(Request $request, $id)
    {
        $data=Category::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Delete Success');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.pages.category_edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        $category->name=request('name');
        $category->description=request('description');
        $category->save();
        return back()->with('success', 'Update Success');
    }

}
