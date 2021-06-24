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
        <h3 class="card-title">Tambah Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{empty($data) ? route('inventory.store'):route('inventory.update',$data->id)}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Kategori</label>
                <select name="kategori_id">
                    @if(!empty(@$data->kategori_id))
                    <option value="{{@$data->kategori_id}}" {{!empty($data->nama_kategori)?'selected':''}}>{{$data->nama_kategori}}</option>
                    @endif
                    @foreach($kategori as $k)
                    <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{@$data->nama}}" placeholder="Masukan Nama Barang">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nomor Serial</label>
                <input type="text" class="form-control" name="sn" id="sn" value="{{@$data->sn}}" placeholder="Masukan Nomor Serial ">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Merk</label>
                <input type="text" class="form-control" name="merk" id="merk" value="{{@$data->merk}}" placeholder="Masukan Merk ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kelengkapan</label>
                <textarea name="kelengkapan" id="kelengkapan" cols="30" rows="10">{{empty($data)? '':$data->kelengkapan}}</textarea>
                <!-- <input type="text" class="form-control" name="kelengkapan" id="kelengkapan" placeholder="Masukan Kelengkapan "> -->
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Tanggal Masuk</label>
                <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{@$data->tgl_masuk}}">

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

@section('script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('kelengkapan');
</script>
@endsection