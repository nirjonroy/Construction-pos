@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">
<a class="btn btn-lg btn-success" href="{{url('customer-create')}}">ADD</a>
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
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                           
                             
                          @foreach($customer as $cus)
                            <tr>
                                <th scope="row">{{$cus->id}}</th>
                                <td>{{$cus->name}}</td>
                                <td>{{$cus->phone}}</td>
                                <td>{{$cus->address}}</td>
                                <td>
                                  <a href="{{route('customer-delete', $cus->id)}}"><i class="ti-trash"></i></a>  
                                    
                                    <a href="{{route('customer-edit', $cus->id)}}">edit</a>
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