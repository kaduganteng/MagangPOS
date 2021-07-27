<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="shortcut icon" href="{{asset('image/pos.png')}}" type="image/x-icon">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('image/pos.png')}}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {

            background-color: white;
            /* For browsers that do not support gradients */
            background-image: linear-gradient(180deg, white, gray);


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



        .title {
            font-family: roboto;
            text-align: center;
            color: orange;

        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
    @yield('style')


</head>

<body>

    <div id="app">
        @auth
        <nav class="navbar navbar-expand-lg navbar-dark teal mb-4">

            <a href="/home" class="brand-link">
                <img src="{{ asset('image/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span style="color:white;" class="brand-text font-weight-light">{{config('app.name')}}</span>
            </a>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest

                    @else
                    @if(Auth::user()->role_id=='1')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inventory') }}">{{ __('Admin') }}</a>
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('datauser') }}">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>
    @endauth
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
<!-- select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>


</html>