<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::all();
        return view('backend.pages.unit', compact('units'));
    }
    public function create(){
        return view('backend.pages.unit_create');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|string',
            'description' => 'required',
        ]);
        
        Unit::insert($data);
        // comment::create($request->all());
        return back()->with('success', 'Created');
    }

    public function destroy($id)
    {
        $data=Unit::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Delete Success');
    }

    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('backend.pages.unit_edit', compact('unit'));
    }
    
    public function update(Request $request, $id)
    {
        $unit=Unit::find($id);
        $unit->name=request('name');
        $unit->description=request('description');
        $unit->save();
        return back()->with('success', 'Update Success');
    }

}
