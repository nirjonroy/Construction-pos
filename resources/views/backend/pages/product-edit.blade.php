@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')


 <!-- table success start -->
 <div class="main-content-inner">
    <div class="row">
       
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Basic form</h4>
                            <form action="{{route('product-update', [$product->id])}}" method="post">
                                
                                @csrf

                                
                                <div class="form-group">
                                    <label for="ProductName">Product Name</label>
                                    <input type="text" value="{{$product->name}}" name="name" class="form-control" id="supplierId" aria-describedby="emailHelp" placeholder="Supplier Name">
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Product Category</label>
                                    <select class="custom-select" name="category_id">
                                        <option selected="selected">Select Category</option>
                                        @foreach ($category as $cat)
                                        <option value="{{$cat->id}}" {{ ($product->category_id == $cat->id) ?'selected' :''}}>{{$cat->name}}</option> 
                                        @endforeach

                                    </select>
                                    @if($errors->has('category_id'))
                                        <div class="error">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Product Brand</label>
                                    <select class="custom-select" name="brand_id">
                                        <option selected="selected">Select Category</option>
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}" {{ ($product->brand_id == $brand->id) ?'selected' :''}}>{{$brand->name}}</option> 
                                        @endforeach

                                    </select>
                                    @if($errors->has('brand_id'))
                                        <div class="error">{{ $errors->first('brand_id') }}</div>
                                    @endif
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-form-label">Product Unit</label>
                                    <select class="custom-select" name="unit_id">
                                        <option selected="selected">Select Category</option>
                                        @foreach ($units as $unit)
                                        <option value="{{$unit->id}}" {{ ($product->unit_id == $unit->id) ?'selected' :''}}>{{$unit->name}}</option> 
                                        @endforeach

                                    </select>
                                    @if($errors->has('unit_id'))
                                        <div class="error">{{ $errors->first('unit_id') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="" >Description:</label>
                                    <div class="col-sm-10">
                                          <textarea value="" class="form-control" name="description" placeholder="Enter Description" id="editor1" rows="10" cols="80">{{$product->description}}</textarea>
                                          @if($errors->has('description'))
                                            <div class="error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                  </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- basic form end -->
           
            </div>
        </div>
    </div>
</div>
<!-- table success end -->


@endsection