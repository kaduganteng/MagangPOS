@extends('layouts.app')
@section('style')
<style>
    body {
        background: url('image/posindo.jpg');
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

@endsection
@section('content')
<div class="container">

    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card" style="margin-top: 5cm;background-color:transparent">
                <img src="{{asset('image/pos.png')}}" alt="" 
                <div class="card-header text-black" style="background-color: orange;text-align: center;">

                    <h1><b>{{ __('INI LOGIN  ') }}</b></h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: transparent;border-color:white">
                                    {{ __('Login') }}
                                </button>


                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                                @endif
                                @if (Route::has('register'))
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Belum punya akun? Register') }}
                                </a>
                                @endif

                            </div>


                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection