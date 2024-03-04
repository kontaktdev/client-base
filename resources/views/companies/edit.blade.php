@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="nav-icon fas fa-edit"></i> {{$company->name}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('companies.index')}}">Companies</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company Details</h3>
                    </div>
                    <form action="{{route('companies.update', $company)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="companyName">Name</label>
                                        <input type="text" name="name" class="form-control" id="companyName" placeholder="Company Name" value="{{$company->name}}">

                                    </div>
                                    <div class="col-6">
                                        <label for="companyVat">VAT</label>
                                        <input type="text" name="vat" class="form-control" id="companyVat" placeholder="Company VAT number" value="{{$company->vat}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="companyAddress">Address</label>
                                <input type="text" name="address" class="form-control" id="companyAddress" placeholder="Company Address" value="{{$company->address}}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="companyCity">City</label>
                                        <input type="text" name="city" class="form-control" id="companyCity" value="{{$company->city}}">
                                    </div>
                                    <div class="col-4">
                                        <label for="companyZip">ZIP</label>
                                        <input type="text" name="zipcode" class="form-control" id="companyZip" placeholder="ZIP number" value="{{$company->zipcode}}">
                                    </div>
                                    <div class="col-4">
                                        <label for="companyCountry">Country</label>
                                        <input type="text" name="country" class="form-control" id="companyCountry" value="{{$company->country}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="companyPhone">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="companyPhone" placeholder="Phone number" value="{{$company->phone}}">
                                    </div>
                                    <div class="col-6">
                                        <label for="companyMobile">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="companyMobile" placeholder="Mobile number" value="{{$company->mobile}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="companyEmail">Email</label>
                                        <input type="email" name="email" class="form-control" id="companyEmail" placeholder="example@company.com" value="{{$company->email}}">
                                    </div>
                                    <div class="col-6">
                                        <label for="comapnyWebsite">Website</label>
                                        <input type="url" name="website" class="form-control" id="comapnyWebsite" placeholder="https://comapny.com" value="{{$company->website}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Further Notes">{{$company->description}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('companies.index')}}" class="btn">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
