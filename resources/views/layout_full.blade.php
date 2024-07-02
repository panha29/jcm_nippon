<!DOCTYPE html>
<html lang="en" data-url-prefix="/">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>JCM Nippon Paint Cambodia | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('admin_dashboard._layout.head')
</head>
<body class="">
<div id="root" class="">
    <!-- Background Start -->
    <div class="fixed-background"></div>
    <!-- Background End -->

    <div class="container-fluid p-0 position-relative">
        <div class="auth-ui">
            @yield('content')
        </div>
    </div>
</div>
@include('admin_dashboard._layout.modal_settings')
@include('admin_dashboard._layout.scripts')
</body>
</html>
