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

    .loader {
        border: 16px solid #f3f3f3;
        /* Light grey */
        border-top: 16px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .btn-login {
        background-color: transparent;
        border-color: white;
    }

    .btn-login:hover {
        background-color: white;
        color: black;
    }
</style>

@endsection
@section('content')
<div class="container">

    <div class="row justify-content-center ">
        <div class="col-md-4 ">
            <div class="card bg-dark" style="margin-top: 3cm;">


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <p>__________________________________</p>
                            <label for="email" class="col-md-12 col-form-label" style="text-align: center;">{{ __('Masukan Email Anda') }}</label>
                            <p>__________________________________</p>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block btn-login">
                                    {{ __('Kirim Tautan ke Email Anda') }}
                                </button>


                            </div>


                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
</div>


@endsection