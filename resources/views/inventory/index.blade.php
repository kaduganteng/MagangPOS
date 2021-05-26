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
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Inventory</h1>
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
      <a href="{{route('inventory.create')}}">
        <button class="btn btn-primary">Input Barang baru</button>

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
            <td>Opsi</td>
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
            <td>{!!$i->kelengkapan!!}</td>
            <td>{{$i->tgl_masuk}}</td>
            <td>
              <a href="{{route('inventory.destroy',$i->id)}}"><button class="btn btn-primary">DELETE</button></a>
              <a href="{{route('inventory.edit',$i->id)}}"><button class="btn btn-primary">UPDATE</button></a>



            </td>



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