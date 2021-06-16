@extends('layouts.app')
@section('style')
<style>
    body {
        background: url('image/huhuhu.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        ;
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
        <div class="col-md-4">
            <div class="card" style="margin-top: 3cm;background-color:transparent;border-color: transparent">

                <div class="card-header text-white" style=";text-align: center;">
                    <img src="{{asset('image/akupos.png')}}" alt="" width="300" height="250">
                    <label for="email" class="col-md-8 col-form-label text-white">{{(' WEB INVENTORY')}}</label>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-8 col-form-label text-white">{{('E-Mail')}}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-8 col-form-label  text-white">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="background-color: transparent;border-color:white">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?klik disini') }}
                                </a>
                                @endif
                            </div>
                            <div class="col-md-8 offset-md-4">

                                <a class="btn btn-link text-white" href="{{ route('register') }}">
                                    {{ __('Belum punya akun? Register') }}
                                </a>

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