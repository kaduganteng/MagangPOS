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
    <form action="{{route('PengembalianBarang.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <label for="exampleInputFile">Masukan Serial nomer barang</label>
                <select class="form-control select2" name="peminjaman_id">
                    @foreach($pinjam as $p)
                    <option value="{{$p->id}}">{{$p->sn}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Tanggal Pengembalian</label>
                <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam">

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