@extends('layouts.app')
<style>
    body {
        background: url("{{asset('image/hui.jpg')}}");
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

    html,
    body {

        background-color: white;
        /* For browsers that do not support gradients */



        font-family: Verdana, Geneva, Tahoma, sans-serif;
        ;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .transparent-bgopc {
        padding: 20px;
        text-align: center;
        font-size: 26px;
        opacity: 0.6;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .section {
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: transparent;
    }

    .card {
        background-color: transparent;
        width: 100%;
        height: auto;
        grid-column: span 8;
        margin: 10px 0;
        border-radius: 15px;
        position: relative;
        box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
        margin-top: 20px;
    }

    .container-card {
        padding: 0;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        margin: 5px 15px;
        gap: 20px;
        position: relative;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .body-card {
        padding: 300px 15px;
    }

    .body-card h1 {
        margin: 0;

    }

    h1 {
        font-family: Georgia, serif;
        font-weight: bold;
        color: white;
        font-style: serif;
        font-size: 20px;
    }

    p {
        font-family: Georgia, serif;
        font-weight: bold;
        color: white;
        font-style: arial;
        font-size: 20px;
    }

    .title {
        font-family: roboto;
        text-align: center;
        color: orange;

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
            <p class="card-title" style="text-align: center;">Silahkan isi data di bawah ini </p>

        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('peminjaman.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <div class="form-group">
                    <p <label for="exampleInputEmail1">Nama Barang</label></p>
                    <select class="form-control select2" name="inv_id">
                        @foreach($inventory as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <p <label for="exampleInputFile">Tanggal Pinjam</label> </p>
                    <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam">

                </div>
                <div class="form-group">
                    <p <label for="exampleInputPassword1">NIPPOS</label></p>
                    <select class="form-control select2" name="nip" id="nip">
                        @foreach($user as $u)
                        <option value="{{$u->nippos}}">{{$u->nippos}} - {{$u->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p <label for="exampleInputPassword1">Surat Peminjaman</label></p>
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