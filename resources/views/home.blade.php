@extends('layouts.app')
<style>
    html,
    body {
        background: url('image/popo.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
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

    .m-b-md {
        margin-bottom: 30px;
    }

    
</style>

<link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
  @stack('style')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;background-color:transparent">{{ __('DASHBOARD PEMINJAMAN') }}</div>



                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 style="text-align: center;" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data Perangkat Yang Disediakan </h1>
                            </div>
                            <div class="col-lg-3 col-6">
               
                           
                            
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">

                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="container-fluid"  >
                        <div class="row-center">
                            
                            <div class="col-lg-4 col-6  " >
                                <!-- smal   l box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/laptop.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Laptop</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/note.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Notebook</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/dekstop.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Dekstop</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/printer.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Printer</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/kamera.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Kamera</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/scan.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>Scanner</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-info">
                                    <div class="inner">
                                    <img src="{{asset('image/webcam.png')}}" alt="sasa" width="200" height="150">
            
                                       <p>WebCam</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-clipboard"></i>
                                    </div>
                                    <a href="{{route('userpinjam')}}"  class="small-box-footer">Pinjam Barang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>

                            </div>
                            
                            <!-- ./col -->
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