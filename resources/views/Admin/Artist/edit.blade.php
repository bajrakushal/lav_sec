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
                    <li class="breadcrumb-item active" aria-current="page"> Edit </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Edit Artist -- {{ $datas->name }}</h5>
            <div class="card-body">
                <form action="/admin/artist/update/{{ $datas->id }}" method="post" class="needs-validation" novalidate>
                   @csrf 
                   @method("PUT")
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Artist</label>
                            <input type="text" class="form-control" name="artist" value="{{ $datas->name }}"  required>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Genre</label>
                            <input type="text" class="form-control" name="genre" value="{{ $datas->genre }}" required>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Album</label>
                            <input type="text" class="form-control" name="album" value="{{ $datas->album }}" required>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Album published year</label>
                            <input type="date" class="form-control" name="year" value="{{ $datas->date }}" required>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Album price</label>
                            <input type="text" class="form-control" name="price" value="{{ $datas->price }}" required>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $datas->description }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">File Input</label>
                            </div>
                        </div> --}}
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary" type="submit" name="Add">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
@endsection