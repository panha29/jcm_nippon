@php
    $html_tag_data = [];
    $title = 'Product';
    $description = 'Product';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">

<style>

</style>
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section has-accordion-page pt-100 bg-gray-200">
        <div class="titlebar-inner">
            <div class="container titlebar-container">
                <div class="row titlebar-container justify-center">
                    <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                        <h1>Our Product</h1>
                        <p class="leading-20">We are here to answer any question you may have.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <div class="row">
        <div class="col-3 moblie-cate">
            <section class="lqd-section pt-40 sm:pt-0">
                <div class="category">
                    <div class="container">
                        <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                            <h3>Categories</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card">
                            <div class="card-body" >
                                @foreach ($nav as $item)
                                <div>
                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5">
                                        <a href="/Products/{{$item->category_tag}}" style="color: #233D62 ">{{$item->category_name}}</a>

                                    </h3>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-9 mobile-width">
            <section class="lqd-section products pt-40 sm:pt-0" id="products">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-8 col-xl-6 relative">
                            <div class="w-full absolute top-15percent -right-80percent z-0 text-center" data-parallax="true" data-parallax-options='{ "ease" : "linear", "start" : "top bottom", "end" : "bottom-=100% top" }' data-parallax-from='{ "y" : "65%", "rotationZ":-50,"opacity":0.6}' data-parallax-to='{ "y" : "-10%", "rotationZ":0,"opacity":1}'>
                                <div class="elementor-widget-container">
                                    <img class="w-390" width="790" height="731" src="../webv2/images/demo/events-hub/shape-colored.jpg" alt="shape">
                                </div>
                            </div>
                            <div class="ld-fancy-heading relative mask-text -mb-30 module-number">
                                <p class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-chars h2 mb-0/5em font-bold" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "words, chars"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">All Products</span>
                                        <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                                    </mark>
                                </p>
                            </div>
                        </div>
                        <div class="w-full"></div>
                        @foreach ($allpd as $item)
                            <div class="col col-6 col-md-4">
                                <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                                    <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                                        <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                                            <figure class="rounded-inherit">
                                                <img class="rounded-8" src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="nippon paint cambodia" style="width:300px;background-image: url('webv2/images/demo/modern-agency/banner.jpg');">
                                            </figure>
                                        </div>
                                    </div>
                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->product_name}}</h3>
                                    <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->product_category}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
   </div>
</div>
@endsection
