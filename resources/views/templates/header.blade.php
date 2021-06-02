<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name')}} | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
  @stack('style')
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="hold-transition sidebar-mini">

  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-black" style="background-color:#f7a440;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:white;"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset('assets') }}/index3.html" class="nav-link" style="color:white;">Home</a>
        </li>

        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" style="color: white;">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Lihat semua pemberitahuan</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->

        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="color: white;">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="color: white;">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4" style="background-color:#e1701a;">
      <!-- Brand Logo -->
      <a href="{{ asset('assets') }}/index3.html" class="brand-link">
        <img src="{{ asset('assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span style="color:white;" class="brand-text font-weight-light">{{config('app.name')}}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>
        <hr style="background-color: white;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{route('dashboard')}}" style="color:white;" class="nav-link">
                <i class="fa fa-tachometer-alt"></i>
                <p>
                  &nbsp;Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('inventory')}}" style="color:white;" class="nav-link">
                <i class="fa fa-archive"></i>
                <p>
                  &nbsp; Inventori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kategori_inventory')}}" style="color:white;" class="nav-link">
                <i class="fa fa-bars"></i>
                <p>
                  &nbsp; Kategori Inventori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('peminjaman.index')}}" style="color:white;" class="nav-link">
                <i class="fa fa-upload"></i>
                <p>
                  &nbsp; Peminjaman
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('PengembalianBarang.index')}}" style="color:white;" class="nav-link">
                <i class="fa fa-download"></i>
                <p>
                  &nbsp; Pengembalian
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('pemasangan.index')}}" style="color:white;" class="nav-link">
                <i class="fa fa-camera"></i>
                <p>
                  &nbsp; Pemasangan WebCam
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('templates/footer')