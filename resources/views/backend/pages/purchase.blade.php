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
            <h4 class="header-title">Purchase</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-success">
                            <tr class="text-white">
                                <th>#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Supplier</th>
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
                            

                           
                             
                           
                                
                            @foreach ($purchase as $pur)
                                
                            
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <th scope="row">{{$pur->date}}</th>
                                    <td>{{$pur->supplier->name}}</td>
                                    <td>{{$pur->invoice_no}}</td>
                                    <td>{{$pur->total_price}}</td>
                                    <td> {{$pur->payment}} </td>
                                    <td> @if($pur->payment == $pur->total_price)
                                    		<p>Paid</p>
                                    	 @else
                                    	 <p> Due </p>	
                                    	 @endif
                                     </td>
                                     <td>{{$pur->total_price-$pur->payment}}</td>
                                    <td>{{$pur->description}}</td>
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