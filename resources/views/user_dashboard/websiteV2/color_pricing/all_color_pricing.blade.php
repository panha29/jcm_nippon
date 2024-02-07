@php
    $html_tag_data = [];
    $title = 'Color Pricing';
    $description = 'Color Pricing';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">
<link rel="stylesheet" href="/css/jquery.customize.dataTables.min.css">
{{-- @include('user_dashboard.websiteV2.color_pricing.css') --}}
@include('user_dashboard.websiteV2.color_pricing.modal_css')
<style>
@media screen and (max-width: 430px){
    .pt-100{
        padding-top: 0 !important;
    }
}
.dataTables_filter{
    display: none;
}
.dataTables_length{
    display: none;

}
</style>
@endsection
@section('js_vendor')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('user_dashboard.websiteV2.color_pricing.js')


@endsection

@section('js_page')

@endsection
@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section design pt-100 pb-40 top-90">
        <div class="absolute top-0">
            <div class="ld-particles-container relative w-full">
                <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-design-services" ></div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="w-450 flex flex-col relative items-center max-w-full text-center mx-auto px-15">
                    <div class="ld-fancy-heading relative w-auto py-5 px-15 bg-gray rounded-100 animation-element">
                        <h6 class="ld-fh-element relative text-12 uppercase tracking-1 text-slate-500 m-0">Our services</h6>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <h2 class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-bottom lqd-highlight-reset-onhover lqd-split-lines mb-0/5em mt-0/25em">
                            Consulting
                            <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">with</span>
                                    <span class="bottom-0 left-0 lqd-highlight-inner bg-purple-200"></span>
                                </mark> our professional.
                        </h2>
                    </div>
                    <div class="absolute -top-5percent -left-10percent module-shape">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="67" height="73" src="../webv2/images/demo/start-hub-4/services/Shape.svg" alt="shape">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <p class="ld-fh-element relative lqd-split-lines text-17 leading-1/3em" data-split-text="true" data-split-options='{"type": "lines"}'> With our professional, we will help you to choose color and provide you more idea based on your dream house, construct, or industry .</p>
                    </div>
                </div>
                <div class="col col-12 flex gap-35 sm:flex-wrap module-iconbox sm:gap-0">
                    <div class="max-w-full animation-element">
                        <div class="m-0 pt-20 pr-20 pl-20 rounded-20 text-start lqd-iconbox-scale transition-all" style="background-color: #9be8ff;">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover " data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-140 text-36 mb-20 iconbox-icon-container inline-flex text-black">
                                        <img src="/webv2/images/product/matex.png" alt="nippon paint">
                                    </div>
                                </div>
                                <h3 class="text-18 mb-0/75em lqd-iconbox-heading text-center" style="display:block">Matex</h3>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="m-0 pt-20 pr-20 pl-20 rounded-20 text-start lqd-iconbox-scale transition-all" style="background-color: #9be8ff;">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover " data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-140 text-36 mb-20 iconbox-icon-container inline-flex text-black">
                                        <img src="/webv2/images/product/matexpremium.png" alt="nippon paint">
                                    </div>
                                </div>
                                <h3 class="text-18 mb-0/75em lqd-iconbox-heading text-center" style="display:block">Matex Premium</h3>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="m-0 pt-20 pr-20 pl-20 rounded-20 text-start lqd-iconbox-scale transition-all" style="background-color: #9be8ff;">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover " data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-140 text-36 mb-20 iconbox-icon-container inline-flex text-black">
                                        <img src="/webv2/images/product/weatherbond.png" alt="nippon paint">
                                    </div>
                                </div>
                                <h3 class="text-18 mb-0/75em lqd-iconbox-heading text-center" style="display:block">WeatherBond</h3>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="m-0 pt-20 pr-20 pl-20 rounded-20 text-start lqd-iconbox-scale transition-all" style="background-color: #9be8ff;">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover " data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-140 text-36 mb-20 iconbox-icon-container inline-flex text-black">
                                        <img src="/webv2/images/product/weathergard.png" alt="nippon paint">
                                    </div>
                                </div>
                                <h3 class="text-18 mb-0/75em lqd-iconbox-heading text-center" style="display:block">WeatherGard</h3>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="m-0 pt-20 pr-20 pl-20 rounded-20 text-start lqd-iconbox-scale transition-all" style="background-color: #9be8ff;">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover " data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-140 text-36 mb-20 iconbox-icon-container inline-flex text-black">
                                        <img src="/webv2/images/product/supereasywash.png" alt="nippon paint">
                                    </div>
                                </div>
                                <h3 class="text-18 mb-0/75em lqd-iconbox-heading text-center" style="display:block">Odour Less</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
     <!-- Satrt Events -->
     <section class="lqd-section events pb-70" id="events">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-30">
                    <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                        <nav class="lqd-tabs-nav-wrap mb-2rem">
                            <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-13 uppercase font-ultrabold link-primary md:justify-between" role="tablist">
                                <li data-controls="lqd-tab-events-item-1" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-show-all" class="active" aria-expanded="false" aria-controls="lqd-tab-events-item-show-all" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Show All</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-2" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-ma" class="" aria-expanded="false" aria-controls="lqd-tab-events-item-ma" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Matex</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-mpm" aria-expanded="false" aria-controls="lqd-tab-events-item-mpm" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Matex Premium</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-4" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-wb" aria-expanded="false" aria-controls="lqd-tab-events-item-wb" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">WeatherBond</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-5" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-wg" aria-expanded="false" aria-controls="lqd-tab-events-item-wg" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">WeatherGard</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-6" role="presentation" class="text-center">
                                    <a href="#lqd-tab-events-item-nsew" aria-expanded="false" aria-controls="lqd-tab-events-item-nsew" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Super Easy Wash</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="lqd-contact-form ">
                            <div class="mobile-view-search" style="float: right">
                                <span class="lqd-form-control-wrap text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                    <input type="text"  size="40" id="myInput" autocomplete="off" class="icon-rtl lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false">
                                </span>
                            </div>
                        </div>
                        <div class="lqd-tabs-content mb-2rem pt-15">
                            @include('user_dashboard.websiteV2.color_pricing.color_pricing')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events -->
</div>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> --}}


@endsection
