@extends('layouts.app')
@section('style')
<style>
    .btn-regis {
        background-color: transparent;
        border-color: white;
    }

    .btn-regis:hover {
        background-color: white;
        color: black;
    }
</style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header text-white" style="text-align: center;">
                    <p>____________________________________________________________________________</p>

                    <h1> {{(' REGISTER')}}</h1>
                    <p>isi form berikut dengan data yang benar</p>
                    <p>____________________________________________________________________________</p>

                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NIPPOS') }}</label>

                            <div class="col-md-6">
                                <input id="nippos" type="text" class="form-control @error('nippos') is-invalid @enderror" name="nippos" value="{{ old('nippos') }}" required autocomplete="nippos" autofocus>

                                @error('nippos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NO Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" required autocomplete="no_telepon" autofocus>

                                @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Jabatan') }}</label>

                            <div class="col-md-6">
                                <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" autofocus>

                                @error('jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bagian') }}</label>

                            <div class="col-md-6">
                                <input id="bagian" type="text" class="form-control @error('bagian') is-invalid @enderror" name="bagian" value="{{ old('bagian') }}" required autocomplete="bagian" autofocus>

                                @error('bagian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Divisi') }}</label>

                            <div class="col-md-6">
                                <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror" name="divisi" value="{{ old('divisi') }}" required autocomplete="divisi" autofocus>

                                @error('divisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Direktorat') }}</label>

                            <div class="col-md-6">
                                <input id="direktorat" type="text" class="form-control @error('direktorat') is-invalid @enderror" name="direktorat" value="{{ old('direktorat') }}" required autocomplete="direktorat" autofocus>

                                @error('direktorat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4    ">
                                <button type="submit" class="btn btn-primary btn-block btn-regis  ">
                                    {{ __('REGISTER') }}
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
                <p style="text-align: center;">____________________________________________________________________________</p>
            </div>
        </div>
    </div>
</div>
@endsection