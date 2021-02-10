@extends('layouts.app')

@section('content')
<div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url('themes/realhomes/assets/classic/images/banner.jpg'); background-size: cover; ">
                <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>Login </span></h1>
                <p>Welcome to login page! </p>            </div>
        </div>
            </div><!-- End Page Head -->

<section>

<div class="container">
<div class="section-content">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
<div class="container contents single login-register">
    <div class="row">
        <div class="span12 main-wrap">

                            <h3><span>Login </span></h3>

            <!-- Main Content -->
            <div class="main">

                <div class="inner-wrapper">
                    						<div class="forms-simple">

                        <div class="row-fluid">

                            <div class="span12">
<p class="info-text">Already a Member? Log in here.</p>
<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror col-md-12" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-center">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <!--<button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>-->
                                <button type="submit" class="btn btn-primary">
                                <a href="{{route('register')}}">
                                {{ __('Register') }}
                                </a>
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
</section>
@endsection
