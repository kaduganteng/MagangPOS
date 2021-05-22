@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blank Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <div class="row">
            @foreach($stok as $s)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$s->jml}}</h3>

                        <p>{{$s->nama_kategori}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-heart-broken"></i>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- ./col -->
        </div>
    </div>

</section>
<!-- /.content -->
@endsection