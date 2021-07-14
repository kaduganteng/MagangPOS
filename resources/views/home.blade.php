@extends('layouts.app')
<style>
    html,
    body {

        background-color: white;
        /* For browsers that do not support gradients */
        background-image: linear-gradient(180deg, white, orange);


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
        font: 50px impact, sans-serif;
    }

    p {
        font-family: Georgia, serif;
        font-weight: bold;
        color: black;
        font-style: arial;
        font-size: 20px;
    }

    .title {
        font-family: roboto;
        text-align: center;
        color: orange;

    }
</style>

<link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
@stack('style')
@section('content')

<div class="container">
    <div class="row justify-content-center; background-color:transparent">
        <div class="col-md-12">
            <div>




                <!-- Content Header (Page header) -->

                <section class="content-header">

                    <div class="container-fluid ">
                        <div class="row mb-9">
                            <div class="col-md-12">
                                <h1 class="title card-header bg-dark" class="card-title" style="text-align: center;">FORM PEMINJAMAN PERANGKAT</h1>
                                <div class="col-lg-9 col-12">



                                    <div class="col-sm-12">
                                        <ol class="breadcrumb float-sm-center">

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->

                <section class="content">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat laptop.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p -align="center">
                                            <front color="black"><b>LAPTOP</b></front><br />
                                        </p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','laptop')}}" class="btn btn-primary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat pc.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p color="black"><b>DEKSTOP</b></front><br /></p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','desktop')}}" class="btn btn-primary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat printer.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p -align="center">
                                            <front color="black"><b>PRINTER</b></front><br />
                                        </p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','printer')}}" class="btn btn-primary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat camera.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p <front color="black"><b>KAMERA</b></front><br /></p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','kamera')}}" class="btn btn-primary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat scanner.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p -align="center">
                                            <front color="black"><b>SCANER</b></front><br />
                                        </p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','scanner')}}" class="btn btn-primary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.content -->



                </a>

            </div>
        </div>
    </div>
</div>
@endsection