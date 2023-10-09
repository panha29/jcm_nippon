<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value) data-{{$key}}='{{$value}}' @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    @include('front_end._layout.head')
</head>
<script>


</script>
@include('front_end/css')
<body>
<div id="root">
    <div id="nav" class="nav-container horizontal-nav" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value) data-{{$key}}="{{$value}}" @endforeach @endisset>@include('front_end._layout.nav')</div>
    <main @isset($custom_main_class) class="{{$custom_main_class}}" @endisset>
        @yield('content')
    </main>
@include('front_end.big_slider.main_slider')
@include('front_end.brand.brand')
@include('front_end.product.product')

</div>
@include('front_end._layout.modal_settings')
@include('front_end._layout.modal_search')
@include('front_end._layout.scripts')

</body>
</html>
