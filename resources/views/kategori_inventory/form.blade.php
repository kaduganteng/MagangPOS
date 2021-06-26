@extends('templates/header')

@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
<script>
    Swal.fire(
        'Done!',
        'Data Anda berhasil Ditambahkan',
        'success'
    )
</script>
@endif
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Kategori Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('kategori.store')}}" method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Kategori Baru">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <div id=" swalDefaultSuccess">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection