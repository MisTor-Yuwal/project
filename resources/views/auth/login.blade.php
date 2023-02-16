@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-bg">
        <div class="bg-img1">
            <div class="bgimg1">
                <img src="{{ asset('style/images/ops1.png') }}" alt="" class="bgimg-1">
            </div>
            <div class="bgimg2">
                <img src="{{ asset('style/images/My project (3).png') }}" alt="" class="bgimg-2">
                <img src="{{ asset('characters/ops/My project.png') }}" alt="" class="bgimg-3">
            </div>
        </div>
        <div class="border"></div>
        <div class="bg-section-2">
            <div class="bs2-1">
                <img src="{{ asset('characters/bs2/m101.png') }}" alt="" class="bs2-img1">
            </div>
            <div class="bs2-2">
                <img src="{{ asset('characters/bs2/mecha601.png') }}" alt="" class="bs2-img2">
                <img src="{{ asset('characters/bs2/mecha701.png') }}" alt="" class="bs2-img3">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card login-card">
                    <div class="card-header extra">{{ __('WELCOME BACK') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end extra">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end extra">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label extra" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link extra2" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-link extra2">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
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
