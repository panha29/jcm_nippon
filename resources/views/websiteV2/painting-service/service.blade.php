@php
    $html_tag_data = [];
    $title = 'Services';
    $description = 'Services';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">

@endsection

@section('js_vendor')
@endsection

@section('js_page')

@endsection

@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section design pt-100 pb-40">
        <div class="absolute top-0">
            <div class="ld-particles-container relative w-full">
                <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-design-services" ></div>
            </div>
        </div>
        <div class="container pt-70">
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
                                    <img width="67" height="73" src="webv2/images/demo/start-hub-4/services/Shape.svg">
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
    <!-- End Design -->

    <!-- Start Services -->
    <section class="lqd-section services pt-50 pb-40">
        <div class="absolute mb-0 top-0 z-0 max-w-full module-shape">
            <figure id="lqd-draw-shape-851c9d9" class="lqd-draw-shape" data-lqd-draw-shape="true" data-draw-shape-options='{"drawSVG": "0% 0%", "stagger" : 0 , "start": "top bottom", "end": "center 20%", "scrub" : 1 , "ease": "linear"}'>
                <svg xmlns="http://www.w3.org/2000/svg" width="255.64" height="182.773" viewBox="0 0 255.64 182.773">
                                        <path d="M629.327,2793.022s26.615,148.038,71.511,142.649c13.427-2.278,22.262-11.867,28.131-22.554,8-14.569,9.938-31.107,9.938-31.107s29.991,80.066,62.334,80.06,27.3-44.1,27.3-44.1,9.277,42.023,49.372,50.767" transform="translate(-625.844 -2789.539)" fill="none" stroke="#ff5125" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"></path>
                                    </svg>
            </figure>
        </div>
        <div class="container painting-pc-view">
            <div class="row">
                <div class="col col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-chars .lqd-chars .split-inner, .lqd-adv-txt-fig", "duration" : 1100 , "delay" : 20 , "ease": "expo.out", "initValues": {"y": "85px", "rotationZ" : 10} , "animations": {"y": "0px", "rotationZ" : 0}}'>
                    <div class="flex flex-wrap relative w-full justify-between items-start">
                        <div class="ld-fancy-heading relative mask-text">
                            <h2 class="ld-fh-element relative lqd-split-chars mb-0/75em" data-split-text="true" data-split-options='{"type": "chars, words"}'> Our Duty & Services</h2>
                        </div>
                        <div id="services-carousel-nav-container"></div>
                    </div>
                </div>
                <div class="col col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".carousel-items .carousel-item-inner", "duration" : 1100 , "delay" : 100 , "ease": "expo.out", "initValues": {"scaleX" : 0.5 , "scaleY" : 0.5 , "opacity" : 0} , "animations": {"scaleX" : 1 , "scaleY" : 1 , "opacity" : 1}}'>
                    <div class="carousel-container relative carousel-nav-right carousel-nav-right carousel-nav-floated carousel-dots-mobile-outside carousel-dots-mobile-center">
                        <div class="carousel-items relative -mr-10 -ml-10">
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Pre-Painting Site Inspection With Our Professional</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s1.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Shifting and Protection of Furniture and Floor</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s3.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Certified and Highly-Trained Painting Professionals</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s4.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".carousel-items .carousel-item-inner", "duration" : 1100 , "delay" : 100 , "ease": "expo.out", "initValues": {"scaleX" : 0.5 , "scaleY" : 0.5 , "opacity" : 0} , "animations": {"scaleX" : 1 , "scaleY" : 1 , "opacity" : 1}}'>
                    <div class="carousel-container relative carousel-nav-right carousel-nav-right carousel-nav-floated carousel-dots-mobile-outside carousel-dots-mobile-center">
                        <div class="carousel-items relative -mr-10 -ml-10">
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Prepare Premium Nippon Paint Products</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s2.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="divider w-full">
                                                <span class="w-full my-25 border-top border-black-20"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Reinstating of furniture after painting</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s5.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="divider w-full">
                                                <span class="w-full my-25 border-top border-black-20"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 pb-25 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center">Aavailable Thousand Colors to Choose</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="w-230 lqd-imggrp-single block relative">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative rounded-full">
                                                        <img class="rounded-full" draggable="false" width="458" height="602" src="webv2/images/demo/service/colorpallet.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="divider w-full">
                                                <span class="w-full my-25 border-top border-black-20"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container painting-mobile-view">
            <div class="row">
                <div class="col col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-chars .lqd-chars .split-inner, .lqd-adv-txt-fig", "duration" : 1100 , "delay" : 20 , "ease": "expo.out", "initValues": {"y": "85px", "rotationZ" : 10} , "animations": {"y": "0px", "rotationZ" : 0}}'>
                    <div class="flex flex-wrap relative w-full justify-between items-start">
                        <div class="ld-fancy-heading relative mask-text">
                            <h2 class="ld-fh-element relative lqd-split-chars mb-0/75em" data-split-text="true" data-split-options='{"type": "chars, words"}'> Our Duty & Services</h2>
                        </div>
                        <div id="services-carousel-nav-container"></div>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="carousel-container relative carousel-nav-right carousel-nav-right carousel-nav-floated carousel-dots-mobile-outside carousel-dots-mobile-center">
                        <div class="">
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Pre-Painting Site Inspection With Our Professional</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s1.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Shifting and Protection of Furniture and Floor</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative ">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s3.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Certified and Highly-Trained Painting Professionals</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative ">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s4.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12" data-custom-animations="true" data-ca-options='{"animationTarget": ".carousel-items .carousel-item-inner", "duration" : 1100 , "delay" : 100 , "ease": "expo.out", "initValues": {"scaleX" : 0.5 , "scaleY" : 0.5 , "opacity" : 0} , "animations": {"scaleX" : 1 , "scaleY" : 1 , "opacity" : 1}}'>
                    <div class="carousel-container relative carousel-nav-right carousel-nav-right carousel-nav-floated carousel-dots-mobile-outside carousel-dots-mobile-center">
                        <div class="">
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Prepare Premium Nippon Paint Products</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative ">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s2.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Reinstating of furniture after painting</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative ">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/page-s5.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-md-6 col-12 carousel-item flex flex-col justify-center has-one-child px-10">
                                <div class="carousel-item-inner relative w-full">
                                    <div class="carousel-item-content relative w-full">
                                        <div class="pt-20 rounded-10 flex flex-col items-center bg-yellow-200">
                                            <div class="ld-fancy-heading relative">
                                                <h4 class="ld-fh-element relative text-20 mb-0/25em text-center p-15 text-center">Aavailable Thousand Colors to Choose</h4>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <p class="ld-fh-element relative text-15 mb-1em">Nippon Paint Services</p>
                                            </div>
                                            <div class="">
                                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                    <figure class="w-full relative ">
                                                        <img class="" draggable="false" width="458" height="602" src="webv2/images/demo/service/colorpallet.jpg" alt="House Painting">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

        <!-- Start Our Vision -->
        <section class="">
            <div class="container-fluid relative xl:p-0">
                <div class="absolute max-w-full -top-45 z-1 module-shape">
                    <figure id="lqd-draw-shape-our-vision" class="lqd-draw-shape" data-lqd-draw-shape="true" data-draw-shape-options='{"drawSVG": "0% 0%", "stagger" : 0 , "start": "top bottom", "end": "center center", "scrub" : 1 , "ease": "linear"}'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="189.901" height="106.01" viewBox="0 0 189.901 106.01">
                            <path d="M42.52,277.026c5.189-4.909,24.683-30.293,31.134-29.451s-1.473,34.921,7.573,34.5,38.848-41.513,46.7-37.025-7.082,62.9.421,63.952,34.5-63.6,44.6-57.641,7.433,92.492,15.988,93.4,29.451-73.278,35.342-87.934" transform="translate(-38.279 -241.761)" fill="none" stroke="#c78bdd" stroke-linecap="round" stroke-width="6"></path>
                        </svg>
                    </figure>
                </div>
            </div>
        </section>
        <!-- End Our Vision -->

        <!-- Start Clients -->
        <section class="lqd-section clients pt-100 pb-140" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner, .carousel-container", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "60px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-12 text-center">
                        <div class="ld-fancy-heading relative mask-text">
                            <p class="ld-fh-element relative lqd-split-lines h3 leading-1/5em text-24 mb-2em" data-split-text="true" data-split-options='{"type": "lines"}'> Trusted by global brands and private sector. <span class="text-slate-400">Join Millions of customers around the globe.</span></p>
                        </div>
                    </div>
                    <div class="col col-12">
                        <div class="carousel-container relative carousel-nav-shaped">
                            <div class="carousel-items relative" data-lqd-flickity='{"marquee": true, "marqueeTickerSpeed": "1", "pauseAutoPlayOnHover": false}'>
                                <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <img src="webv2/images/client/aeon.png" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <img src="webv2/images/client/tourism.png" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <img src="webv2/images/client/grandpp.png" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <img src="webv2/images/client/tax1.png" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <img src="webv2/images/client/ford.png" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients -->
    </div>
@endsection
