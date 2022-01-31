@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">

</div>
<br><br><br>
 <!-- table success start -->
 <div class="col-lg-12 mt-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Stock Report</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-success">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            

                           
                             
                           
                                
                            @foreach ($stock as $sto)
                                
                            
                                <tr>
                                    
                                    <td>{{$sto->id}}</td>
                                    <td>{{$sto->name}}</td>
                                    <td>{{$sto->qty}}</td>
                                    
                                </tr>
                                @endforeach    
                               
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection