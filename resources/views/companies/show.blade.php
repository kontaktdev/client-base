@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="nav-icon fa fa-eye"></i> {{$company->name}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('companies.index')}}">Companies</a></li>
                    <li class="breadcrumb-item active">View</li>
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
                            <div class="row">
                                <div class="col-6">
                                    <label for="companyName">Name</label>
                                    <p>{{$company->name}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="companyVat">VAT</label>
                                    <p>{{$company->vat}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <label for="companyAddress">Address</label>
                                    <p>{{$company->address}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="companyCity">City</label>
                                    <p>{{$company->city}}</p>
                                </div>
                                <div class="col-4">
                                    <label for="companyZip">ZIP</label>
                                    <p>{{$company->zipcode}}</p>
                                </div>
                                <div class="col-4">
                                    <label for="companyCountry">Country</label>
                                    <p>{{$company->country}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <label for="companyPhone">Phone</label>
                                    <p>{{$company->phone}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="companyMobile">Mobile</label>
                                    <p>{{$company->mobile}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="companyEmail">Email</label>
                                    <p>{{$company->email}}</p>
                                </div>
                                <div class="col-6">
                                    <label for="comapnyWebsite">Website</label>
                                    <p><a href="{{$company->website}}" target="_blank">{{$company->website}}</a></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <label>Notes</label>
                                    <p>{{$company->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('companies.edit', $company)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('companies.index')}}" class="btn">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
