<?php

namespace App\Http\Controllers\Backend;
use App\Category;
use App\Brand;
use App\Unit;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
        public function index()
        {
            $products = Product::with('category', 'brand', 'unit')->paginate(10);
            // dd($products);
            return view('backend.pages.product', compact('products'));
        }
        public function create()
        {
            $categories = Category::all();
            $brands = Brand::all();
            $units = Unit::all();
            return view('backend.pages.product_create', compact('categories', 'brands', 'units'));
        }
        public function store(Request $request){
            $data=$request->validate([
                'name' => 'required|string',
                'category_id' => 'required',
                'brand_id' => 'required',
                'unit_id' => 'required',
                'description' => '',
                'price' => '',
                
            ]);
            
            Product::insert($data);
            // comment::create($request->all());
            return back()->with('success', 'product Created Succesfully');
        }

        public function destroy($id)
        {
            $data=Product::findOrFail($id);
            $data->delete();
            return back()->with('success', 'Delete Success');
        }
        public function edit($id)
        {
            $product= Product::find($id);
            $category = Category::all();
            $brands = Brand::all();
            $units = Unit::all();
            return view('backend.pages.product-edit', compact('product', 'category', 'brands', 'units'));
        }

    public function update(Request $request, $id)
    {
        $product=product::find($id);
        $product->name=request('name');
        $product->description=request('description');
        $product->category_id=request('category_id');
        $product->brand_id=request('brand_id');
        $product->unit_id=request('unit_id');
        $product->save();
        return back()->with('success', 'Update Success');
    }

    public function product_stock()
    {
        

    
        $query = DB::table('products as p')
                ->join('purchase_details as pd','pd.product_id','=', 'p.id')
                ->select('p.id','p.name', 
                DB::raw('ifnull(SUM(pd.quantity),0) as qty'),
                );
                
                
                
        $stock=$query->groupBy('p.id','p.name')
                ->get();
                
        
       return view('backend.pages.product_stock', compact('stock'));
    }
}
