@extends('layouts.app')

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
            <h1>BIODATA USER</h1>
        </div>


    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <!-- <h2>Nama = {{$adm['name']}}</h2>
            <h2>Email = {{$adm['email']}}</h2>
            <h2>Nippos = {{$adm['nippos']}}</h2>
            <h2>No Telepon = {{$adm['no_telepon']}}</h2>
            <h2>Jabatan = {{$adm['jabatan']}}</h2>
            <h2>Bagian = {{$adm['bagian']}}</h2>
            <h2>Divisi = {{$adm['divisi']}}</h2> -->


            <table id="example1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{$adm['name']}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$adm['email']}}</td>
                    </tr>
                    <tr>
                        <th>Nippos</th>
                        <td>{{$adm['nippos']}}</td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td>{{$adm['no_telepon']}}</td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>{{$adm['jabatan']}}</td>
                    </tr>
                    <tr>
                        <th>Bagian</th>
                        <td>{{$adm['bagian']}}</td>
                    </tr>
                    <tr>
                        <th>Divisi</th>
                        <td>{{$adm['divisi']}}</td>
                    </tr>
                </tbody>
    

            </table>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

</section>
<!-- /.content -->
@endsection