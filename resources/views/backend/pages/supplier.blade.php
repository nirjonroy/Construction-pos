@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">
<a class="btn btn-lg btn-success" href="{{url('supplier-create')}}">ADD</a>
</div>
<br><br><br>
 <!-- table success start -->
 <div class="col-lg-12 mt-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Thead success</h4>
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
                            @php 
                            $suppliers = App\Supplier::all();

                            @endphp

                            @foreach ($suppliers as $item)
                             
                          
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                  <a href="{{route('supplier-delete', $item->id)}}"><i class="ti-trash"></i></a>  
                                    
                                    <a href="{{route('supplier-edit', $item->id)}}">edit</a>
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