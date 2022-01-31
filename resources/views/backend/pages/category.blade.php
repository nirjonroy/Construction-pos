@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<div class="float-right col-md-8">
<a class="btn btn-lg btn-success" href="{{url('category-create')}}">ADD</a>
</div>
<br><br><br>
 <!-- table success start -->
 <div class="col-lg-12 mt-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Category</h4>
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
                            

                           
                             @foreach ($category as $cat)
                        
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <th scope="row">{{$cat->name}}</th>
                                    <td>{{$cat->description}}</td>
                                    <td>
                                        @if($cat->status == 1)    
                                        Active
                                        @else
                                        Deactive
                                        @endif
                                    </td>
                                    
                                    <td>
                                    <a href="{{route('category-delete', $cat->id)}}"><i class="ti-trash"></i></a>  
                                        
                                        <a href="{{route('category-edit', $cat->id)}}">edit</a></td>
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