@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_user" class="col-md-4 col-form-label text-md-right">{{ __('Nama User') }}</label>

                            <div class="col-md-6">
                                <input id="nama_user" type="text"
                                    class="form-control{{ $errors->has('nama_user') ? ' is-invalid' : '' }}" name="nama_user"
                                    value="{{ old('nama_user') }}" required autofocus>

                                @if ($errors->has('nama_user'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_user') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hp" class="col-md-4 col-form-label text-md-right">{{ __('HP') }}</label>

                            <div class="col-md-6">
                                <input id="hp" type="text"
                                    class="form-control{{ $errors->has('hp') ? ' is-invalid' : '' }}" name="hp"
                                    value="{{ old('hp') }}" required autofocus>

                                @if ($errors->has('hp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('hp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text"
                                    class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude"
                                    value="{{ old('latitude') }}" required autofocus>

                                @if ($errors->has('latitude'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('latitude') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text"
                                    class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude"
                                    value="{{ old('longitude') }}" required autofocus>

                                @if ($errors->has('longitude'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('longitude') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
