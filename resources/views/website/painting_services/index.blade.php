@php
    $html_tag_data = [];
    $title = 'Painting Services';
    $description = 'Painting Services';
    $breadcrumbs = ["/"=>"Home","/painting-services"=>"Painting Services"]
@endphp
@extends('web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/introjs.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>

@endsection

@section('js_vendor')
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/intro.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
    <script src="/js/pages/interface.icons.js"></script>

@endsection

@section('content')
@include('website.css')
<style>
    .page-img{
        width: 100%;
        height: 288px;
        border-radius: 5px;
    }
</style>
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
    </div>
    <div style="width: 60%; margin:auto;text-align: justify;" class="mb-5">
        <h1 style="text-align: center;" class="mb-5">Painting Services</h1>
        <span class="mb-5">At JCM Nippon Paint Cambodia Painting Services, we pride ourselves on our extensive experience in the painting industry. With over 20 years of experience, we have honed our skills and developed a deep understanding of what it takes to deliver top-notch painting services.
            Our team of highly skilled painters is dedicated to providing the highest quality workmanship and customer service. We specialize in both residential and commercial painting, offering a wide range of services from interior and exterior painting to wallpaper removal and power washing.
            Over the years, we have worked on a variety of projects, each with its unique challenges and requirements. This has allowed us to gain a wealth of knowledge and expertise in handling different types of painting jobs, no matter how big or small.
        </span>
        <h1 class="mt-5" style="text-align: center;">Our Services Comes With...</h1>
        <span class="mb-5" style="text-align: center;margin: auto; display: block;">At Nippon Paint Professional Painting Service, we paint your home like it's our own.</span>
    </div>

    <div style="width: 60%; margin:auto">
        <div class="row">
            <div class="col">
                <img src="img/service/page-s1.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Pre-Painting Site Inspection</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s2.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Premium Nippon Paint Products</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s3.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Shifting and Protection of Furniture and Floor</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s4.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Certified and Highly-Trained Painting Professionals</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/service/page-s5.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Reinstating of furniture after painting</h5>
            </div>
            <div class="col">
                <img src="img/service/service1.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Color Scheme Service</h5>
            </div>
            <div class="col">
                <img src="img/service/service2.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Thousand Colors to Choose</h5>
            </div>
            <div class="col">
                <img src="img/service/service3.jpg" class="page-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Computerized Color Mixing</h5>
            </div>
        </div>
    </div>

    <div style="background-color:#EFF2F3;">
        <br>
        <div class="footer-responsive">
            @include('website.footer')
        </div>
        <br>
    </div>
@endsection
