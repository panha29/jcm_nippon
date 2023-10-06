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
                <img src="login_v2/images/img-01.png" alt="IMG" draggable="false">
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
