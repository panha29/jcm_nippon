@php
    $html_tag_data = [];
    $title = 'Professional Painting';
    $description = 'Professional Painting';
    $breadcrumbs = ["/"=>"Home","/professional-painting"=>"Professional Painting"]
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
@include('website.contact_us.css')

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
    <br>
    <br>
        {{-- <div class="card" style="width: 60%; margin:auto;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h3>Let's get in touch</h3>
                        <span>
                            We're open for any suggestion or just to have a chat
                        </span>
                        <i data-acorn-icon="building" class="search-input-icon text-muted"></i>

                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container" style="width:60%">

            <div class="container">
                <div class="container-divider">
                    <div class="row">
                        <div class="col-4">
                            {{-- <div class="divider"></div> --}}
                        </div>

                        <div class="col-4">
                            {{-- <div class="divider"></div> --}}
                        </div>
                    </div>
                </div>
                <div class="row mobile-inline">
                    <div class="col">
                        <div class="card">
                            <img src="img/professional/professional1.jpg" alt="nippon services">
                            <div class="card-body prof-span span-text">
                                <span class="">Certified and Highly-Trained Painting</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/professional/professional2.jpg" alt="nippon services">
                            <div class="card-body prof-span span-text">
                                <span class="">Premium Nippon Paint Products Made In Japan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/professional/professional3.jpg" alt="nippon services">
                            <div class="card-body prof-span span-text">
                                <span class="">Shifting and Protection of Furniture & Floor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <br>
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
