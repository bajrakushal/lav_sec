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
                <a class="nav-link active" href="/admin/dashboard"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/admin/artist/"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Artist</a>
            </li>
        </ul>
    </div>
</nav>
@endsection
@section('content')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">{{ Auth::user()->name }} Dashboard </h2>
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="text-muted">Total Artist</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">50</h1>
            </div>
            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5%</span>
            </div>
        </div>
        <div id="sparkline-revenue"></div>
    </div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="text-muted">Total Albums</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">155</h1>
            </div>
            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>10%</span>
            </div>
        </div>
        <div id="sparkline-revenue2"></div>
    </div>
</div>

@endsection