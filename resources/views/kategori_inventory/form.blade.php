@extends('templates/header')

@section('content')
<link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
@if(session()->has('success'))
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script>

 $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

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
            <button type="submit"  class="btn btn-primary swalDefaultSuccess">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection