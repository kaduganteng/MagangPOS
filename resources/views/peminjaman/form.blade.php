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
        <h3 class="card-title">PINJAM BARANG</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.peminjaman.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Inventory</label>

                <select class="form-control select2" name="inv_id">
                    @foreach($peminjaman as $p)
                    <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Tanggal Pinjam</label>
                <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">NIPPOS</label>
                <select class="form-control select2" name="nip" id="nip">
                    @foreach($user as $u)
                    <option value="{{$u->nippos}}">{{$u->nippos}} - {{$u->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Surat Peminjaman</label>
                <input type="file" class="form-control" name="suratpinjam" id="suratpinjam">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection