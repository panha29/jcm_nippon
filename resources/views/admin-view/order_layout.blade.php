<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value) data-{{$key}}='{{$value}}' @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Kesor Boutique | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('admin-view._layout.order_head')
</head>
<style>
.dt-button {
    margin-top: -65% !important;
    font-family: var(--font);
    padding: 10px 20px;
    display: flex;
    font-size: 1em;
    line-height: 1rem;
    border: initial;
    box-shadow: initial !important;
    transition: all var(--transition-time-short);
    transition-property: color, background-color, background-image, background;
    border-radius: var(--border-radius-md);
    color: var(--light-text) !important;
    white-space: nowrap;
    background-color: var(--success) !important;
    }
.dt-buttons {
    float: right !important;
    }
</style>
<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value)
    data-{{$key}}="{{$value}}"
        @endforeach
        @endisset
    >
        @include('admin-view._layout.nav')
    </div>
    <main
        @isset($custom_main_class)
        class="{{$custom_main_class}}"
        @endisset
    >
        @yield('content')
    </main>
    {{-- @include('admin-view._layout.footer') --}}
</div>
@include('admin-view._layout.modal_settings')
@include('admin-view._layout.modal_search')
@include('admin-view._layout.scripts')
</body>
</html>
