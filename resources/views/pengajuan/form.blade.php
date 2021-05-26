@extends('templates/header')

@section('content')
@if(session()->has('success'))
<div id="toastsContainerTopRight" class="toasts-top-right fixed">
    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"><strong class="mr-auto">Berhasil</strong><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button></div>
        <div class="toast-body">Data anda sudah ditambahkan!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
    </div>
</div>
@endif
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('pengajuan.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">NIPPOS</label>
                <input type="number" class="form-control" name="nip" id="nip" placeholder="Masukan NIPPOS anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" placeholder="Maksukan Nama anda ">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan Nama Barang">

            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection