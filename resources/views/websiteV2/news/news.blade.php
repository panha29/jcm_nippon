@extends('webv2-layout')
@section('css')
    <link rel="stylesheet" href="./css/hub5/css/demo/start-hub-5/start-hub-5-services.css">
@endsection

@section('js_vendor')
    <script src="./css/hub5/vendors/particles.min.js"></script>
@endsection

@section('js_page')
@endsection
<style>
    .text-white{
        color: black !important;
    }
</style>
@section('content')
<div id="lqd-contents-wrap">
    <div class="container">
        <section class="lqd-section webinar  pb-45" id="nipponcambodia">
            <div class="titlebar-inner">
                <div class="container titlebar-container mt-100">
                    <div class="row titlebar-container justify-center">
                        <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                            <h2>Our News & Media</h2>
                            {{-- <p class="leading-20 text-gray-400">Our Project Reference</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row items-stretch">
                    <div class="col col-12 col-md-6 relative flex flex-col flex-wrap justify-center">
                        <div class="max-w-full w-auto absolute top-0 left-0 z-0 text-start">
                            <img width="75" height="75" src="webv2/images/demo/events-hub/shape-dots.svg" alt="dots">
                        </div>
                        <div class="max-w-full w-auto absolute -top-15percent -right-10percent">
                            <img width="309" height="321" src="webv2/images/demo/events-hub/shape-two-circle.svg" alt="circles">
                        </div>
                        <div class="lqd-imggrp-single relative z-1" data-hover3d="true">
                            <div class="lqd-imggrp-img-container flex" data-stacking-factor="1">
                                <figure class="rounded-inherit">
                                    <img class="rounded-16" width="998" height="662" src="webv2/images/news.jpg" alt="nipponcambodia">
                                </figure>
                            </div>
                        </div>
                        <div class="ld-fancy-heading max-w-full w-auto relative flex items-start z-2">
                            <div class="py-10 px-25 -mt-65 ml-45 bg-secondary rounded-2">
                                <h6 class="ld-fh-element relative m-0"> Special Guest</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 relative flex flex-col">
                        <div class="flex flex-col items-start justify-center mr-15percent ml-10percent lg:m-0">
                            <div class="iconbox items-center mb-25 -ml-5">
                                <div class="iconbox-icon-wrap mr-5">
                                    <span class="iconbox-icon-container text-accent">
                                        <i class="lqd-icn-ess icon-lqd-circle"></i>
                                    </span>
                                </div>
                                <h3 class="lq-icon-box-el text-11 uppercase tracking-1/5">News</h3>
                            </div>
                            <h2 class="ld-fh-element relative mb-0/5em"> Why Attend This Luckydraw?</h2>
                            <p class="ld-fh-element relative mb-2em"> In this luckydraw, our company will provide you alot of pride. The more you support our business the higher chance and more chances you will be the winner of this luckydraw. Every luckydraw will start every 3 months.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lqd-section speakers pt-40 sm:pt-0" id="speakers">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-8 col-xl-6 relative">
                        <div class="w-full absolute top-15percent -right-80percent z-0 text-center" data-parallax="true" data-parallax-options='{ "ease" : "linear", "start" : "top bottom", "end" : "bottom-=100% top" }' data-parallax-from='{ "y" : "65%", "rotationZ":-50,"opacity":0.6}' data-parallax-to='{ "y" : "-10%", "rotationZ":0,"opacity":1}'>
                            <div class="elementor-widget-container">
                                <img class="w-390" width="790" height="731" src="webv2/images/demo/events-hub/shape-colored.jpg" alt="shape">
                            </div>
                        </div>
                        <h2 class="ld-fh-element relative mb-0/5em"> Latest News & Media</h2>
                        <p class="ld-fh-element relative mb-1/5em text-18 leading-1/5em"> Keep connecting with us, we will always updating news for you.</p>
                    </div>
                    <div class="w-full"></div>
                    <!-- /.col col-12 col-md-6 -->
                    @foreach ($news as $item)
                    <div class="col col-12 col-md-4">
                        <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                            <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                                <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">

                                    <figure class="rounded-inherit">
                                        <img class="rounded-8" width="674" height="662" src="{{url('img/company_news/'.$item->news_image)}}" alt="nippon paint cambodia">
                                    </figure>

                                </div>
                            </div>
                            <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->news_date}}</p>
                            <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->news_title}}</h3>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($media as $item)
                    <div class="col col-12 col-md-4">
                        <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                            <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                                <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                                    <figure class="rounded-inherit">
                                        <video width="350" height="345" controls  >
                                            <source src="{{url('img/company_media/'.$item->media_image)}}" type="video/mp4">
                                        </video>
                                    </figure>
                                </div>
                            </div>
                            <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->media_date}}</p>
                            <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->media_title}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
