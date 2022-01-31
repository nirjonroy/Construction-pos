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
                            <h4 class="header-title">Create Product</h4>
                            <form action="{{route('product-store')}}" method="POST">
                               
                                @csrf
                                <div class="form-group">
                                    <label for="brand">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="brandId" aria-describedby="emailHelp" placeholder="brand Name">
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Product Category</label>
                                    <select class="custom-select" name="category_id">
                                        <option selected="selected">Select Category</option>
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option> 
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
                                        <option value="{{$brand->id}}">{{$brand->name}}</option> 
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
                                        <option value="{{$unit->id}}">{{$unit->name}}</option> 
                                        @endforeach

                                    </select>
                                    @if($errors->has('unit_id'))
                                        <div class="error">{{ $errors->first('unit_id') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="" >Price:</label>
                                    <div class="col-sm-10">
                                          <input type="text" class="form-control" name="price" placeholder="price per unit" id="editor1" rows="10" cols="80">
                                          @if($errors->has('price'))
                                            <div class="error">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="" >Description:</label>
                                    <div class="col-sm-10">
                                          <textarea class="form-control" name="description" placeholder="Enter Description" id="editor1" rows="10" cols="80">{{ old('description')}}</textarea>
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