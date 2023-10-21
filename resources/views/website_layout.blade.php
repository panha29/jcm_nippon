<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value)
    data-{{$key}}='{{$value}}'
    @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>HomeFix | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('admin_dashboard._layout.head')
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" @isset($custom_nav_data) @foreach ($custom_nav_data as $key=> $value)
    data-{{$key}}="{{$value}}"
        @endforeach
        @endisset
    >
    </div>
    <main>
        @yield('content')
    </main>
    {{-- @include('admin_dashboard._layout.footer') --}}
</div>
@include('admin_dashboard._layout.modal_settings')
@include('admin_dashboard._layout.modal_search')
@include('admin_dashboard._layout.scripts')
</body>

</html>
