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
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ asset('assets') }}/index3.html" class="nav-link">Home</a>
        </li>

        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar navbar-dark elevation-4">
      <!-- Brand Logo -->
      <a href="{{ asset('assets') }}/index3.html" class="brand-link">
        <img src="{{ asset('image') }}/pos.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
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

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link">
                <i class="nav-icon ion ion-android-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('inventory')}}" class="nav-link">
                <i class="nav-icon ion ion-ios-filing"></i>
                <p>
                  Inventori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kategori_inventory')}}" class="nav-link">
                <i class="nav-icon ion ion-social-buffer"></i>
                <p>
                  Kategori Inventori
                </p>  
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('peminjaman.index')}}" class="nav-link">
                <i class="nav-icon ion ion-ios-redo"></i>
                <p>
                  Peminjaman
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('PengembalianBarang.index')}}" class="nav-link">
                <i class="nav-icon ion ion-ios-undo"></i>
                <p>
                  Pengembalian
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('pemasangan.index')}}" class="nav-link">
                <i class="nav-icon ion ion-ios-camera"></i>
                <p>
                  Pemasangan WebCam
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