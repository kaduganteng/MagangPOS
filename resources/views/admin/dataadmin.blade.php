@extends('templates/header')

@section('content')

@if(session()->has('success'))
<div id="toastsContainerTopRight" class="toasts-top-right fixed">
    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"><strong class="mr-auto">Berhasil</strong><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button></div>
        <div class="toast-body">{{Session::get('success')}}</div>
    </div>
</div>
@endif
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">

        <div class="col-md-12" style="text-align: center;">
            <h1>Biodata Admin</h1>
        </div>


    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <div class="image" style="text-align: center;">
                <img src="{{ asset('image/admina.png') }}" class="img-circle elevation-2" alt="User Image" width="100" height="100">
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

        <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead style="text-align-center">
         
       <h2>Nama = {{$adm['name']}}</h2>
       <h2>Email = {{$adm['email']}}</h2>
       <h2>Nippos = {{$adm['nippos']}}</h2>
       <h2>No Telepon = {{$adm['no_telepon']}}</h2>
       <h2>Jabatan = {{$adm['jabatan']}}</h2> 

        </thead>
      
    </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

</section>
<!-- /.content -->
@endsection