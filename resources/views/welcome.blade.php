@extends('layouts.login.content')

@section('content')
@php
    $informasi = App\InformasiToko::all();
@endphp
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            @if (Route::has('login'))
                @foreach ($informasi as $daf)
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{ url('uploads').'/'. $daf->image }}" alt="{{ $daf->image }}" alt="IMG">
                        <div class="text-center p-t-12">
                            <span class="txt1">
                                {{$daf->alamat}}
                            </span>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input required autocomplete="email" id="email" value="{{ old('email') }}" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input required autocomplete="current-password" id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center p-t-12">
                                <span class="txt1">
                                    Forgot
                                </span>
                                <a class="txt2" href="{{ route('password.request') }}">
                                    Username / Password?
                                </a>
                            </div>
                        @endif

                        <div class="text-center p-t-136">
                            @if (Route::has('register'))
                                <a class="txt2" href="{{ route('register') }}">
                                    Create your Account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            @endif
                        </div>
                    </form>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
