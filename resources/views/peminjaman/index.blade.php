@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blank Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <a href="{{route('peminjaman.create')}}">
                <button class="btn btn-primary">PINJAM</button>

            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Barang Di Pinjam</td>
                        <td>Tanggal Pinjam</td>
                        <td>NIPPOS</td>
                        <td>Surat Peminjaman</td>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $no = 1;
                    @endphp
                    @foreach($peminjaman as $p )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->tgl_peminjaman}}</td>
                        <td>{{$p->nippos}}</td>
                        <td>{{$p->surat_peminjaman}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection