@extends('layouts.app')

@stack('style')
@section('content')

<div class="container">

    <div class="row justify-content-center; background-color:transparent">
        <div class="col-md-12">
            <div>
                <section class="content-header">

                    <div class="container-fluid ">
                        <div class="row mb-9">
                            <div class="col-md-12">
                                <h1 class="callout callout bg-dark" class="card-title" style="text-align: center;">FORM PEMINJAMAN PERANGKAT</h1>

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
                                        <a href="{{route('userpinjam','laptop')}}" class="btn btn-block bg-gradient-secondary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="{{route('userpinjam','desktop')}}" class="btn btn-block bg-gradient-secondary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="{{route('userpinjam','printer')}}" class="btn btn-block bg-gradient-secondary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat barcode reader.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p -align="center">
                                            <front color="black"><b>BARCODE READER</b></front><br />
                                        </p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','barcodescanner')}}" class="btn btn-block bg-gradient-secondary" style="background-color: black;border-color:blanchedalmond">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="{{route('userpinjam','scanner')}}" class="btn btn-block bg-gradient-secondary">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="small-box bg-orange">
                                        <img src="{{asset('image/flat vicon.jpg')}}" alt="sasa" width="200" height="150">
                                    </div>
                                    <div class="card-body">
                                        <p -align="center">
                                            <front color="black"><b>BARANG LAINNYA</b></front><br />
                                        </p>
                                        <p class="card-text"></p>
                                        <a href="{{route('userpinjam','bukanaset')}}" class="btn btn-block bg-gradient-secondary" style="background-color: black;border-color:blanchedalmond">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
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

</div>
@endsection