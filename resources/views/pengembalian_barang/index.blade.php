@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Pengembalian Barang</h1>
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
      <a href="{{route('PengembalianBarang.create')}}">
        <button class="btn btn-primary">Klik untuk Pengembalian</button>

      </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>No</td>

            <td>Tanggal Pengembalian</td>
            <td>Keterangan</td>
          </tr>
        </thead>
        <tbody>

          @php
          $no = 1;
          @endphp
          @foreach($pengembalian as $p )
          <tr>
            <td>{{$no++}}</td>
            <td>{{$p->tgl_pengembalian}}</td>
            <td> <button type="button" onClick="detail('{{$p->nippos}}','{{$p->nama}}','{{$p->tgl_peminjaman}}')" class="btn btn-secondary" data-toggle="modal" data-target="#modal-secondary">
                Detail
              </button></td>


          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<div class="modal fade" id="modal-secondary">
  <div class="modal-dialog">
    <div class="modal-content bg-secondary">
      <div class="modal-header">
        <h4 class="modal-title">Data Peminjam</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td>NIPPOS</td>
            <td>:</td>
            <td id="nippos"></td>
          </tr>
          <tr>
            <td>Barang yang dipinjam</td>
            <td>:</td>
            <td id="nama_barang"></td>
          </tr>
          <tr>
            <td>Tanggal Pinjam</td>
            <td>:</td>
            <td id="tgl_pinjam"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.content -->
@endsection

@section('script')
<script>
  function detail(nippos, nama, tgl_peminjaman) {
    $('#nippos').html(nippos)
    $('#nama_barang').html(nama)
    $('#tgl_pinjam').html(tgl_peminjaman)
  }
</script>
@endsection