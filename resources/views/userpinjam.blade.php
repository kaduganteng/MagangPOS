@extends('layouts.app')
<style>
    body {
        background: url('image/hui.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
        font-family: comic sans-serif;
    }

    .text-black {
        color: black;
    }

    .text-white {
        color: white;
    }
</style>


@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
<script>
Swal.fire(
  'Done!',
  'Data Anda berhasil Dihapus',
  'success'
)
</script>
@endif
<!-- general form elements -->
<div class="row justify-content-center ">
    <div class="col-md-5" style="margin-top: 1,5cm;">
        <div class="card-header">
            <h3 class="card-title" style="text-align: center;">PINJAM BARANG</h3>
            <h5 class="card-title" style="text-align: center;">isi form dibawah ini sesuai dengan yang anda butuhkan </h5>

        </div>  
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('peminjaman.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <select class="form-control select2" name="inv_id">
                        @foreach($inventory as $p)
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
                    <input type="file" class="form-control" name="suratpinjam" id="suratpinjam" placeholder="Masukan NIPPOS anda">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer" style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: black;border-color:blanchedalmond">SUBMIT</button>

            </div>
            <div class="col-md-8 offset-md-4">

                <a class="btn btn-link text-white" href="{{ route('home') }}">
                    {{ __('Kembali') }}
                </a>

            </div>
        </form>
    </div>


</div>

<!-- /.card -->
@endsection