@extends('templates/header')

@section('content')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
<script>
  Swal.fire(
    'Done!',
    'Data Anda berhasil Diubah',
    'success'
  )
</script>
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
              <a href="{{route('inventory.destroy',$i->id)}}"><button class="btn btn-danger">DELETE</button></a>
              <a href="{{route('inventory.edit',$i->id)}}"><button class="btn btn-success">UPDATE</button></a>



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