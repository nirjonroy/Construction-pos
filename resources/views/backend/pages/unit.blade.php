@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">
<a class="btn btn-lg btn-success" href="{{route('unit-create')}}">ADD</a>
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
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                           
                             
                         @foreach ($units as $unit)
                         <tr>      
                            <th scope="row">{{$unit->id}}</th>
                            <td>{{$unit->name}}</td>
                            <td>{{$unit->description}}</td>
                            <td>
                                @if($unit->status == 1)    
                                Active
                                @else
                                Deactive
                                @endif
                            </td>
                            
                            <td>
                            <a href="{{route('unit-delete', $unit->id)}}"><i class="ti-trash"></i></a>  
                                
                                <a href="{{route('unit-edit', $unit->id)}}">edit</a></td>
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