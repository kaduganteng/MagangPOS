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
    <form action="{{route('pemasangan.store')}}" method="post">
        @csrf


        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">ID Barang</label>
                <select name="idbarang">
                    @foreach($pemasangan as $p)
                    <option value="{{$p ->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Tanggal Pemasangan</label>
                <input type="date" class="form-control" name="tanggalpasang" id="tanggalpasang">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ruangan</label>
                <input type="text" class="form-control" name="ruangan" id="ruangan" placeholder="Masukan Nama Ruangan">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="almat" placeholder="Masukan Alamat Pemasangan ">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Status WebCam</label>
                <input type="text" class="form-control" name="status" id="status" placeholder="Masukan Status WebCam ">
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