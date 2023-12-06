@php
    $html_tag_data = [];
    $title = 'Project Reference';
    $description = 'Project Reference';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/modern-agancy/modern-agency.css">
{{-- <link rel="stylesheet" href="/webv2/css/demo/modern-agancy/base.css"> --}}
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&family=IBM+Plex+Sans:wght@700&display=swap" rel="stylesheet">

{{-- <link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css"> --}}
@endsection

@section('js_vendor')
@endsection

@section('js_page')

@endsection
@section('content')

<div id="lqd-contents-wrap" class="">
    <!-- Start Banner Image -->
    <section class="lqd-section banner-image z-1" id="banner">
        <div class="flex relative">
            <div class="module-img absolute ltr-right-0 -top-40 w-710">
                <div class="lqd-imggrp-single block relative">
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        {{-- <h1>Project Reference</h1> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Image -->
      <!-- Start Banner -->
      <section class="lqd-section banner">
        <div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
            <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'></div>
        </div>
        <div class="container">
            <div class="row h-vh-100 items-center sm:h-auto">
                <div class="w-50percent lg:w-70percent sm:w-full p-0">
                    <div class="w-full flex flex-col items-start bg-no-repeat pt-10 px-15 pb-50 module-bg" style="background-image: url('webv2/images/demo/modern-agency/shape-lines-circle.svg');">
                    <h1 class="" style="font-size:50px">Project Reference</h1>

                        <div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                            <h6 class="ld-fh-element relative lqd-split-lines lowercase m-0 py-10 px-20" data-split-text="true" data-split-options='{"type":"lines"}'> decade Experience</h6>
                        </div>
                        <div class="ld-fancy-heading relative" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 250, "delay" : 180, "ease": "power4.out", "initValues": {"y": "30px", "z": "-130px", "rotationX" : -75, "opacity" : 0} , "animations": {"y": "0px", "z": "0px", "rotationX" : 0, "opacity" : 1}}'>
                            <h1 class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines -tracking-1" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                data-split-text="true" data-split-options='{"type": "lines"}'>
                                <span>industry, building,</span>
                                <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">house</span>
                                        <span class="lqd-highlight-inner"></span>
                                    </mark> and construction solutions
                            </h1>
                        </div>
                        <div class="w-full">
                            <div class="ld-fancy-heading relative mask-text module-text" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 850, "delay" : 180, "ease": "power4.out", "initValues": {"y": "65px"} , "animations": {"y": "0px"}}'>
                                <p class="ld-fh-element mb-0/5em inline-block relative text-20 leading-1/5em lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> We merge imagination and technology to help thousands of construction grow in an age of Nippon Paint's product.</p>
                            </div>
                        </div>
                        <div class="spacer w-full">
                            <div class="w-full h-10"></div>
                        </div>
                        <div class="pt-35 flex items-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".banner .module-btn", "duration" : 1800, "startDelay" : 1200, "delay" : 180, "ease": "power4.out", "initValues": {"z": "-70px", "rotationX" : -90, "opacity" : 0} , "animations": {"z": "0px", "rotationX" : 0, "opacity" : 1}}'>
                            <div class="w-full flex items-center module-btn sm:flex-wrap">
                                <a href="#about" class="btn font-bold text-14 uppercase tracking-1/5 whitespace-nowrap btn-solid btn-xl btn-icon-right btn-hover-reveal mr-40 rounded-100 text-white bg-primary hover:bg-accent" data-localscroll="true">
                                    <span class="btn-txt" data-text="See how we work">See how we work</span>
                                    <span class="btn-icon">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                    </span>
                                </a>
                                <div class="ld-fancy-heading relative">
                                    <p class="text-14 m-0 p-0 ld-fh-element relative">
                                        <span class="text-black">Hotline: <span class="text-primary">+855 11 822 266 / 11 907 902</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-30percent p-0 sm:w-full"></div>

            </div>
        </div>
    </section>
    <!-- End Banner -->
     <!-- Start Clients -->
     <section class="lqd-section clients pb-40" id="clients">
        <div class="container">
            <div class="row items-center text-center">
                <div class="col col-12 p-0">
                    <div class="ld-fancy-heading relative">
                        <p class="ld-fh-element relative text-11 font-bold uppercase mb-3/5em tracking-0/1 text-blue-900">Join the 10.000+ client trusting us</p>
                    </div>
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/aeon.png" alt="clients">
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/ford.png" alt="clients">
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/grandpp.png" alt="clients">
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/tax1.png" alt="clients">
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/tourism.png" alt="clients" width="70">
                </div>
                <div class="col col-6 col-md-4 col-xl-2 p-0 mb-30">
                    <img src="webv2/images/client/tex.png" alt="clients" width="70">
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients -->
    <!-- Start About -->
    <section class="lqd-section about pt-40 pb-100" id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col col-md-10 offset-md-1 mb-60 p-0 module-first">
                    <div class="w-full flex flex-col items-center">
                        <div class="ld-fancy-heading relative">
                            <h6 class="mb-1em ld-fh-element relative">We're Color professional</h6>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <h2 class="ld-fh-element mb-0/5em inline-block relative">We design and build beautiful with premium products that make a difference</h2>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-4">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default mb-30">
                        <div class="iconbox-icon-wrap">
                            <div class="iconbox-icon-container inline-flex mb-55 text-86">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86.895" height="87" viewbox="0 0 86.895 87">
                                        <defs>
                                            <lineargradient id="fill-1" x1="0.5" x2="0.5" y2="1" gradientunits="objectBoundingBox">
                                                <stop offset="0" stop-color="#fb9e44"></stop>
                                                <stop offset="1" stop-color="#f57452"></stop>
                                            </lineargradient>
                                        </defs>
                                        <g transform="translate(-1 -0.895)">
                                            <path d="M15.008,47.621v-2.8h4.2v-4.2a4.21,4.21,0,0,0-4.2-4.2H12.2a1.4,1.4,0,0,1-1.4-1.4v-1.4h4.2a1.4,1.4,0,0,1,1.4,1.4h2.8a4.21,4.21,0,0,0-4.2-4.2V28H12.2v2.8H8v4.2a4.21,4.21,0,0,0,4.2,4.2h2.8a1.4,1.4,0,0,1,1.4,1.4v1.4H12.2a1.4,1.4,0,0,1-1.4-1.4H8a4.21,4.21,0,0,0,4.2,4.2v2.8Z" transform="translate(2.811 10.841)" fill="url(#fill-1)"></path>
                                            <path d="M75.281,20.621a12.6,12.6,0,0,0-1.77.137,23.8,23.8,0,0,0-45.4-5.176,9.785,9.785,0,0,0-12.231,5.254,12.6,12.6,0,0,0-12.548,19.7A15.374,15.374,0,0,0,14.558,63.945L3.223,75.281l7.588,7.588L26.227,67.452l7.008,7.008,28.03-28.03,6.6,6.6,1.026-7.177h6.392a12.614,12.614,0,0,0,0-25.227ZM3.8,48.652A12.614,12.614,0,1,1,16.417,61.266,12.628,12.628,0,0,1,3.8,48.652Zm27.763-2.8h15.1L33.235,59.284,29.961,56.01a15.234,15.234,0,0,0,1.6-10.161Zm29.7-3.383L33.235,70.5l-7.008-7.008L10.811,78.905,7.186,75.281,18.567,63.9a15.4,15.4,0,0,0,9.8-5.523l4.87,4.87L57.641,38.841l-4.615-4.615,15-2.142-2.142,15Zm14.015.58H69.288L71.326,28.78,47.079,32.244l6.6,6.6-4.2,4.2H30.763a15.374,15.374,0,0,0-25.62-4.875,9.808,9.808,0,1,1,18.281-4.936h2.8a12.631,12.631,0,0,0-7.636-11.586,6.989,6.989,0,0,1,9.62-2.956l1.456.806.547-1.571a21,21,0,0,1,40.57,3.523,12.6,12.6,0,0,0-3.847,2.324l1.856,2.1a9.811,9.811,0,1,1,6.488,17.17Z" transform="translate(0 -0.105)" fill="url(#fill-1)"></path>
                                            <path d="M1,61H3.8v2.8H1Z" transform="translate(0 24.091)" fill="url(#fill-1)"></path>
                                            <path d="M61,61h2.8v2.8H61Z" transform="translate(24.091 24.091)" fill="url(#fill-1)"></path>
                                            <path d="M62.463,41H54.053V69.03h-2.8V52.212H42.841V69.03h-2.8V60.621H31.629V69.03h-2.8V57.818H20.417V69.03H5v2.8H80.682v-2.8H62.463Zm-5.606,2.8h2.8V69.03h-2.8ZM45.644,55.015h2.8V69.03h-2.8ZM34.432,63.424h2.8V69.03h-2.8Zm-11.212-2.8h2.8V69.03h-2.8Z" transform="translate(1.606 16.061)" fill="url(#fill-1)"></path>
                                            <path d="M40.923,5A18.251,18.251,0,0,0,23.74,17.147l2.642.935A15.445,15.445,0,0,1,40.923,7.8Z" transform="translate(9.131 1.606)" fill="url(#fill-1)"></path>
                                            <path d="M41.336,5.965A18.126,18.126,0,0,0,38.3,5.179l-.463,2.765a15.293,15.293,0,0,1,2.568.664Z" transform="translate(14.79 1.678)" fill="url(#fill-1)"></path>
                                            <path d="M58.2,24A4.21,4.21,0,0,1,54,28.2v2.8A7.016,7.016,0,0,0,61.008,24Z" transform="translate(21.281 9.235)" fill="url(#fill-1)"></path>
                                            <path d="M5,26.008H7.8a4.21,4.21,0,0,1,4.2-4.2V19A7.016,7.016,0,0,0,5,26.008Z" transform="translate(1.606 7.227)" fill="url(#fill-1)"></path>
                                            <path d="M35,17h2.8v2.8H35Z" transform="translate(13.652 6.424)" fill="url(#fill-1)"></path>
                                            <path d="M27,17h2.8v2.8H27Z" transform="translate(10.44 6.424)" fill="url(#fill-1)"></path>
                                            <path d="M23,17h2.8v2.8H23Z" transform="translate(8.834 6.424)" fill="url(#fill-1)"></path>
                                            <path d="M39,17h2.8v2.8H39Z" transform="translate(15.258 6.424)" fill="url(#fill-1)"></path>
                                            <path d="M31,17h2.8v2.8H31Z" transform="translate(12.046 6.424)" fill="url(#fill-1)"></path>
                                        </g>
                                    </svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading text-20 mb-20">Low Cost </h3>
                            <p>Our quality policy: strict and effective managment to have best product for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-4">
                    <div class="mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap">
                            <div class="iconbox-icon-container inline-flex mb-55 text-86">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="81.895" height="81.895" viewbox="0 0 81.895 81.895">
                                        <defs>
                                            <lineargradient id="fill-2" x1="0.5" x2="0.5" y2="1" gradientunits="objectBoundingBox">
                                                <stop offset="0" stop-color="#fb9e44"></stop>
                                                <stop offset="1" stop-color="#f57452"></stop>
                                            </lineargradient>
                                        </defs>
                                        <path d="M53.276,43.748,54.4,46.14q-1.339.626-2.708,1.18l-.988-2.45q1.3-.527,2.576-1.121ZM37.826,48.177l.317,2.623a53.68,53.68,0,0,0,10.834-2.475l-.852-2.5a50.88,50.88,0,0,1-10.3,2.353ZM82.9,12.888V57.8a6.612,6.612,0,0,1-6.6,6.6H64.4v5.284H57.456l-.3-.166c-1.09-.6-2.207-1.31-3.286-1.992a40.646,40.646,0,0,0-5.546-3.119A3.971,3.971,0,0,1,46.7,66.421a3.911,3.911,0,0,1,.531,1.944,3.954,3.954,0,0,1-1.851,3.341,3.9,3.9,0,0,1-1.321,5.284,3.919,3.919,0,0,1,.53,1.943A3.968,3.968,0,0,1,40.627,82.9H21.454a9.187,9.187,0,0,1-6.538-2.709l-1.254-1.254H11.567V82.9H1V53.836H11.567V57.8h2.2l.44-.33V7.6a6.612,6.612,0,0,1,6.6-6.6H33.154a6.563,6.563,0,0,1,4.671,1.935l3.348,3.348H76.291A6.612,6.612,0,0,1,82.9,12.888ZM16.851,7.6v3.963H80.01a3.957,3.957,0,0,0-3.72-2.642H40.08L35.957,4.8a3.942,3.942,0,0,0-2.8-1.161H20.813A3.968,3.968,0,0,0,16.851,7.6ZM8.925,56.477H3.642V80.253H8.925ZM41.948,78.932a1.321,1.321,0,0,0-1.321-1.321h-6.6V74.97h7.925a1.321,1.321,0,1,0,0-2.642H34.022V69.686h9.246a1.321,1.321,0,1,0,0-2.642H34.022V64.4H44.589a1.321,1.321,0,1,0,0-2.642H31.38a9.25,9.25,0,0,1-8.341-5.284h-.9A6.635,6.635,0,0,0,18.173,57.8L14.649,60.44H11.567V76.291h3.189l2.028,2.028a6.563,6.563,0,0,0,4.671,1.935H40.627A1.321,1.321,0,0,0,41.948,78.932ZM32.7,59.119V45.871c-.361.009-.717.04-1.078.04H31.38a6.6,6.6,0,0,0,0,13.209Zm22.581,6.175c.408.258.8.5,1.2.749V39.023a48.287,48.287,0,0,1-21.134,6.739V59.119h9.246a3.97,3.97,0,0,1,3.654,2.426,35.614,35.614,0,0,1,7.039,3.749Zm.594-29c.395-.247.8-.472,1.189-.732l.333-.221h1.721v-12.7L73.961,30.06,63.394,35.343H64.4v5.284A10.576,10.576,0,1,0,55.876,36.3ZM68.054,30.06l-6.293-3.146v6.293Zm-6.293,7.925H59.119v29.06h2.642ZM80.253,57.8V14.209h-63.4V55.52a9.274,9.274,0,0,1,5.284-1.684h.106A9.177,9.177,0,0,1,31.38,43.268h.243A45.693,45.693,0,0,0,53.6,37.641a13.2,13.2,0,1,1,10.8,5.627V61.761H76.291A3.968,3.968,0,0,0,80.253,57.8ZM27.418,6.284H24.776V8.925h2.642Zm-5.284,0H19.492V8.925h2.642Zm10.567,0H30.06V8.925H32.7ZM67.044,59.119H77.612V56.477H67.044Zm0-5.284H77.612V51.194H67.044Zm0-5.284H77.612V45.91H67.044Zm-47.552-31.7h29.06V32.7H19.492ZM22.134,30.06H45.91V19.492H22.134Zm-2.642,7.925h2.642V35.343H19.492Zm5.284,0H48.552V35.343H24.776Z" transform="translate(-1 -1)" fill="url(#fill-2)"></path>
                                    </svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading text-20 mb-20">Effeciency and Effective </h3>
                            <p>We have an experienced team of production and inspection personnel to ensure quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-4">
                    <div class="mb-30 iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap">
                            <div class="iconbox-icon-container inline-flex mb-55 text-86">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="89" height="89" viewbox="0 0 89 89">
                                        <defs>
                                            <lineargradient id="fill-3" x1="0.5" x2="0.5" y2="1" gradientunits="objectBoundingBox">
                                                <stop offset="0" stop-color="#fb9e44"></stop>
                                                <stop offset="1" stop-color="#f57452"></stop>
                                            </lineargradient>
                                        </defs>
                                        <g transform="translate(0 0.001)">
                                            <g transform="translate(35.536 20.729)">
                                                <path d="M200.884,112a8.884,8.884,0,1,0,8.884,8.884A8.884,8.884,0,0,0,200.884,112Zm0,14.807a5.923,5.923,0,1,1,5.923-5.923A5.923,5.923,0,0,1,200.884,126.808Z" transform="translate(-192 -112.001)" fill="url(#fill-3)"></path>
                                            </g>
                                            <g transform="translate(23.019 -0.001)">
                                                <g transform="translate(0 0)">
                                                    <path d="M161.644,42.421a18.905,18.905,0,0,0-1.544-1.385l.015-.043A36.245,36.245,0,0,0,146.631.275a1.481,1.481,0,0,0-1.721,0,36.245,36.245,0,0,0-13.484,40.718l.015.043a18.9,18.9,0,0,0-1.524,28.121,1.48,1.48,0,0,0,1.047.434,1.5,1.5,0,0,0,.468-.076,1.481,1.481,0,0,0,1-1.195l1.118-7.824a1.481,1.481,0,0,1,1.464-1.27h4.51L138.4,64.852a1.481,1.481,0,0,0,1.451,1.777h11.845a1.48,1.48,0,0,0,1.451-1.777l-1.125-5.627h4.51a1.481,1.481,0,0,1,1.464,1.272l1.118,7.822a1.481,1.481,0,0,0,1,1.195,1.5,1.5,0,0,0,.468.076,1.48,1.48,0,0,0,1.047-.434A18.9,18.9,0,0,0,161.644,42.421ZM145.77,3.321a33.408,33.408,0,0,1,8.754,10H137.017A33.409,33.409,0,0,1,145.77,3.321ZM135.012,56.265a4.463,4.463,0,0,0-4.4,3.814l-.641,4.491a15.912,15.912,0,0,1-2.59-10.123h0a15.966,15.966,0,0,1,5.034-10.379l3.918,12.2Zm6.642,7.4.888-4.442H149l.888,4.442Zm-2.208-7.4L134.572,41.1l-.326-1.014a33.293,33.293,0,0,1,1.281-23.8h20.486a33.292,33.292,0,0,1,1.281,23.8l-.326,1.014-4.874,15.165Zm22.12,8.305-.641-4.491a4.463,4.463,0,0,0-4.4-3.814h-1.324l3.921-12.2a15.993,15.993,0,0,1,2.44,20.5Z" transform="translate(-124.369 0.001)" fill="url(#fill-3)"></path>
                                                </g>
                                            </g>
                                            <g transform="translate(0 60.706)">
                                                <path d="M38.5,336.766v4.827a10.267,10.267,0,0,0-10.187,2.49,11.882,11.882,0,0,0-9.062-4.238,11.663,11.663,0,0,0-3.188.444A14.731,14.731,0,0,0,1.481,328H0v2.961H1.481a11.777,11.777,0,0,1,11.752,10.575,11.867,11.867,0,0,0-3.659,3.321A14.732,14.732,0,0,0,0,341.327v2.961a11.859,11.859,0,0,1,11.845,11.845h2.961A14.711,14.711,0,0,0,11.7,347.08a8.913,8.913,0,0,1,3.681-3.385.057.057,0,0,0,.046-.015,8.785,8.785,0,0,1,3.825-.874,8.9,8.9,0,0,1,7.218,3.749,11.06,11.06,0,0,0-1.3,5.135h2.961a8.012,8.012,0,0,1,1.233-4.278h-.009c.021-.028.049-.049.07-.078a7.378,7.378,0,0,1,9.071-2.6v3.879h2.961V336.766Z" transform="translate(0 -328)" fill="url(#fill-3)"></path>
                                            </g>
                                            <g transform="translate(47.381 60.706)">
                                                <path d="M295.978,330.962h1.481V328h-1.481A14.731,14.731,0,0,0,281.4,340.29a11.663,11.663,0,0,0-3.188-.444,11.882,11.882,0,0,0-9.062,4.233,10.267,10.267,0,0,0-10.187-2.49v-4.827H256v11.845h2.961v-3.875a7.378,7.378,0,0,1,9.071,2.6c.021.03.049.05.07.078h-.009a8.011,8.011,0,0,1,1.233,4.279h2.961a11.059,11.059,0,0,0-1.3-5.135,8.9,8.9,0,0,1,7.218-3.749,8.787,8.787,0,0,1,3.825.877c.015.007.031.009.046.015a8.914,8.914,0,0,1,3.688,3.382,14.709,14.709,0,0,0-3.117,9.053h2.961a11.859,11.859,0,0,1,11.845-11.845v-2.961a14.735,14.735,0,0,0-9.574,3.531,11.867,11.867,0,0,0-3.659-3.321A11.777,11.777,0,0,1,295.978,330.962Z" transform="translate(-256 -328.001)" fill="url(#fill-3)"></path>
                                            </g>
                                            <g transform="translate(37.016 42.939)">
                                                <rect width="3" height="3" transform="translate(-0.016 0.061)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(42.939 42.939)">
                                                <rect width="3" height="3" transform="translate(0.061 0.061)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(48.862 42.939)">
                                                <rect width="3" height="3" transform="translate(0.138 0.061)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(16.287 78.475)">
                                                <rect width="3" height="3" transform="translate(-0.287 -0.475)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(0 54.784)">
                                                <rect width="3" height="3" transform="translate(0 0.215)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(82.917 68.11)">
                                                <rect width="3" height="3" transform="translate(0.083 -0.111)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(71.072 62.187)">
                                                <rect width="3" height="3" transform="translate(-0.072 -0.188)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(54.784 85.878)">
                                                <rect width="3" height="3" transform="translate(0.216 0.121)" fill="url(#fill-3)"></rect>
                                            </g>
                                            <g transform="translate(85.878 51.823)">
                                                <rect width="3" height="3" transform="translate(0.122 0.177)" fill="url(#fill-3)"></rect>
                                            </g>
                                        </g>
                                    </svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading text-20 mb-20">Fast and Quality </h3>
                            <p>In the shortest possbible time for us to solve customeer need and want.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->
      <!-- Start Digital Experience -->
      <section class="lqd-section digital-experience py-100">
        <div class="container">
            <div class="row items-center">
                <div class="w-55percent relative flex items-center justify-center lg:w-full sm:hidden">
                    <div class="absolute w-auto -bottom-20 module-img-1" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "50px"}' data-parallax-to='{"y": "0px"}'>
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    {{-- <img class="rounded-8" src="" alt="digital experience"> --}}
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="absolute w-260 -top-5percent module-img-2" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "110px"}' data-parallax-to='{"y": "-50px"}'>
                        <div class="lqd-imggrp-single block relative" data-shadow-style="4" data-inview="true" data-animate-shadow="true">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img class="rounded-8" src="webv2/images/pr/orkide.jpg" alt="digital experience">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="absolute w-400 -top-5percent module-img-3" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "150px"}' data-parallax-to='{"y": "-120px"}'>
                        <div class="lqd-imggrp-single block relative" data-shadow-style="4" data-inview="true" data-animate-shadow="true">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img class="rounded-8" src="webv2/images/pr/rrcondo.jpg" alt="digital experience">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-400 module-img-4" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "80px"}' data-parallax-to='{"y": "-70px"}'>
                        <div class="lqd-imggrp-single block relative mt-50percent" data-shadow-style="4" data-inview="true" data-animate-shadow="true">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img class="rounded-8" width="393" src="webv2/images/pr/im.jpg" alt="digital experience">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-45percent flex flex-col items-start lg:w-full lg:items-center lg:text-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
                        <h6 class="ld-fh-element relative lowercase m-0 py-10 px-20"> Digital Experience</h6>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover h2" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                            <span> Build with trust</span>
                            <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">for our client</span>
                                    <span class="lqd-highlight-inner"></span>
                                </mark>
                        </h2>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <p class="text-20 font-bold leading-1/5em mb-1/5em ld-fh-element relative">More than just a painter, we harness the tools of traditional and technology for our client.</p>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">With over 25 years of experience, we have crafted thousands of strategic discovery process that enables us to peel back the layers which enable us to understand, connect, represent and satisfy your need and want.</p>
                    </div>
                    <a href="#counter" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-solid btn-xl btn-hover-txt-switch btn-hover-txt-switch-x bg-primary text-white rounded-100 hover:bg-accent" data-localscroll=" true">
                        <span class="btn-txt" data-text="More about us" data-split-text="true" data-split-options='{"type":  "chars, words"}'>More about us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Blog -->
    <section class="lqd-section blog pt-100 pb-55">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-40">
                    <div class="w-full flex flex-col items-center text-center">
                        <div class="ld-fancy-heading relative w-full">
                            <h6 class="mb-1em ld-fh-element relative lowercase">We're Professional Painting</h6>
                        </div>
                        <div class="ld-fancy-heading relative w-full">
                            <h2 class="ld-fh-element mb-0/5em inline-block relative">Our Project Reference</h2>
                        </div>
                    </div>
                </div>
                <div class="col col-12 pjr-pc-view">
                    <div class="row -mr-15 -ml-15">
                        @foreach ($pjref as $item)
                        <div class="col col-sm-6 col-lg-4 mb-30 px-15 py-0">
                            <article class="lqd-lp relative lqd-lp-style-6 lqd-lp-hover-img-zoom lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post type-post status-publish format-standard has-post-thumbnail hentry category-blog-single tag-beauty tag-travel">
                                <div class="lqd-lp-img overflow-hidden">
                                    <figure>
                                        <img width="720" height="510" src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image1) }}" alt="nippon paint cambodia">
                                    </figure>
                                </div>
                                <header class="lqd-lp-header p-2rem" style="height: 139px">
                                    <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center uppercase tracking-0/1em font-bold">
                                        <div class="lqd-lp-author relative z-3">
                                            <div class="lqd-lp-author-info">
                                                <h3 class="mt-0 mb-0 h5">
                                                    <p>{{$item->project_reference_area}}</p>
                                                </h3>
                                            </div>
                                        </div>
                                        {{-- <time class="lqd-lp-date" datetime="2023-11-24T13:40:12+00:00">{{$item->project_reference_startDate}}</time> --}}
                                    </div>
                                    <h2 class="entry-title lqd-lp-title mt-0/75em mb-0 h5">{{$item->project_reference_name}}</h2>
                                </header>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col col-12 pjr-mobile-view">
                    <div class="row -mr-15 -ml-15">
                        @foreach ($pjref as $item)
                        <div class="col col-sm-12 mb-30 px-15 py-0">
                            <article class="lqd-lp relative lqd-lp-style-6 lqd-lp-hover-img-zoom lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post type-post status-publish format-standard has-post-thumbnail hentry category-blog-single tag-beauty tag-travel">
                                <div class="lqd-lp-img overflow-hidden">
                                    <figure>
                                        <img src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image1) }}" alt="nippon paint cambodia">
                                    </figure>
                                </div>
                                <header class="lqd-lp-header p-1rem" style="height: 90px; width:350px">
                                    <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center uppercase tracking-0/1em font-bold">
                                        <div class="lqd-lp-author relative z-3">
                                            <div class="lqd-lp-author-info">
                                                <h3 class="mb-0 h3">
                                                    <p>{{$item->project_reference_area}}</p>
                                                </h3>
                                            </div>
                                        </div>
                                        {{-- <time class="lqd-lp-date" datetime="2023-11-24T13:40:12+00:00">{{$item->project_reference_startDate}}</time> --}}
                                    </div>
                                    <h5 class="entry-title lqd-lp-title mb-0 h5">{{$item->project_reference_name}}</h5>
                                </header>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->
</div>






@endsection
