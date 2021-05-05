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
        <h3 class="card-title">PINJAM BARANG</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('peminjaman.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Inventory</label>
                <select name="inv_id">
                    @foreach($peminjaman as $p)
                    <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Tanggal Pinjam</label>
                <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">NIPPOS</label>
                <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukan NIPPOS anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Surat Peminjaman</label>
                <input type="text" class="form-control" name="suratpinjam" id="suratpinjam" placeholder="Masukan NIPPOS anda">
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