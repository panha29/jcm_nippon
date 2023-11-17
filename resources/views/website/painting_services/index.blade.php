@php
    $html_tag_data = [];
    $title = 'Painting Services';
    $description = 'Painting Services';
    $breadcrumbs = ["/"=>"Home","/painting-services"=>"Painting Services"]
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
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5 responsive-view">
        <h1 style="text-align: center;" class="mb-5">Painting Services</h1>
        <span class="mb-5">At JCM Nippon Paint Cambodia Painting Services, we pride ourselves on our extensive experience in the painting industry. With over 20 years of experience, we have honed our skills and developed a deep understanding of what it takes to deliver top-notch painting services.
            Our team of highly skilled painters is dedicated to providing the highest quality workmanship and customer service. We specialize in both residential and commercial painting, offering a wide range of services from interior and exterior painting to wallpaper removal and power washing.
            Over the years, we have worked on a variety of projects, each with its unique challenges and requirements. This has allowed us to gain a wealth of knowledge and expertise in handling different types of painting jobs, no matter how big or small.
        </span>
        <h1 class="mt-5" style="text-align: center;">Our Services Comes With...</h1>
        <span class="mb-5" style="text-align: center;margin: auto; display: block;">At Nippon Paint Professional Painting Service, we paint your home like it's our own.</span>
    </div>


    <div class="big-screen">
        <div class="row">
            <div class="col">
                <img src="img/service/page-s1.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Pre-Painting Site Inspection</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s2.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Premium Nippon Paint Products</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s3.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Shifting and Protection of Furniture and Floor</h5>
            </div>
            <div class="col">
                <img src="img/service/page-s4.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Certified and Highly-Trained Painting Professionals</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/service/page-s5.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Reinstating of furniture after painting</h5>
            </div>
            <div class="col">
                <img src="img/service/service1.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Color Scheme Service</h5>
            </div>
            <div class="col">
                <img src="img/service/service2.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Thousand Colors to Choose</h5>
            </div>
            <div class="col">
                <img src="img/service/service3.jpg" class="painting-service-img mb-3" alt="nippon paint cambodia" draggable="false">
                <h5>Computerized Color Mixing</h5>
            </div>
        </div>
    </div>

    <div class="small-screen">
        <div class="row mt-4">
            <div class="col">
                <img src="img/service/page-s1.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Pre-Painting Site Inspection</span>
            </div>
            <div class="col">
                <img src="img/service/page-s2.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Premium Nippon Paint Products</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <img src="img/service/page-s3.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Shifting and Protection of Furniture and Floor</span>
            </div>
            <div class="col">
                <img src="img/service/page-s4.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Certified and Highly-Trained Painting Professionals</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <img src="img/service/page-s5.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Reinstating of furniture after painting</span>
            </div>
            <div class="col">
                <img src="img/service/service1.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Color Scheme Service</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <img src="img/service/service2.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Thousand Colors to Choose</span>
            </div>
            <div class="col">
                <img src="img/service/service3.jpg" class="painting-service-img mb-2" alt="nippon paint cambodia" draggable="false">
                <span>Computerized Color Mixing</span>
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
