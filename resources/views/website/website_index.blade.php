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
@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/glide.min.js"></script>
<script src="/js/vendor/baguetteBox.min.js"></script>
@endsection

@section('js_page')
<script src="/js/cs/glide.custom.js"></script>
<script src="/js/plugins/carousels.js"></script>
@endsection

@section('content')
@include('website.main_slide')
@include('website.brand')
@include('website.product_slide')
@include('website.services')
    <div class="container">
    </div>
@endsection
