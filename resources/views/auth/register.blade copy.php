
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
    <script src="/js/pages/auth.register.js"></script>
@endsection

@section('content')
    <div style="margin-bottom:auto; margin-top:auto" class="sw-lg-70 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border register-ui mobile-register-screen">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="/">
                    {{-- <div class="logo-default"></div> --}}
                    <h1 style="font-weight:600; text-align:center;">NIPPON PAINT CAMBODIA</h1>

                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                <h2 class="cta-1 text-primary">let's get the ball rolling!</h2>
            </div>
            <div class="mb-5">
                <p class="h6">Please use the form to register.</p>
                <p class="h6">
                    If you are a member, please
                    <a href="login">login</a>
                    .
                </p>
            </div>
            <div>
                <form method="POST" action="{{ route('register') }}">

                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="user">{{ __('Name') }}</i>
                        <input class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" id="name" autocomplete="off"/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="email">{{ __('Email Address') }}</i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" id="email" autocomplete="off"/>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top" hidden>

                            <label for="" class="form-group col-5" style="color:black">Account Type:</label>
                            <input type="radio" class="btn-check" id="btnRadioPrimaryOutline" name="is_admin" value="1" id="is_admin" />
                            <label class="btn btn-outline-primary" for="btnRadioPrimaryOutline">Admin</label>
                            <input type="radio" class="btn-check" id="btnRadioSecondaryOutline" name="is_admin" value="0" id="is_admin" checked="true"/>
                            <label class="btn btn-outline-success" for="btnRadioSecondaryOutline"> User </label>

                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="lock-off">{{ __('Password') }}</i>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="lock-off">{{ __('Confirm Password') }}</i>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
                    </div>
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="btn btn-lg btn-primary" style="float: right">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

