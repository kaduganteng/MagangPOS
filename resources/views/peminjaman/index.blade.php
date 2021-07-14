@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Peminjaman Barang</h1>
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
            <a href="{{route('peminjaman.create')}}">
                <button class="btn btn-primary">Klik sini untuk Pinjam</button>

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
                        <td>Nama Peminjam</td>
                        <td>Surat Peminjaman</td>
                        <td>Opsi</td>
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
                        <td>{{$p->name}}</td>
                        <td>{{$p->surat_peminjaman}}</td>
                        <td>
                            @if($p->tgl_pengembalian == null)
                            <button class="btn btn-primary" onClick="acc('{{$p->id}}')" data-toggle="modal" data-target="#modal-secondary">ACC</button>
                            @else
                            {{$p->tgl_pengembalian}}
                            @endif
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
<div class="modal fade" id="modal-secondary">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">ACC PEMINJAMAN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="post">
                @csrf()
                <div class="modal-body">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian">
                    <p>*Isi jika barang yang di pinjam bukan aset</p>
                </div>
                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.content -->
@endsection
@section('script')
<script>
    function acc(id) {
        var url = "{{route('admin.peminjaman.acc','id')}}";
        url = url.replace('id', id);
        $('#form').attr('action', url)
    }
</script>
@endsection