@php
    $html_tag_data = [];
    $title = 'Color Palette';
    $description = 'Color Palette';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">


<style>
@media screen and (max-width: 430px){
    .pt-100{
        padding-top: 0 !important;
    }
}

</style>
@endsection

@section('js_vendor')
@endsection

@section('js_page')


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
@endsection

@section('content')
@include('user_dashboard.websiteV2.color_palette.color_palette_js')
@include('user_dashboard.websiteV2.css')

<div id="lqd-contents-wrap">
    <section class="lqd-section design pt-100 pb-40 top-90">
        <div class="absolute top-0">
            <div class="ld-particles-container relative w-full">
                <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-design-services" ></div>
            </div>
        </div>
        <div class="container">
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
                        <div class="m-0 py-50 pr-65 pl-45 rounded-20 text-start lqd-iconbox-scale transition-all">
                            <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-35 text-36 mb-40 text-36 mb-40  iconbox-icon-container inline-flex text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.578" height="34.578" viewBox="0 0 34.578 34.578">
                                            <path d="M1922.288,3873.563a17.289,17.289,0,1,1,17.289-17.289A17.239,17.239,0,0,1,1922.288,3873.563Zm8.415-26.406c-.07,0-.141.071-.211.071l-12.623,4.208a.632.632,0,0,0-.42.421l-4.208,12.622a.258.258,0,0,0-.07.211.662.662,0,0,0,.7.7c.071,0,.14-.07.211-.07l12.623-4.208a.634.634,0,0,0,.421-.421l4.207-12.623a.255.255,0,0,0,.07-.21A.663.663,0,0,0,1930.7,3847.157Zm-8.1,11.317a2.515,2.515,0,1,1,2.515-2.515A2.515,2.515,0,0,1,1922.6,3858.474Z" transform="translate(-1904.999 -3838.985)"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-22 mb-0/75em lqd-iconbox-heading">Site Inspection </h3>
                                <div class="contents">
                                    <p class="text-13 leading-1/25em">Our services starts and ends with a best-in-experience professional site inspection. We will try our best to analyze your need and want. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="m-0 py-50 pr-65 pl-45 rounded-20 text-start lqd-iconbox-scale transition-all">
                            <div class=" iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-35 text-36 mb-40 iconbox-icon-container inline-flex text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.171" height="37.172" viewBox="0 0 37.171 37.172">
                                            <path d="M2602.153,3857.568a3.684,3.684,0,0,0-2.223-3.291,3.953,3.953,0,0,1-2.462-5.953,3.552,3.552,0,0,0-4.658-4.658,3.947,3.947,0,0,1-5.948-2.461,3.553,3.553,0,0,0-6.589,0,3.947,3.947,0,0,1-5.948,2.461,3.551,3.551,0,0,0-4.658,4.658,3.957,3.957,0,0,1-2.461,5.953,3.549,3.549,0,0,0,0,6.584,3.951,3.951,0,0,1,2.461,5.948,3.551,3.551,0,0,0,4.658,4.659,3.95,3.95,0,0,1,5.948,2.465,3.554,3.554,0,0,0,6.589,0,3.947,3.947,0,0,1,5.948-2.465,3.552,3.552,0,0,0,4.658-4.659,3.948,3.948,0,0,1,2.462-5.948A3.692,3.692,0,0,0,2602.153,3857.568Zm-18.586,6.82a6.816,6.816,0,1,1,6.812-6.812A6.813,6.813,0,0,1,2583.568,3864.388Z" transform="translate(-2564.982 -3838.982)"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-22 mb-0/75em lqd-iconbox-heading">Color Scheme </h3>
                                <div class="contents">
                                    <p class="text-13 leading-1/25em">Planning and Choosing the right color is important, our service will provide you color scheme of your building or house with variety of any colors.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full animation-element">
                        <div class="py-50 pr-65 pl-45 rounded-20 m-0 text-start lqd-iconbox-scale transition-all">
                            <div class=" iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".lqd-iconbox-scale" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="w-35 text-36 mb-40  iconbox-icon-container inline-flex text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.435" height="32.77" viewBox="0 0 27.435 32.77">
                                            <path d="M2264.9,3864.935a1.872,1.872,0,0,1-1.383.969H2239.9a1.869,1.869,0,0,1-1.385-.969c-1.349-2.566.236-3.989,1.087-4.754a3.907,3.907,0,0,0,.838-.915c.015-.023.023-.041.033-.057.608-1,.83-3.413.961-4.856.02-.214.038-.418.057-.611,0-.016,0-.034.006-.052a17.656,17.656,0,0,1,2.864-7.749,9.087,9.087,0,0,1,4.739-3.535,2.616,2.616,0,0,1,5.215,0,9.1,9.1,0,0,1,4.74,3.536,17.631,17.631,0,0,1,2.862,7.741c0,.026.005.044.007.062.019.191.039.4.058.609.133,1.444.353,3.859.958,4.851.015.025.028.047.038.067a3.967,3.967,0,0,0,.838.911C2264.668,3860.946,2266.251,3862.37,2264.9,3864.935Zm-16,3.641h5.515a.691.691,0,0,1,.562.263.927.927,0,0,1,.13.764c0,.013-.005.025-.007.036a3.405,3.405,0,0,1-6.775.124l0-.023a1.173,1.173,0,0,1,.116-.935A.588.588,0,0,1,2248.9,3868.575Z" transform="translate(-2237.991 -3839.995)"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-22 mb-0/75em lqd-iconbox-heading">Efficiency</h3>
                                <div class="contents">
                                    <p class="text-13 leading-1/25em">Working fast is what we are all wanting to, but working with respisibility and perfection is what we actually needed. </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

		<!-- Satrt Events -->
        <section class="lqd-section events pt-40 pb-70" id="events">
            <div class="container">
                <div class="row">
                    <div class="col col-12 mb-30">
                        <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                            <nav class="lqd-tabs-nav-wrap mb-2rem">
                                <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-13 uppercase font-ultrabold link-primary md:justify-between" role="tablist">

                                    <li data-controls="lqd-tab-events-item-1" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Green" class="active" aria-expanded="false" aria-controls="lqd-tab-events-item-green" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Green</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-2" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Red" aria-expanded="false" aria-controls="lqd-tab-events-item-Red" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Red</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Yellow" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Yellow</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-4" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Orange" aria-expanded="false" aria-controls="lqd-tab-events-item-4" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Orange</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-Blue" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Blue" aria-expanded="false" aria-controls="lqd-tab-events-item-Blue" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Blue</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Purple" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Purple</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Grey" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Grey</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Neutral" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Neutral</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Green-Blue" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Green Blue</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                        <a draggable="false" href="#lqd-tab-events-item-Off-White" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Off White</span>
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
                                        <input type="text"  onkeyup="filter_name()" size="40" id="myInput" autocomplete="off" class="icon-rtl lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false">
                                    </span>
                                </div>
                            </div>
                            <div class="lqd-tabs-content mb-2rem pt-15">
                              @include('user_dashboard.websiteV2.color_palette.color')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Events -->

</div>
@endsection

