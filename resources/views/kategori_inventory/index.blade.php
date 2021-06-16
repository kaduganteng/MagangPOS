@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kategori Inventory</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

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
            <a href="{{route('kategori.create')}}">
                <button class="btn btn-primary">Input Kategori baru</button>

            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Kategori</td>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $no = 1;
                    @endphp
                    @foreach($kategori as $k )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$k->nama_kategori}}</td>
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