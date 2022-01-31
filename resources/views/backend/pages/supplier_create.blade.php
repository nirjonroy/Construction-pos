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
                            <form action="{{route('supplier-store')}}" method="post">
                                
                                @csrf
                                <div class="form-group">
                                    <label for="supplierName">Supplier Name</label>
                                    <input type="text" name="name" class="form-control" id="supplierId" aria-describedby="emailHelp" placeholder="Supplier Name">
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="supplierMobile">Supplier phone</label>
                                    <input type="text" name="phone" class="form-control" id="supplierId" aria-describedby="emailHelp" placeholder="Supplier phone">
                                    @if($errors->has('phone'))
                                        <div class="error">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="supplierMobile">Supplier Address</label>
                                    <input type="text" name="address" class="form-control" id="supplierId" aria-describedby="emailHelp" placeholder="Supplier Address">
                                    @if($errors->has('address'))
                                        <div class="error">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="supplierMobile">Supplier Description</label>
                                    <input type="text" name="description" class="form-control" id="supplierId" aria-describedby="emailHelp" placeholder="Supplier Description">
                                    @if($errors->has('description'))
                                        <div class="error">{{ $errors->first('description') }}</div>
                                    @endif
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