<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value) data-{{$key}}='{{$value}}' @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Acorn Admin Template | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('user_dashboard._layout.head')
</head>
<style>
    @media only screen and (max-width: 600px) {
    .main{
        padding-left: 0px !important;
    }
}
</style>
<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value)
    data-{{$key}}="{{$value}}"
        @endforeach
        @endisset
    >
        @include('user_dashboard._layout.web-nav')
    </div>
    <main style="padding:0">
        @yield('content')
    </main>
    @include('user_dashboard._layout.footer')
</div>
{{-- @include('user_dashboard._layout.modal_settings') --}}
{{-- @include('user_dashboard._layout.modal_search') --}}
@include('user_dashboard._layout.scripts')
</body>

</html>
