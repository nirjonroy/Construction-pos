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
                                <th>#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Invoice No</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Payment </th>
                                <th scope="col">Payment status</th>
                                <th scope="col">Due</th>
                                <th scope="col">Description</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                           
                             
                           
                                
                            @foreach ($sells as $sell)
                                
                            
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <th scope="row">{{$sell->date}}</th>
                                    <td>{{$sell->customer->name}}</td>
                                    <td>{{$sell->invoice_no}}</td>
                                    <td>{{$sell->total_price}}</td>
                                    <td> {{$sell->payment}} </td>
                                    <td> @if($sell->payment == $sell->total_price)
                                    		<p>Paid</p>
                                    	 @else
                                    	 <p> Due </p>	
                                    	 @endif
                                     </td>
                                     <td>{{$sell->total_price-$sell->payment}}</td>
                                    <td>{{$sell->description}}</td>
                                                                   <td>
                                    <a href=""><i class="ti-trash"></i></a>  
                                        
                                        <a href="">edit</a></td>
                                </tr>
                                @endforeach    
                               
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- table success end -->


@endsection