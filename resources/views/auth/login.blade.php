@extends('layouts.app')

@section('content')
    <style>
        html{
            background: #f4f4f4
        }
    </style>


<div class="bgs">
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header loginfont">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" class="login" action="{{ route('login') }}">
                        @csrf

                        @if(Session::has('message'))
                            <div class="alert alert-success text-center">
                                <span>{{ Session::get('message') }}</span>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="example@example.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} vero-field" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} vero-field" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary vero-btn1">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link vero-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
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
