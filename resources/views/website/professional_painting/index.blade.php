@php
    $html_tag_data = [];
    $title = 'Professional Painting';
    $description = 'Professional Painting';
    $breadcrumbs = ["/"=>"Home","/professional-painting"=>"Professional Painting"]
@endphp
@extends('web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>

@endsection

@section('js_vendor')

@endsection

@section('js_page')
@endsection

@section('content')
@include('website.responsive_css')


    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 " id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h1>Professional Painting</h1>
    </div>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body prof-span span-text">
            <img src="img/professional/professional1.jpg" alt="nippon services" class="professional-painting-img mb-3">
                <span class="">Certified and Highly-Trained Painting</span>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body prof-span span-text">
            <img src="img/professional/professional2.jpg" alt="nippon services" class="professional-painting-img mb-3">
                <span class="">Premium Nippon Paint Products Made In Japan</span>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body prof-span span-text">
            <img src="img/professional/professional3.jpg" alt="nippon services" class="professional-painting-img mb-3">
                <span class="">Shifting and Protection of Furniture & Floor</span>
            </div>
        </div>
    </div>

<br>
<br>
<div style="background-color:#EFF2F3;">
    <br>
    <div class="footer-responsive">
        @include('website.footer')
    </div>
    <br>
</div>
@endsection
