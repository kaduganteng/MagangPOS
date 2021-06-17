@extends('templates/header')

@section('content')
@if(session()->has('success'))
<div>


</div>
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
            <button type="submit"  class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection