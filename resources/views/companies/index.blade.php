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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of companies</h3>
                    <div class="card-tools">
                        <!-- Table Search -->
                        <form method="GET" action="{{route('companies.index')}}">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="simple_search" class="form-control float-right" placeholder="Search" value="{{ request('simple_search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Table Search -->
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>URL</th>
                            <th>Contacts #</th>
                            <th style="width:100px">Actions</th>
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
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-tool" title="Email">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-tool" title="Website">
                                                <i class="fa fa-globe"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$company->employees_count}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="{{route('companies.show', $company)}}" class="btn btn-tool" title="View">
                                                <i class="nav-icon fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="{{route('companies.edit', $company)}}" class="btn btn-tool" title="Edit">
                                                <i class="nav-icon fa fa-pen"></i>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="mailto:{{$company->website}}" class="btn btn-tool" title="Delete">
                                                <i class="nav-icon far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix">
                    {{ $companies->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
