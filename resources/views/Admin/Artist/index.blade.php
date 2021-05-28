@extends('layouts.master')
@section('sidebar')
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
            <li class="nav-divider">
                Menu
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/admin/dashboard"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active" href="/admin/artist" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Artist</a>
            </li>
        </ul>
    </div>
</nav>
@endsection
@section('content')
<div class="col-lg-12">
    <div class="page-header">
        <h2 class="pageheader-title">Artist </h2>
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Artist </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                 
             @endif
            <h5 class="card-title">View Artist Details</h5>
           
            <a href="/admin/artist/create">
                <button type="button" class="btn btn-primary" style="float: right;margin-bottom: 10px;">
                <span>
                    <i class="fa fa-plus"></i>
                </span>
                    Add Artist
                </button>
            </a>
            <div class="table-responsive">
                <table id="data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Genre</th>
                        <th>Album Name</th>
                        <th>Album Year</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($datas as $i => $data)
                        <tr>
                            <td> {{ ++$i }}</td>
                            <td> {{ $data -> name }}</td>
                            <td> {{ $data -> genre }}</td>
                            <td> {{ $data -> album }}</td>
                            <td> {{ $data -> date }}</td>
                            <td> {{ $data -> price }}</td>
                            <td> {{ $data -> description }}</td>
                            <td>
                                <a href=""><i class="fa fa-eye"></i> </a>
                                <a href="/admin/artist/edit/{{ $data->id }}"><i class="fa fa-edit"></i> </a>
                                <a href="/admin/artist/delete/{{ $data->id }}"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                    <tr> 
                        <th>#</th>
                        <th>Name</th>
                        <th>Genre</th>
                        <th>Album Name</th>
                        <th>Album Year</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection