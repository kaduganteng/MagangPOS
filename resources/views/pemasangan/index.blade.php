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
            <a href="{{route('pemasangan.create')}}">
                <button class="btn btn-primary">Mau Masang yaa,Klik sini</button>

            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Id Barang</td>
                        <td>Tanggal Pemasangan</td>
                        <td>Ruangan</td>
                        <td>Alamat</td>
                        <td>Status WebCam</td>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $no = 1;
                    @endphp
                    @foreach($inv as $p )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$p->inv_id}}</td>
                        <td>{{$p->tgl_pemasangan}}</td>
                        <td>{{$p->ruangan}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->status}}</td>
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