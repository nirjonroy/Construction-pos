@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">
<a class="btn btn-lg btn-success" href="{{route('product-create')}}">ADD</a>
</div>
<br><br><br>
 <!-- table success start -->
 <div class="col-lg-12 mt-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Customer</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-success">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">unit</th>
                                <th scope="col">Description</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                           
                             
                           
                                
                            @foreach ($products as $product)
                                
                            
                                <tr>
                                    
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td> {{$product->brand->name}} </td>
                                    <td> {{$product->unit->name}} </td>
                                    <td>{{$product->description}}</td>
                                                                   <td>
                                    <a href="{{route('product-delete', $product->id)}}"><i class="ti-trash"></i></a>  
                                        
                                        <a href="{{route('product-edit', $product->id)}}">edit</a></td>
                                </tr>
                                @endforeach    
                               
                        </tbody>
                    </table>

                    <p>{!! urldecode(str_replace("/?","?",$products->appends(Request::all())->render())) !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table success end -->


@endsection