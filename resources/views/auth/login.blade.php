@php
    $title = 'Login Page';
    $description = 'Login Page'
@endphp
@extends('layout_full',['title'=>$title, 'description'=>$description])
@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/auth.login.js"></script>
@endsection


{{-- <style>
    .logo{
        width: 180px;
        margin-top:-100px;
        margin-left: 120px;
    }
</style> --}}
@section('content')

        <div class="sw-lg-70 min-h-70 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border login-ui" >
            <div class="sw-lg-50 px-5">
                <div class="sh-11">
                    {{-- <a href="/"> --}}
                        {{-- <div class="logo-default"></div> --}}
                        <h1 style="font-weight:600; text-align:center;">NIPPON PAINT CAMBODIA</h1>
                        {{-- <img src="../img/logo/npp.png" alt="" class="logo"> --}}
                    {{-- </a> --}}
                </div>
                <div class="mb-5">
                    <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                    <h2 class="cta-1 text-primary">let's get started!</h2>
                </div>
                <div class="mb-5">
                    <p class="h6">Please use your credentials to login.</p>
                    <p class="h6">
                        If you are not a member, please
                        <a href="register">register</a>
                        .
                    </p>
                </div>
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-acorn-icon="email"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-acorn-icon="lock-off"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <a class="text-small position-absolute t-3 e-3" href="verify">Forgot?</a> --}}
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary" style="float: right">Login</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
