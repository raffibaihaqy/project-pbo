@extends('layouts.login.content')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{URL::asset('assets/loginform/images/rsz_3logo.jpg')}}" alt="IMG">
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Jl. Mayjen Sutoyo, RT.2/RW.9, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630
                        </span>
                    </div>
                </div>

                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                        <input required autocomplete="name" id="name" value="{{ old('name') }}" class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
                        <input required autocomplete="new-password" id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
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

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input required autocomplete="new-password" id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Sign-up
                        </button>
                    </div>


                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Have an account ?
                        </span>
                        <a class="txt2" href="{{ route('login') }}">
                            Sign-in here
                        </a>
                    </div>

                </form>
        </div>
    </div>
</div>
@endsection
