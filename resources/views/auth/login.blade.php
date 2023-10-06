@php
    $title = 'Login Page';
    $description = 'Login Page'
@endphp
@extends('admin-view.layout_full_v2',['title'=>$title, 'description'=>$description])
@section('css')
@endsection

@section('js_vendor')
    {{-- <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script> --}}
@endsection

@section('js_page')
@endsection
@include('admin-view._layout/headv2')
<style>
    * {
    /* -webkit-user-select: none; */
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>


@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                {{-- <img src="login_v2/images/img-01.png" alt="IMG" draggable="false"> --}}
                <img src="img/logo.png" alt="IMG" draggable="false">
            </div>

            <form class="login100-form validate-form" id="loginForm" method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                <span class="login100-form-title">
                    Member Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
@endsection
{{-- @php
    $title = 'Login Page';
    $description = 'Login Page'
@endphp
@extends('admin-view.layout_full',['title'=>$title, 'description'=>$description])
@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
@endsection

@section('js_page')
@endsection
@include('admin-view._layout/head')
@section('content_left')
<style>
    * {
    /* -webkit-user-select: none; */
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white">Multiple Concepts</h1>
                    <h1 class="display-3 text-white">Ready for Your Project</h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Dynamically target high-payoff intellectual capital for customized technologies. Objectively integrate emerging core competencies before
                    process-centric communities...
                </p>
                <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="/">
                   <div class="logo-default"></div>
                    <h1 style="font-weight:600">KESOR BOUTIQUE</h1>
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                <h2 class="cta-1 text-primary">let's get started!</h2>
            </div>
            <div class="mb-5">
                <p class="h6">Please use your credentials to login.</p>
                <p class="h6">
                    If you are not a member, please
                    <a href="/register" style="color: #4e4e4e">register</a>
                    .
                </p>
            </div>
            <div>
                <form id="loginForm" class="tooltip-end-bottom" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="email">{{ __('Email Address') }}</i>
                        <input autocomplete="off" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" name="email" value="{{ old('email') }}" requireds autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="lock-off">{{ __('Password') }}</i>
                        <input class="form-control pe-7 @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password"  name="password" required autocomplete="current-password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
