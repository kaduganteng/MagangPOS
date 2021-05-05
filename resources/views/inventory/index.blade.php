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
      <a href="{{route('inventory.create')}}">
        <button class="btn btn-primary">Input Barang</button>

      </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>No</td>
            <td>Kategori</td>
            <td>Nama Barang</td>
            <td>SN</td>
            <td>MERK</td>
            <td>Kelengkapan</td>
            <td>Tanggal Masuk</td>
          </tr>
        </thead>
        <tbody>

          @php
          $no = 1;
          @endphp
          @foreach($inv as $i )
          <tr>
            <td>{{$no++}}</td>
            <td>{{$i->nama_kategori}}</td>
            <td>{{$i->nama}}</td>
            <td>{{$i->sn}}</td>
            <td>{{$i->merk}}</td>
            <td>{{$i->kelengkapan}}</td>
          <td>{{$i->tgl_masuk}}</td>

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