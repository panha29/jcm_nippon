@php
    $html_tag_data = [];
    $title = 'Our Location';
    $description = 'Our Location';
    $breadcrumbs = ["/"=>"Home","/location"=>"Our Location"]
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
    <script src="/js/animated/tilt/tilt.jquery.min.js"></script>
    <script >
            ( function( $ ) {

        "use strict";

        $(".cuscard").tilt({
        maxTilt: 15,
        perspective: 1400,
        easing: "cubic-bezier(.03,.98,.52,.99)",
        speed: 1200,
        glare: true,
        maxGlare: 0.2,
        scale: 1.04
        });

        }( jQuery ) );
    </script>
@endsection

@section('content')
@include('website.css')
@include('website.dealer.css')
<style>

</style>
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
        <h1>Store Location</h1>
    </div>

    <br>
    <br>
        <div class="container" style="width:60%; text-align: center" >

            <div class="cuscard" data-tilt >
                <div class="bg">
                    <img src="/img/dealer.png" alt="Nippon Paint Cambodia" draggable="false" >
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
