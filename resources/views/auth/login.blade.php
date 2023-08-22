{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


    <!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 17 Dec 2021 05:57:43 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
{{--    {{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}--}}
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/css/bootstrap.css')}}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/fonts/pe-icon-7-stroke/css/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('theme-assets/styles/style.css')}}"/>

</head>
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

{{--<div class="back-link">--}}
{{--    <a href="index-2.html" class="btn btn-primary">Back to Dashboard</a>--}}
{{--</div>--}}

<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h1>PLEASE LOGIN TO APP</h1>
                <h2>ECM !</h2>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
{{--                            <span class="help-block small">Your unique username to app</span>--}}
                            @error('email')
                            <span class="help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
{{--                            <span class="help-block small">Yur strong password</span>--}}
                            @error('password')
                            <span class="help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Remember Me</label>
{{--                            <div class="checkbox">--}}
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="i-checks form-check-input" />
{{--                                Remember login--}}
{{--                                <p class="help-block small">(if this is a private computer)</p>--}}
{{--                            </div>--}}
                        </div>
                        <button class="btn btn-success btn-block">Login</button>
{{--                        <a class="btn btn-default btn-block" href="#">Register</a>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>EFU Life Assurance</strong> <br/> 2020 Copyright Avrio Global
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<link rel="stylesheet" href="{{asset('theme-assets/vendor/jquery/dist/jquery.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/jquery-ui/jquery-ui.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/slimScroll/jquery.slimscroll.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/metisMenu/dist/metisMenu.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/fiCheck/icheck.min.js')}}"/>
<link rel="stylesheet" href="{{asset('theme-assets/vendor/sparkline/index.js')}}"/>

<!-- App scripts -->
<script src="{{asset('theme-assets/scripts/homer.js')}}"></script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 17 Dec 2021 05:57:43 GMT -->
</html>
