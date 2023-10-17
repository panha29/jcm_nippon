@php
    $html_tag_data = [];
    $title = 'Dashboards';
    $description = 'Dashboard pages contains different layouts to provide stats, graphics, listings, categories, banners and so on. They have various implementations of plugins such as Datatables, Chart.js, Glide.js and Plyr.js with alternative extensions.';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>
@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/glide.min.js"></script>
<script src="/js/vendor/baguetteBox.min.js"></script>
<script src="/js/vendor/fuse.js"></script>

@endsection

@section('js_page')
<script src="/js/cs/glide.custom.js"></script>
<script src="/js/plugins/carousels.js"></script>
<script src="/js/pages/interface.icons.js"></script>

@endsection

@section('content')
@include('website.css')
    <div class="main-slide-responsive">
        @include('website.main_slide')
    </div>

    <div class="brand-responsive">
        @include('website.brand')
    </div>
    <div class="product-responsive">
        @include('website.product_slide')
    </div>
    <div class="service-responsive">
        @include('website.services')
    </div>
    <div class="professional-responsive">
        @include('website.professional')
    </div>

    {{-- @include('website.news') --}}
    {{-- @include('website.application') --}}
    {{-- @include('website.map') --}}
    <div class="footer-responsive">
        @include('website.footer')
    </div>
@endsection
