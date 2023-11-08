@php
    $html_tag_data = [];
    $title = 'News and Media';
    $description = 'News and Media';
    $breadcrumbs = ["/"=>"Home","/location"=>"News and Media"]
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
    <script src="/js/vendor/jquery.barrating.min.js"></script>
    <script src="/js/vendor/movecontent.js"></script>

@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
    <script src="/js/pages/interface.icons.js"></script>
    <script src="/js/pages/storefront.home.js"></script>

@endsection

@section('content')
@include('website.css')
@include('website.dealer.css')

<div class="container" style="width: 60%">
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                    <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Home</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                </div>
            </div>
            <!-- Title End -->


        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="row">
        <!-- Left Side Start -->
        <div class="col-12 col-xl-3 d-none d-xl-block mb-5">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-between" id="menuColumn">
                    @foreach ($nav as $item)
                    <a class="nav-link body-link px-0 py-2" href="{{$item->category_tag}}">
                        <span class="align-middle">{{$item->category_name}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-chevron-right align-middle float-end mb-1"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Left Side End -->

        <!-- Right Side Cta Banners Start -->
        <div class="col-12 col-xl-9 mb-5">
            <div class="row g-2 mb-2">
                <div class="col-12 col-sm-6 col-md-8">
                    <div class="card sh-30 sh-sm-45 hover-img-scale-up">
                        <img src="/img/product/product_index6.jpg" class="card-img h-100 scale" alt="card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                            <div>
                                <div class="cta-1 mb-3 text-black w-md-100 w-75"></div>
                                <div class="w-50 text-black d-none d-md-block">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card sh-30 sh-sm-45 hover-img-scale-up">
                        <img src="/img/product/product_index2.jpg" class="card-img h-100 scale" alt="card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">


                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-12 col-sm-6">
                    <div class="card sh-22 sh-xl-19 hover-img-scale-up">
                        <img src="/img/product/product_index1.png" class="card-img h-100 scale" alt="card image" />
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card sh-22 sh-xl-19 hover-img-scale-up">
                        <img src="/img/product/product_index4.jpg" class="card-img h-100 scale" alt="card image" />
                        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Side Cta Banners End -->
    </div>


</div>
<!-- Category Modal End -->
<div style="background-color:#EFF2F3;">
    <br>
    <div class="footer-responsive">
        @include('website.footer')
    </div>
    <br>
</div>

@endsection
