@extends('layouts.app')

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"><i class="nav-icon far fa-building"></i> Companies</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">List of companies</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->city}}</td>
                            <td>{{$company->country}}</td>
                            <td>
                                @if($company->email != null)
                                <a href="mailto:{{$company->email}}" class="nav-link" title="{{$company->email}}">
                                    <i class="nav-icon far fa-envelope"></i>
                                </a>
                                @endif
                            </td>
                            <td>
                                <a href="mailto:{{$company->website}}" class="nav-link" title="{{$company->website}}">
                                    <i class="nav-icon fas fa-globe"></i>
                                </a>
                            </td>
                            <td>
                                <a href="mailto:{{$company->website}}" class="" title="{{$company->website}}">
                                    <i class="nav-icon fas fa-eye"></i>
                                </a>
                                <a href="{{route('companies.edit', $company)}}" class="" title="Edit">
                                    <i class="nav-icon fa fa-pen"></i>
                                </a>
                                <a href="mailto:{{$company->website}}" class="" title="{{$company->website}}">
                                    <i class="nav-icon far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
