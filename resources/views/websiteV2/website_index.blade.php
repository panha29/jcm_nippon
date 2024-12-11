@extends('webv2-layout')
@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection
<style>
    @media only screen and (max-width:767px){
        .min-h-25vh{
            min-height: 35vh !important;
        }
        .mobile-display{
            background-image: url(./webv2/images/banner/m_web_bannerm.jpg);
        }

    }
    @media only screen and (min-width:767px){
        .min-h-200vh{
            min-height: 100vh !important;
        }
        .mobile-display{
            background-image: url(./webv2/images/banner/m_web_banner1.jpg);
        }
    }
    .h1,h1 {
        font-family: var(--lqd-body-font-family)!important;
    }
    .h2,h2 {
        font-family: var(--lqd-body-font-family)!important;
    }
    .h3,h3 {
        font-family: var(--lqd-body-font-family)!important;
    }
    .h4,h4 {
        font-family: var(--lqd-body-font-family)!important;
    }
    .h5,h5 {
        font-family: var(--lqd-body-font-family)!important;
    }
    .h6,h6 {
        font-family: var(--lqd-body-font-family)!important;
    }
</style>
@section('content')
<div id="lqd-contents-wrap ">

    <!-- Start Banner -->
    {{-- <section class="lqd-section banner min-h-100vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover" id="banner" style="background-image: url(./css/hub5/images/demo/start-hub-5/banner1-bg.svg);"> --}}
        {{-- <section class="lqd-section banner min-h-25vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover mobile-display" id="banner" style=""> --}}
    {{-- <section class="lqd-section banner min-h-25vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover mobile-display" id="banner"> --}}
        <section class="lqd-section banner min-h-25vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover">
        @include('websiteV2.banner')
        <div class="lqd-shape lqd-shape-bottom rotate-180 module-shape" data-negative="false">
            <svg class="lqd-custom-shape h-420 -z-1 left-50percent" fill="none" height="461" viewBox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">

                <path class="lqd-shape-fill" d=" M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z" fill="#5A31C4C4" fill-opacity="1">
                    <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"></animate>
                </path>
                <path class="lqd-shape-fill" d=" M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z" fill="#fff" fill-opacity="1">
                    <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"></animate>
                </path>
            </svg>
        </div>

        <div class="flex flex-wrap justify-around">
        </div>
    </section>
            <!-- End Banner -->

            <!-- Start Solutions -->
            @include('websiteV2.color_palette.testing_color')
            <!-- End Solutions -->

            <!-- Start About Progress -->
            <section class="lqd-section about-progress py-60" id="about">
                <div class="container">
                    <div class="row items-centeer">
                        <div class="module-first w-40percent relative flex flex-col flex-auto items-center justify-center lg:w-50percent sm:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, figure", "duration" : 750, "delay" : 65, "ease": "expo.out", "initValues": {"x": "-150px", "rotationY" : 56, "opacity" : 0}, "animations": {"x": "0px", "rotationY" : 0, "opacity" : 1}}'>
                            <div class="module-shape absolute -top-90 z-0">
                                <figure id="lqd-animated-blob-about-progress" class="lqd-animated-blob" data-lqd-animated-blob="true" data-blob-options='{"id": "lqd-animated-blob-about-progress", "width" : 500, "height" : 500, "radius" : 150, "speed" : 1, "amplitude" : 1, "anchorPoints" : 4, "gradientType": "linear", "colors" : ["#E26565", "#569ACC"]}'>
                                    <svg viewBox="0 0 500 500" width="500" height="500"></svg>
                                </figure>
                            </div>
                            <div class="lqd-imggrp-single block relative" data-shadow-style="4">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center md:flex-col">
                                    <figure class="w-full relative">
                                        <img class="rounded-12" width="862" height="1010" src="./webv2/images/banner/interior&exterior.jpg" alt="about progress">
                                        <span class="lqd-overlay flex lqd-imggrp-overlay-bg bg-transparent" style="background-image: linear-gradient(0deg, #2E4655 0%, #2E465500 43%);"></span>
                                    </figure>
                                </div>
                            </div>

                            <div class="module-col w-full relative flex items-end -mt-155 px-35 justify-end">
                                <div class="ld-fancy-heading relative text-start animation-element">
                                    <p class="ld-fh-element mb-1em inline-block relative text-18 text-white">Up To</p>
                                </div>
                                <div class="lqd-counter relative left lqd-counter-default text-white mr-15 animation-element">
                                    <div class="lqd-counter-element relative h1 text-100 mb-0 leading-1em" data-enable-counter="true" data-counter-options='{"targetNumber": "12"}'>
                                        <span class="block">12</span>
                                    </div>
                                </div>
                                <div class="ld-fancy-heading relative text-start animation-element">
                                    <p class="ld-fh-element mb-1em inline-block relative text-18 text-white">Years <br> of Protection</p>
                                </div>
                            </div>
                        </div>
                        <div class="module-last w-60percent flex flex-col flex-auto items-start justify-center pl-10percent lg:w-50percent sm:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, .lqd-split-lines .lqd-lines .split-inner", "duration" : 750, "startDelay" : 350, "delay" : 55, "ease": "expo.out", "initValues": {"y": "70px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative w-auto mb-15 py-5 px-15 bg-transparent rounded-100 animation-element" style="background-image: linear-gradient(90deg, #8745D5 0%, #e3e3e3 100%);">
                                <h6 class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-white">About Starthub</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <h2 class="ld-fh-element mb-0/4em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Our specification details </h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <p class="ld-fh-element mb-1/5em inline-block relative lqd-split-lines text-20 leading-1/5em text-slate-500" data-split-text="true" data-split-options='{"type": "lines"}'> More than just an colorful paint, we provide the best quality of surface protection.</p>
                            </div>
                            <div class="w-full max-w-full mb-15">
                                <div id="lqd-progressbar-1" class="lqd-progressbar relative animation-element" data-progressbar="true" data-progressbar-options='{"skipCreateMarkup": true, "value" : 95}'>
                                    <div class="lqd-progressbar-details flex items-center justify-between relative z-3 pb-10">
                                        <h3 class="lqd-progressbar-title whitespace-nowrap text-slate-300">Surface Protection</h3>
                                        <div class="lqd-progressbar-percentage flex items-center">
                                            <div class="lqd-progressbar-value text-slate-300"></div>
                                        </div>
                                    </div>
                                    <div class="lqd-progressbar-inner relative w-full flex-grow-1 overflow-hidden h-25 rounded-20 bg-transparent shadow-xs">
                                        <div class="lqd-progressbar-bar absolute top-5 right-5 bottom-5 left-5 bg-transparent" style="background-image: linear-gradient(90deg, #fff 0%, #483DD3 100%);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full mb-15">
                                <div id="lqd-progressbar-2" class="lqd-progressbar relative animation-element" data-progressbar="true" data-progressbar-options='{"skipCreateMarkup": true, "value" : 100}'>
                                    <div class="lqd-progressbar-details flex items-center justify-between relative z-3 pb-10">
                                        <h3 class="lqd-progressbar-title whitespace-nowrap text-slate-300">Washability</h3>
                                        <div class="lqd-progressbar-percentage flex items-center">
                                            <div class="lqd-progressbar-value text-slate-300"></div>
                                        </div>
                                    </div>
                                    <div class="lqd-progressbar-inner relative w-full flex-grow-1 overflow-hidden h-25 rounded-20 bg-transparent shadow-xs">
                                        <div class="lqd-progressbar-bar absolute top-5 right-5 bottom-5 left-5 bg-transparent" style="background-image: linear-gradient(90deg, #8745D5 0%, #e3e3e3 100%);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full mb-15">
                                <div id="lqd-progressbar-3" class="lqd-progressbar relative animation-element" data-progressbar="true" data-progressbar-options='{"skipCreateMarkup": true, "value" : 95}'>
                                    <div class="lqd-progressbar-details flex items-center justify-between relative z-3 pb-10">
                                        <h3 class="lqd-progressbar-title whitespace-nowrap text-slate-300">Weathering Resistance</h3>
                                        <div class="lqd-progressbar-percentage flex items-center">
                                            <div class="lqd-progressbar-value text-slate-300"></div>
                                        </div>
                                    </div>
                                    <div class="lqd-progressbar-inner relative w-full flex-grow-1 overflow-hidden h-25 rounded-20 bg-transparent shadow-xs">
                                        <div class="lqd-progressbar-bar absolute top-5 right-5 bottom-5 left-5 bg-transparent" style="background-image: linear-gradient(90deg, #8745D5 0%, #e3e3e3 100%);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Progress -->

            <!-- Start Services -->
            <section class="lqd-section services py-60" id="services">
                <div class="container">
                    <div class="row">
                        <div class="w-55percent flex flex-wrap flex-grow-0 flex-shrink-0 lg:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner, .animation-element", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative mask-text w-full max-w-full">
                                <h3 class="ld-fh-element mb-0/75em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Worldwide Recognition.</h3>
                            </div>
                            <div class="w-50percent sm:w-full">
                                <div class="py-30 px-25 border-right border-bottom border-black-10 sm:border-right-0 animation-element">
                                    <div class="iconbox flex flex-grow-1 relative iconbox-circle items-start">
                                        <div class="iconbox-icon-wrap mr-25">
                                            <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-30 h-30 text-30 text-white bg-white shadow-sm">
                                                <svg class="w-45" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <circle cx="5" cy="5" r="5" fill="#9EB1B4"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading mb-0/7em text-20 leading-1em">Painting Service </h3>
                                            <p class="text-13 leading-18">Hub IT allows your business and technology manipulate big data in the digital world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-50percent sm:w-full">
                                <div class="py-30 px-25 border-bottom border-black-10 animation-element">
                                    <div class="iconbox flex flex-grow-1 relative iconbox-circle items-start">
                                        <div class="iconbox-icon-wrap mr-25">
                                            <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-30 h-30 text-30 text-white bg-white shadow-sm">
                                                <svg class="w-45" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <circle cx="5" cy="5" r="5" fill="#6BCD94"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading mb-0/7em text-20 leading-1em">Thousand of Colors </h3>
                                            <p class="text-13 leading-18">Hub IT allows your business and technology manipulate big data in the digital world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-50percent sm:w-full">
                                <div class="py-30 px-25 border-right border-black-10 sm:border-right-0 sm:border-bottom animation-element">
                                    <div class="iconbox flex flex-grow-1 relative iconbox-circle items-start">
                                        <div class="iconbox-icon-wrap mr-25">
                                            <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-30 h-30 text-30 text-white bg-white shadow-sm">
                                                <svg class="w-45" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <circle cx="5" cy="5" r="5" fill="#E1A45D"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading mb-0/7em text-20 leading-1em">Color Scheme Service </h3>
                                            <p class="text-13 leading-18">Hub IT allows your business and technology manipulate big data in the digital world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-50percent sm:w-full">
                                <div class="py-30 px-25 animation-element">
                                    <div class="iconbox flex flex-grow-1 relative iconbox-circle items-start">
                                        <div class="iconbox-icon-wrap mr-25">
                                            <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-30 h-30 text-30 text-white bg-white shadow-sm">
                                                <svg class="w-45" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <circle cx="5" cy="5" r="5" fill="#675DE1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading mb-0/7em text-20 leading-1em">Computerize Color Mixing</h3>
                                            <p class="text-13 leading-18">Hub IT allows your business and technology manipulate big data in the digital world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-45percent module-col relative flex flex-row items-end justify-end lg:order-first lg:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": "figure", "duration" : 750, "startDelay" : 350, "delay" : 55, "ease": "expo.out", "initValues": {"x": "-100px", "rotationY" : 40, "opacity" : 0}, "animations": {"x": "0px", "rotationY" : 0, "opacity" : 1}}'>
                            <div class="module-shape absolute -top-90 z-0">
                                <figure class="lqd-animated-blob-passion" data-lqd-animated-blob="true" data-blob-options='{"id": "lqd-animated-blob-passion", "width" : 500, "height" : 500, "radius" : 150, "speed" : 1, "amplitude" : 1, "anchorPoints" : 4, "gradientType": "linear", "colors" : ["#E26565", "#569ACC"]}'>
                                    <svg viewBox="0 0 500 500" width="500" height="500"></svg>
                                </figure>
                            </div>
                            <div class="module-img-1 absolute w-270 bottom-20percent">
                                <div class="lqd-imggrp-single block relative" data-shadow-style="4">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative" style="box-shadow: none">
                                            <img draggable="false" class="rounded-12" width="541" height="550" src="./webv2/images/colorpattern.jpg" alt="passion">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="module-img-2 relative w-270">
                                <div class="lqd-imggrp-single block relative" data-shadow-style="4">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative" style="box-shadow: none">
                                            <img draggable="false" class="rounded-12" width="526" height="621" src="./webv2/images/big-pic.png" alt="passion">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services -->

            <!-- Start Text Carousel -->
            <section class="lqd-section text-carousel pt-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-12 module-first">
                            <div class="carousel-container relative carousel-nav-shaped">
                                <div class="carousel-items relative -mr-50 -ml-50" data-lqd-flickity='{"marquee": true, "percentPosition": false, "columnsAutoWidth": true, "draggable": false, "equalHeightCells": true, "middleAlignContent": true, "marqueeTickerSpeed": "0.5", "pauseAutoPlayOnHover": false}'>
                                    <div class="flickity-viewport relative w-full overflow-hidden">
                                        <div class="flickity-slider flex w-full h-full relative">
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/watex.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">Nippon <br> Watex</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/matex.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">Nippon <br> Matex</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/matexpremium.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">Nippon<br>Matex Premium</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/weathergard6y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">WeatherGard <br> 6 years</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/weatherbond8y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">WeatherBond <br> 8 years</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/weatherbondplus.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">WeatherBond Plus<br> 12 years</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-20">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <div style="border-radius: 2rem; background-color:#e3e3e3;">
                                                            <img src="{{ url('webv2/images/product/odourless-spotless.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width:200px ">
                                                            <br>
                                                            <h6 class="text-center">Odourless<br> Spotless Plus</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Built for online marketing 🎉</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Social media 📱</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Agility and scale 💶</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Built for online marketing 🎉</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col col-12">
                            <div class="carousel-container relative carousel-nav-shaped">
                                <div class="carousel-items relative -mr-50 -ml-50" data-lqd-flickity='{"marquee": true, "percentPosition": false, "columnsAutoWidth": true, "draggable": false, "marqueeTickerSpeed": "1", "equalHeightCells": true, "middleAlignContent": true, "rightToLeft": true, "pauseAutoPlayOnHover": false}'>
                                    <div class="flickity-viewport relative w-full overflow-hidden">
                                        <div class="flickity-slider flex w-full h-full relative">
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Development 👨🏾‍💻</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Consultation 🤩</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700 module-gradient">
                                                        <p class="ld-gradient-heading" style="background-image: linear-gradient(to bottom right, #F08991, #F4B466);">Digital age</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>eCommerce 🏦</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center items-center px-50">
                                                <div class="carousel-item-inner relative w-full">
                                                    <div class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                                        <p>Built for online marketing 🎉</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- End Text Carousel -->

            <!-- Start Case Studies -->
            <section class="lqd-section case-studies pt-70 pb-50" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner, .animation-element", "duration" : 750, "startDelay" : 250, "delay" : 55, "ease": "expo.out", "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="container">
                    <div class="row">
                        <div class="col col-12 flex flex-col items-center text-center">
                            <div class="ld-fancy-heading relative w-auto mb-15 py-5 px-15 bg-transparent rounded-100 animation-element" style="background-image: linear-gradient(90deg, #8745D5 0%, #e3e3e3 100%);">
                                <h6 class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-white">Case studies</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <h2 class="ld-fh-element mb-0/75em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Projects Reference</h2>
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="lqd-pf-grid animation-element">
                                <div class="liquid-filter-items items-center justify-between">
                                    <div class="liquid-filter-items-inner flex-grow-1">
                                        <span class="liquid-filter-items-label">Filter by</span>
                                        <div class="flex ml-1/5em md:hidden">
                                            <ul class="filter-list-inline reset-ul size-md flex items-center text-15" id="pf-filter-case-studies">
                                                <li class="text-slate-300 cursor-pointer active" data-filter="*">
                                                    <span>All</span>
                                                </li>
                                                {{-- <li class="text-slate-300 cursor-pointer" data-filter=".branding">
                                                    <span>Ministry</span>
                                                </li>
                                                <li class="text-slate-300 cursor-pointer" data-filter=".custom-print">
                                                    <span>Condo </span>
                                                </li>
                                                <li class="text-slate-300 cursor-pointer" data-filter=".digital-design">
                                                    <span>Digital Design</span>
                                                </li>
                                                <li class="text-slate-300 cursor-pointer" data-filter=".ecommerce">
                                                    <span>Ecommerce</span>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <div class="lqd-filter-dropdown hidden md:block" data-form-options='{ "dropdownAppendTo":  "self" }'>
                                            <select name="lqd-filter-dropdown-pf-filter-case-studies text-slate-500" id="lqd-filter-dropdown-pf-filter-case-studies">
                                                <option selected data-filter="*" value="*">All</option>
                                                <option data-filter=".branding" value=".branding">Branding</option>
                                                <option data-filter=".custom-print" value=".custom-print">Custom Print</option>
                                                <option data-filter=".digital-design" value=".digital-design">Digital Design</option>
                                                <option data-filter=".ecommerce" value=".ecommerce">Ecommerce</option>
                                            </select>
                                        </div>
                                        <a href="#contact-modal" class="btn btn-underlined border-thin btn-icon-right btn-hover-reveal leading-1em text-slate-300 mb-0/5em" data-lity="#contact-modal">
                                            <span class="btn-txt" data-text="Start a project">Start a project</span>
                                            <span class="btn-icon">
                                                <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="lqd-pf-row row flex flex-wrap -mr-15 -ml-15" data-liquid-masonry="true" data-masonry-options='{ "filtersID":  "#pf-filter-case-studies" ,  "filtersCounter":  true }'>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item digital-design ecommerce portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3869 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="478" src="./img/project_reference/company_project_reference/202311061647cml10001.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Chip Mong Land</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">House</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/202311061647cml10001.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item ecommerce masonry portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3355 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="478" src="./img/project_reference/company_project_reference/202311061649casa10002.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Casa (Meridian)</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">Tower & Building</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/202311061649casa10002.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item branding custom-print masonry portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3354 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="478" src="./img/project_reference/company_project_reference/cambodian_party1.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Cambodian's People Party</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">Ministry's Project</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/cambodian_party1.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item branding digital-design masonry portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3353 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="476" src="./img/project_reference/company_project_reference/monument.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Independence Monument</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">Ministry's Project</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/monument.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item custom-print ecommerce masonry portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3351 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="476" src="./img/project_reference/company_project_reference/202311061602aeon.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Aeon Mall</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">Mall</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/202311061602aeon.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="lqd-pf-column col-12 col-md-6 col-lg-4 px-15 masonry-item custom-print masonry portfolio-single">
                                        <article class="lqd-pf-item lqd-pf-item-style-6 rounded-6 px-1em pb-1em pt-1/6em lqd-pf-dark post-3349 liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                            <div class="lqd-pf-item-inner">
                                                <div class="lqd-pf-img mb-1em relative rounded-10 overflow-hidden">
                                                    <figure>
                                                        <figure class="w-full">
                                                            <img width="698" height="476" src="./img/project_reference/company_project_reference/202311061649maline10002.jpg" alt="case studies">
                                                        </figure>
                                                    </figure>
                                                    <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent" style="background-image: linear-gradient(180deg, #675DE100 0%, #675DE1 100%);"></span>
                                                </div>
                                                <div class="lqd-pf-details">
                                                    <div class="flex justify-between">
                                                        <h3 class="lqd-pf-title mt-0 items-center">Maline</h3>
                                                    </div>
                                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                        <li>
                                                            <a href="#">Tower</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="./img/project_reference/company_project_reference/202311061649maline10002.jpg" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger fresco" data-fresco-group="true"></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Case Studies -->

            <!-- Start How It Work -->
            <section class="lqd-section how-it-work pt-70 pb-80" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, .lqd-split-lines .lqd-lines .split-inner", "duration" : 750, "startDelay" : 250, "delay" : 50, "ease": "expo.out", "initValues": {"y": "55px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="container animation-element">
                    <div class="row justify-between">
                        <div class="col col-12 col-md-3 relative flex flex-col module-col">
                            <div class="ld-fancy-heading relative">
                                <h6 class="ld-fh-element mb-1em inline-block relative lqd-split-lines text-14 uppercase tracking-1 text-black-20" data-split-text="true" data-split-options='{"type": "lines"}'> step 1</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text lg:z-1">
                                <h2 class="ld-fh-element mb-0/65em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Activate<br> Hub</h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <p class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines text-15 leading-20 text-slate-500" data-split-text="true" data-split-options='{"type": "lines"}'> Connect people interested in buying, selling, and renting properties. Helping IT sector to make safer, more </p>
                            </div>
                            <div class="module-number absolute -top-20percent z-0">
                                <div class="ld-fancy-heading relative animation-element">
                                    <p class="ld-fh-element m-0 inline-block relative leading-1em h1">1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-3 relative flex flex-col module-col">
                            <div class="ld-fancy-heading relative mask-text">
                                <h6 class="ld-fh-element mb-1em inline-block relative lqd-split-lines text-14 uppercase tracking-1 text-black-20" data-split-text="true" data-split-options='{"type": "lines"}'> step 2</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text lg:z-1">
                                <h2 class="ld-fh-element mb-0/65em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Install<br>plugins </h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <p class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines text-15 leading-20 text-slate-500" data-split-text="true" data-split-options='{"type": "lines"}'> Connect people interested in buying, selling, and renting properties. Helping IT sector to make safer, more </p>
                            </div>
                            <div class="module-number absolute -top-20percent z-0">
                                <div class="ld-fancy-heading relative animation-element">
                                    <p class="ld-fh-element m-0 inline-block relative leading-1em h1">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-3 relative flex flex-col">
                            <div class="ld-fancy-heading relative mask-text">
                                <h6 class="ld-fh-element mb-1em inline-block relative lqd-split-lines text-14 uppercase tracking-1 text-black-20" data-split-text="true" data-split-options='{"type": "lines"}'> step 3</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text lg:z-1">
                                <h2 class="ld-fh-element mb-0/65em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Import<br>a demo </h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <p class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines text-15 leading-20 text-slate-500" data-split-text="true" data-split-options='{"type": "lines"}'> Connect people interested in buying, selling, and renting properties. Helping IT sector to make safer, more </p>
                            </div>
                            <div class="module-number absolute -top-20percent z-0">
                                <div class="ld-fancy-heading relative animation-element">
                                    <p class="ld-fh-element m-0 inline-block relative leading-1em h1">3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mt-70 text-center">
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="ld-fh-element mb-0/5em inline-block relative text-14 font-medium text-slate-300">
                                    <span>Still have a question? Browse</span>
                                    <a href="#" data-localscroll="true"><u>documentation</u></a>
                                    <span>or</span>
                                    <a href="#contact" data-localscroll="true"><u>submit a ticket.</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End How It Work -->

            <!-- Start Companies -->
            <section class="lqd-section companies pt-90 pb-120 bg-transparent" style="background-image: linear-gradient(180deg, #2D3140 0%, #19272C 100%);">
                <div class="lqd-shape lqd-shape-bottom rotate-180 module-shape-1" data-negative="false">
                    <svg class="lqd-custom-shape h-175 left-50percent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
                        <path class="lqd-shape-fill" data-name="Row Separator" d="M1440,0Q1080,99,720,99T0,0V100H1440Z" fill="#fff" id="Row_Separator-1" />
                    </svg>
                </div>
                <div class="module-shape-2 w-full absolute flex z-0 bottom-0 ltr-left-0">
                    <div class="lqd-shape lqd-shape-bottom rotate-180" data-negative="false">
                        <svg class="lqd-custom-shape -z-1 left-50percent" fill="none" height="461" viewBox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path class="lqd-shape-fill" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09" fill="#FFFFFF14">
                                <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s" values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z"></animate>
                            </path>
                            <path class="lqd-shape-fill opacity-100" d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z" fill-opacity="1" fill="#FFFFFF03">
                                <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="8s" values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"></animate>
                            </path>
                            <path class="lqd-shape-fill opacity-100" d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z" fill-opacity="1" fill="#FFFFFF08">
                                <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"></animate>
                            </path>
                            <path class="lqd-shape-fill opacity-100" d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z" fill-opacity="1" fill="#FFFFFF14">
                                <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"></animate>
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="module-img-1 absolute top-0 z-0 ltr-left-0">
                    <div class="lqd-imggrp-single block relative w-full max-w-full text-center">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img width="869" height="453" src="./css/hub5/images/demo/start-hub-5/shape-waves.svg" alt="shape wave">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="module-img-2 absolute top-30percent">
                    <div class="lqd-imggrp-single block relative w-full max-w-full text-center">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img width="254" height="254" src="./css/hub5/images/demo/start-hub-5/shape-ellipse.svg" alt="shape">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-12 flex flex-row flex-wrap rounded-12 transition-all border-1 border-white-10">
                            <div class="row">
                                <div class="col col-12 col-md-5 relative flex flex-row flex-wrap items-center flex-grow-0 flex-shrink-0 border-right border-white-10 pt-45 pb-60 px-70 module-col sm:border-bottom sm:border-right-0" data-custom-animations="true" data-ca-options='{"animationTarget": "figure, .btn, h2, p", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"y": "60px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                                    <div class="module-parallax absolute top-30percent" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"x": "-79px", "y": "280px", "rotationZ" : 0}' data-parallax-to='{"x": "0px", "y": "-257px", "rotationZ" : 92}'>
                                        <div class="lqd-imggrp-single block relative w-full max-w-full text-center">
                                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                                <figure class="w-full relative">
                                                    <img class="w-65" width="128" height="150" src="./css/hub5/images/demo/start-hub-5/shape-prlx.png" alt="parallax">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading relative mr-30">
                                        <p class="ld-fh-element m-0 inline-block relative text-16 font-medium text-white">Compatible</p>
                                    </div>
                                    <div class="lqd-imggrp-single block relative mr-20">
                                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                            <figure class="w-full relative">
                                                <img width="26" height="28" src="./css/hub5/images/demo/start-hub-5/angular.svg" alt="angular">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="lqd-imggrp-single block relative mr-20">
                                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                            <figure class="w-full relative">
                                                <img width="31" height="31" src="./css/hub5/images/demo/start-hub-5/firefox.svg" alt="firefox">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading relative w-full max-w-full module-title">
                                        <h2 class="ld-fh-element mb-0/3em mt-0/2em inline-block relative ld-gradient-heading bg-transparent text-65" style="background-image: linear-gradient(180deg, #FFD36A 0%, #9B90D6 100%);">Built-in<br> tools 3d</h2>
                                    </div>
                                    <div class="ld-fancy-heading relative w-full max-w-full">
                                        <p class="ld-fh-element mb-1/75em inline-block relative text-16 leading-20 text-white-30">Bring your ideas to life an intuitive visual editor create, edit, and customize.</p>
                                    </div>
                                    <a href="#" class="btn btn-solid btn-md btn-icon-right btn-hover-reveal text-purple-300 bg-blue-200 rounded-8" target="_blank" rel="nofollow">
                                        <span class="btn-txt" data-text="Join the community">Join the community</span>
                                        <span class="btn-icon text-1em">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col col-12 col-md-7 flex flex-row flex-wrap justify-between pt-45 pb-60 px-70 module-col" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-iconbox-scale", "duration" : 750, "startDelay" : 500, "delay" : 55, "ease": "expo.out", "initValues": {"y": "70px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center mb-30 sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-blue-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41">
                                                        <rect width="41" height="41" fill="none"></rect>
                                                        <path d="M9.789,28.713a1.281,1.281,0,0,0,2.347.711l9.991-14.987a1.281,1.281,0,0,0-1.066-1.992H13.206V3.009A1.281,1.281,0,0,0,10.859,2.3L.867,17.286a1.281,1.281,0,0,0,1.066,1.992H9.789Z" transform="translate(15.836 4.639)" fill="#7989ff"></path>
                                                        <path d="M4.9,25a1.5,1.5,0,0,1-1.5-1.5v-2A1.5,1.5,0,0,1,4.9,20H15.5A1.5,1.5,0,0,1,17,21.5v2A1.5,1.5,0,0,1,15.5,25ZM1.5,15A1.5,1.5,0,0,1,0,13.5v-2A1.5,1.5,0,0,1,1.5,10h8.9a1.5,1.5,0,0,1,1.5,1.5v2A1.5,1.5,0,0,1,10.4,15ZM4.9,5A1.5,1.5,0,0,1,3.4,3.5v-2A1.5,1.5,0,0,1,4.9,0H15.5A1.5,1.5,0,0,1,17,1.5v2A1.5,1.5,0,0,1,15.5,5Z" transform="translate(2 8)" fill="#7989ff" opacity="0.3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>App<br>Development </span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center mb-30 sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-gray-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                                        <rect width="42" height="42" fill="none"></rect>
                                                        <path d="M1.441,1.647A1.75,1.75,0,0,1,3.188,0h21.2a1.75,1.75,0,0,1,1.747,1.647l1.435,24.4a3.5,3.5,0,0,1-3.494,3.706H3.5A3.5,3.5,0,0,1, .006,26.044Z" transform="translate(7.212 7)" fill="#accfe3" opacity="0.3"></path>
                                                        <path d="M0,0H3.5A5.25,5.25,0,0,0,8.75,5.25,5.25,5.25,0,0,0,14,0h3.5A8.75,8.75,0,0,1,8.75,8.75,8.75,8.75,0,0,1,0,0Z" transform="translate(12.25 12.25)" fill="#accfe3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>eCommerce<br>Solutions</span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center mb-30 sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-green-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                                        <rect width="42" height="42" fill="none"></rect>
                                                        <path d="M6.5,21A1.5,1.5,0,0,1,5,19.5V19a1.5,1.5,0,0,1,1.5-1.5h2A1.5,1.5,0,0,1,10,19v.5A1.5,1.5,0,0,1,8.5,21Zm-5-8.75A1.5,1.5,0,0,1,0,10.75v-.5a1.5,1.5,0,0,1,1.5-1.5h7a1.5,1.5,0,0,1,1.5,1.5v.5a1.5,1.5,0,0,1-1.5,1.5ZM4.833,3.5A1.5,1.5,0,0,1,3.334,2V1.5A1.5,1.5,0,0,1,4.833,0H8.5A1.5,1.5,0,0,1,10,1.5V2A1.5,1.5,0,0,1,8.5,3.5Z" transform="translate(0 11)" fill="#67cb91" opacity="0.3"></path>
                                                        <path d="M26,21H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H26a2,2,0,0,1,2,2V19A2,2,0,0,1,26,21ZM4.587,3.5a1.091,1.091,0,0,0-.957.553,1.012,1.012,0,0,0-.087.789,1.052,1.052,0,0,0, .529.633l9.413,4.9a1.116,1.116,0,0,0,1.031,0l9.413-4.9a1.051,1.051,0,0,0, .528-.632,1.013,1.013,0,0,0-.087-.79,1.091,1.091,0,0,0-.957-.553,1.115,1.115,0,0,0-.514.126L14,8.258,5.1,3.626A1.118,1.118,0,0,0,4.587,3.5Z" transform="translate(14 11)" fill="#67cb91"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>Newsletter<br>Builder</span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-purple-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                                        <rect width="39" height="39" fill="none"></rect>
                                                        <path d="M12.455,16.169l3.582-3.582a3.25,3.25,0,0,0, .609-3.752l-.2-.406a3.25,3.25,0,0,1, .609-3.752L21.492.238a.812.812,0,0,1,1.3.211l1.794,3.588a7.13,7.13,0,0,1-1.336,8.23L13.5,22.015a8.819,8.819,0,0,1-9.025,2.13L.556,22.838a.813.813,0,0,1-.318-1.345l4.308-4.308A3.25,3.25,0,0,1,8.3,16.575l.406.2A3.25,3.25,0,0,0,12.455,16.169Z" transform="translate(8.799 7.855)" fill="#b576ff"></path>
                                                        <path d="M5.235,5.236A17.838,17.838,0,0,1,19.537.077l-.3,3.237A14.623,14.623,0,0,0,3.312,19.22l-3.237.3A17.835,17.835,0,0,1,5.235,5.236Zm4.6,4.6a11.347,11.347,0,0,1,9.136-3.279l-.31,3.235a8.125,8.125,0,0,0-8.873,8.847l-3.237.3A11.356,11.356,0,0,1,9.832,9.832Z" transform="translate(4.022 3.209)" fill="#b576ff" opacity="0.3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>Marketing<br>Solutions </span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-yellow-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="34" height="34.028" viewBox="0 0 34 34.028">
                                                        <rect width="34" height="34.003" transform="translate(0 0.025)" fill="none"></rect>
                                                        <path d="M28.333,0V5.668A2.834,2.834,0,0,1,25.5,8.5H2.833A2.834,2.834,0,0,1,0,5.668V0H6.062l.771,2.313A2.833,2.833,0,0,0,9.521,4.251h9.437a2.833,2.833,0,0,0,2.534-1.567L22.834,0Z" transform="translate(2.833 24.108)" fill="#ffc569"></path>
                                                        <path d="M0,9.919,4.766,1.445A2.833,2.833,0,0,1,7.235,0H19.5a2.833,2.833,0,0,1,2.469,1.445L26.74,9.919h-4.7A2.833,2.833,0,0,0,19.5,11.486L18.161,14.17H8.724l-.771-2.313A2.833,2.833,0,0,0,5.265,9.919Z" transform="translate(3.63 11.355)" fill="#ffc569" opacity="0.3"></path>
                                                        <path d="M4.72.169A.709.709,0,0,0,3.553.71V3.481H.708A.708.708,0,0,0,0,4.19v1.45a.708.708,0,0,0, .708.708H3.553V9.119A.709.709,0,0,0,4.72,9.66l4.968-4.2a.708.708,0,0,0,0-1.081Z" transform="translate(12.085 9.938) rotate(-90)" fill="#ffc569"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>High Performance<br>Server</span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="lqd-iconbox-scale w-33percent flex flex-wrap justify-center sm:w-50percent transition-all">
                                        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle iconbox-heading-arrow-onhover text-center">
                                            <div class="iconbox-icon-wrap">
                                                <div class="iconbox-icon-container inline-flex relative z-1 rounded-full w-70 h-70 text-42 mb-10 bg-red-100">
                                                    <svg class="absolute-center h-auto" xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41">
                                                        <rect width="41" height="41" fill="none"></rect>
                                                        <path d="M0,19.238a17.99,17.99,0,0,1, .664-4.855l3.29.922a14.5,14.5,0,1,0,9.283-9.812l2.034,2.424a.855.855,0,0,1-.606,1.4l-8.315.47a.855.855,0,0,1-.879-1.052L7.4.657A.855.855,0,0,1,8.885.3l2.031,2.421A17.94,17.94,0,1,1,0,19.238Z" transform="translate(1.708 2.117)" fill="#faa" opacity="0.3"></path>
                                                        <path d="M11,14H1a1,1,0,0,1-1-1V6.25a1,1,0,0,1,1-1h.715V2.5A2.5,2.5,0,0,1,4.214,0H7.785a2.5,2.5,0,0,1,2.5,2.5V5.25H11a1,1,0,0,1,1,1V13A1,1,0,0,1,11,14ZM4.928,1.75a1.5,1.5,0,0,0-1.5,1.5v2H8.572v-2a1.5,1.5,0,0,0-1.5-1.5Z" transform="translate(15 14)" fill="#faa"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <h3 class="lqd-iconbox-heading text-15 leading-20 m-0 text-white">
                                                <span>Secure<br>Payments</span>
                                                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="0 0 12 32">
                                                    <path d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z" fill="currentColor"></path>
                                                </svg>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 flex items-center justify-center pt-40 pb-80" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease" : ["power4.out"], "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative py-15 px-20 rounded-30 text-center bg-slate-50 animation-element">
                                <p class="ld-fh-element m-0 inline-block relative text-14 font-medium text-blue-300">
                                    <span>Still have a question?</span>
                                    <a href="#contact" data-localscroll="true"><u>submit a ticket.</u></a>
                                </p>
                            </div>
                        </div>
                        <div class="col col-12 relative flex flex-col pb-45" data-custom-animations="true" data-ca-options='{"animationTarget": "figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 750, "startDelay" : 250, "delay" : 55, "ease": "expo.out", "initValues": {"y": "100px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative mask-text text-center">
                                <h2 class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines text-white" data-split-text="true" data-split-options='{"type": "lines"}'> <span class="text-gray-200">Trusted by</span> global companies</h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text text-center w-500 mx-auto sm:w-full">
                                <p class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines text-18 leading-24 text-white-40" data-split-text="true" data-split-options='{"type": "lines"}'> Install any demo, plugin or template in a matter of seconds. Pin any content, use different duration times.</p>
                            </div>
                            <div class="module-shape-3 absolute z-1 top-50percent" data-parallax="true" data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}' data-parallax-from='{"y": "98px", "rotationZ" : -69}' data-parallax-to='{"y": "-186px", "rotationZ" : 27}'>
                                <div class="lqd-imggrp-single block relative" data-float="ease-out">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img class="w-50percent" width="174" height="179" src="./css/hub5/images/demo/start-hub-5/shape-like.png" alt="shape">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 flex flex-row flex-wrap" data-custom-animations="true" data-ca-options='{"animationTarget": "figure", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-45 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="100" height="42" src="./css/hub5/images/demo/start-hub-5/company-1.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-35 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="72" height="72" src="./css/hub5/images/demo/start-hub-5/company-2.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-35 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="61" height="61" src="./css/hub5/images/demo/start-hub-5/company-3.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-55 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="79" height="28" src="./css/hub5/images/demo/start-hub-5/company-4.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-55 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="177" height="35" src="./css/hub5/images/demo/start-hub-5/company-5.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-bottom px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-55 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="79" height="35" src="./css/hub5/images/demo/start-hub-5/company-6.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-45 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="122" height="36" src="./css/hub5/images/demo/start-hub-5/company-7.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all border-white-10 border-right px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-45 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="67" height="49" src="./css/hub5/images/demo/start-hub-5/company-8.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-33percent flex flex-row items-center transition-all px-60 sm:w-full">
                                <div class="lqd-imggrp-single block relative w-full max-w-full text-center py-45 opacity-60">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="66" height="51" src="./css/hub5/images/demo/start-hub-5/company-9.svg" alt="global companies">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mt-30 text-center">
                            <a href="#" class="btn btn-solid btn-lg btn-icon-right btn-hover-swp text-blue-400 bg-blue-50 rounded-8" target="_blank" rel="nofollow">
                                <span class="btn-txt" data-text="See how Heinz Reduced their Costs">See how Heinz Reduced their Costs</span>
                                <span class="btn-icon">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward text-1em"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-forward text-1em"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Companies -->

            <!-- Start Testimonials -->
            <section class="lqd-section testimonials pt-90 pb-20" id="testimonials" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element .lqd-split-lines .lqd-lines .split-inner, .animation-element", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"y": "80px", "opacity" : 0}, "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-12 flex flex-col items-center text-center">
                            <div class="ld-fancy-heading relative mb-15 py-5 px-15 rounded-100 bg-slate-50 animation-element">
                                <h6 class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-slate-500">Cryptocurrency wallet</h6>
                            </div>
                            <div class="ld-fancy-heading relative mask-text">
                                <h2 class="ld-fh-element mb-0/5em inline-block relative lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Testimonials 😍</h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text w-550 mx-auto module-text xs:w-full">
                                <p class="ld-fh-element mb-2/5em inline-block relative lqd-split-lines text-20 leading-1/15em text-slate-800" data-split-text="true" data-split-options='{"type": "lines"}'> We have three projects with this template and that is because we love the design, <span class="text-slate-600">the large number of possibilities.</span></p>
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="carousel-container carousel-dots-style4 carousel-dots-md carousel-dots-mobile-outside carousel-dots-mobile-center animation-element">
                                <div class="carousel-items relative " data-lqd-flickity='{"cellAlign": "center", "wrapAround": true, "autoPlay": true, "pageDots": true, "": "inherit", "groupCells": false, "pauseAutoPlayOnHover": false, "prevNextButtons": false, "dotsIndicator": "dots", "dotsAppendTo": "self"}'>
                                    <div class="flickity-viewport relative w-full overflow-hidden">
                                        <div class="flickity-slider flex w-full h-full relative items-start">
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">Simply perfect! Theme and support are amazing! Frank thanks for the help, always fast and efficient!</span>
                                                                        <br>
                                                                        <span style="color: #506071;">The best theme and support I've had!</span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-1.jpg" alt="leandroMariotto">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">leandroMariotto</h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">I'm early on in the process of building my website; however, I'm already impressed by customer support's response time. Great customer support ratings is something I consider before purchasing a theme.Thank you LiquidThemes!</span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-2.jpg" alt="myadesigns">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">myadesigns</h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">Incredible theme with very modern on-trend design and top notch support. Probably one of the best bang for buck themes I've purchased in a long time</span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-3.jpg" alt="arke1">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">arke1</h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">Incredible theme and fantastic support! Every time I had a question, they got back to you so quickly and fixed your problem! Im so impressed! Thank you guys again for your precious help! Your customer support is amazing! <br></span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-4.jpg" alt="ritamjahed">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">ritamjahed </h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">Incredible theme with very modern on-trend design and top notch support. Probably one of the best bang for buck themes I've purchased in a long time</span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-2.jpg" alt="arke1">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">arke1</h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">I'm early on in the process of building my website; however, I'm already impressed by customer support's response time. Great customer support ratings is something I consider before purchasing a theme.Thank you LiquidThemes!</span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-3.jpg" alt="myadesigns">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">myadesigns</h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item flex flex-col justify-center flex-auto px-30">
                                                <div class="carousel-item-inner relative w-full mb-20">
                                                    <div class="carousel-item-content relative w-full">
                                                        <div class="lqd-testi relative lqd-testi-style-8 flex flex-col-reverse lqd-testi-card lqd-testi-shadow-none lqd-testi-details-sm lqd-testi-quote-16 lqd-testi-avatar-48 bg-white-0 border-3 border-gray-100 rounded-12">
                                                            <div class="lqd-testi-quote">
                                                                <blockquote>
                                                                    <p>
                                                                        <span style="color: #506071;">Incredible theme and fantastic support! Every time I had a question, they got back to you so quickly and fixed your problem! Im so impressed! Thank you guys again for your precious help! Your customer support is amazing!<br>
                                                                        </span>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                            <div class="lqd-testi-info flex flex-wrap items-center justify-between mb-1/5em">
                                                                <div class="lqd-testi-details flex items-center">
                                                                    <figure class="lqd-testi-avatar rounded-full overflow-hidden">
                                                                        <img decoding="async" class="rounded-full" src="./css/hub5/images/demo/start-hub-5/avatar-4.jpg" alt="ritamjahed">
                                                                    </figure>
                                                                    <div class="lqd-testi-np pl-1/5em">
                                                                        <h3 class="font-medium">ritamjahed </h3>
                                                                        <h4>Envato User</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="lqd-testi-social-icon"></div>
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
                        <div class="col col-12 text-center mt-70 module-last">
                            <div class="ld-fancy-heading relative w-auto animation-element">
                                <p class="ld-fh-element mb-2em inline-block relative text-14 font-medium text-slate-300">
                                    <span>Still have a question? Browse</span>
                                    <a href="#" data-localscroll="true"><u>documentation</u></a>
                                    <span>or</span>
                                    <a href="#contact" data-localscroll="true"><u>submit a ticket.</u></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-12 flex flex-wrap">
                            <div class="w-25percent flex justify-center border-right border-black-10 transition-all sm:w-50percent sm:border-bottom">
                                <div class="lqd-iconbox-scale w-full flex flex-wrap justify-center py-30">
                                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center text-center">
                                        <div class="iconbox-icon-wrap">
                                            <div class="iconbox-icon-container inline-flex mb-25 text-74 text-slate-600">
                                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" /></svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading text-15 font-semibold leading-20 mb-10">Open Source </h3>
                                            <p class="text-14">GitHub Repo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-25percent flex justify-center border-right border-black-10 transition-all sm:w-50percent sm:border-bottom">
                                <div class="lqd-iconbox-scale w-full flex flex-wrap justify-center py-30">
                                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center text-center">
                                        <div class="iconbox-icon-wrap">
                                            <div class="iconbox-icon-container inline-flex mb-25 text-74 text-slate-600">
                                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" /></svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading text-15 font-semibold leading-20 mb-10">Follow Us on Twitter </h3>
                                            <p class="text-14">Latest news and updates</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-25percent flex justify-center border-right border-black-10 transition-all sm:w-50percent">
                                <div class="lqd-iconbox-scale w-full flex flex-wrap justify-center py-30">
                                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center text-center">
                                        <div class="iconbox-icon-wrap">
                                            <div class="iconbox-icon-container inline-flex mb-25 text-74 text-slate-600">
                                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z" /></svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading text-15 font-semibold leading-20 mb-10">Visit App Store </h3>
                                            <p class="text-14">Download for iOS Devices</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-25percent flex justify-center transition-all sm:w-50percent">
                                <div class="lqd-iconbox-scale w-full flex flex-wrap justify-center py-30">
                                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center text-center">
                                        <div class="iconbox-icon-wrap">
                                            <div class="iconbox-icon-container inline-flex mb-25 text-74 text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor"><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h3 class="lqd-iconbox-heading text-15 font-semibold leading-20 mb-10">Telegram Channel </h3>
                                            <p class="text-14">Join the Community</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Testimonials -->

            <!-- Start contact Us -->
            <section class="lqd-section contact-us py-80 bg-transparent" id="contact" style="background-image: linear-gradient(180deg, #35575C 0%, #334B62 100%);" data-custom-animations="true" data-ca-options='{"animationTarget": ".module-first, .module-last", "ease" : ["power4.out"], "initValues": {"y": "30px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                <div class="lqd-shape lqd-shape-top module-shape-1" data-negative="false">
                    <svg class="lqd-custom-shape h-full left-50percent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
                        <path class="lqd-shape-fill" data-name="Row Separator" d="M1440,0Q1080,99,720,99T0,0V100H1440Z" fill="#fff" id="Row_Separator-2" />
                    </svg>
                </div>
                <div class="lqd-shape lqd-shape-bottom rotate-180 module-shape-2" data-negative="false">
                    <svg class="lqd-custom-shape h-250 left-50percent" fill="none" height="461" viewBox="0 0 1440 461" width="1440" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path class="lqd-shape-fill" d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z" fill-opacity=".09" fill="#FFFFFF00">
                            <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s" values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z"></animate>
                        </path>
                        <path class="lqd-shape-fill opacity-100" d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z" fill-opacity="1" fill="#FFFFFF0F">
                            <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="8s" values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"></animate>
                        </path>
                        <path class="lqd-shape-fill opacity-100" d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z" fill-opacity="1" fill="#FFFFFF0D">
                            <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s" values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"></animate>
                        </path>
                        <path class="lqd-shape-fill opacity-100" d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z" fill-opacity="1" fill="#FFFFFF1A">
                            <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s" values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"></animate>
                        </path>
                    </svg>
                </div>
                <div class="container">
                    <div class="row items-center">
                        <div class="module-first w-50percent flex flex-col items-start pr-15percent lg:w-45percent sm:w-full " data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, h2, h6, p, .btn", "duration" : 750, "delay" : 55, "ease": "expo.out", "initValues": {"y": "70px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative mb-15 py-5 px-15 rounded-100 bg-white-10">
                                <h6 class="ld-fh-element m-0 inline-block relative text-12 font-bold uppercase tracking-1 text-slate-200">Contact us</h6>
                            </div>
                            <div class="ld-fancy-heading relative">
                                <h2 class="ld-fh-element mb-0/75em inline-block relative text-34 text-white">
                                    <span class="text-gray-200">Ready to get started?</span>
                                    <br>
                                    <span> Let's chat.</span>
                                </h2>
                            </div>
                            <div class="w-full max-w-full flex flex-col items-start transition-all rounded-12 bg-blue-500">
                                <div class="w-full rounded-12 rounded-bottom-0 animation-element">
                                    <div class="ld-gmap-container relative h-130">
                                        <div class="ld-gmap w-full h-full" data-plugin-map="true" data-plugin-options='{"style": "wy", "address": "7420 Shore Rd, Brooklyn, NY 11209, USA", "marker_style": "html", "markers" : null, "map": {"zoom" : 16, "mapTypeId": "roadmap", "zoomControl": true}}'></div>
                                    </div>
                                </div>
                                <div class="ld-fancy-heading relative mt-20 mx-30 mb-0">
                                    <p class="ld-fh-element mb-0/5em inline-block relative text-slate-200">3rd Street, London, UK</p>
                                </div>
                                <div class="ld-fancy-heading relative mx-30">
                                    <p class="ld-fh-element mb-0/5em inline-block relative text-slate-200">+ 1 223 38 87&nbsp;&nbsp;&nbsp;&nbsp;info.liquid.com</p>
                                </div>
                                <a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mx-30 mb-25 text-white" target="_blank">
                                    <span class="btn-txt" data-text="Show on map">Show on map</span>
                                    <span class="btn-icon">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                    <span class="btn-icon">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="module-last w-50percent flex flex-col border-1 border-white-10 rounded-20 transition-all py-30 px-35 lg:w-55percent sm:w-full animation-element" data-custom-animations="true" data-ca-options='{"animationTarget": "h3, .lqd-contact-form", "duration" : 750, "startDelay" : 500, "delay" : 55, "ease": "expo.out", "initValues": {"y": "50px", "scaleX" : 0.5, "scaleY" : 0.5, "opacity" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                            <div class="ld-fancy-heading relative">
                                <h3 class="ld-fh-element mb-0/65em inline-block relative text-white">Send a message</h3>
                            </div>
                            <div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-button-block">
                                <div role="form" lang="en-US">
                                    <div class="screen-reader-response absolute overflow-hidden p-0 border-0">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    </div>
                                    <form action="./css/hub5/php/mailer.php" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
                                        <div class="row -mr-15 -ml-15">
                                            <div class="col col-12 col-md-6 px-15">
                                                <span class="lqd-form-control-wrap" data-name="name">
                                                    <input class="lqd-cf-form-control text-white-80 border-1 border-white-10 bg-transparent px-2em" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Full name">
                                                </span>
                                            </div>
                                            <div class="col col-12 col-md-6 px-15">
                                                <span class="lqd-form-control-wrap" data-name="email">
                                                    <input class="lqd-cf-form-control text-white-80 border-1 border-white-10 bg-transparent px-2em" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email Address">
                                                </span>
                                            </div>
                                            <div class="col col-12 col-md-6 px-15">
                                                <span class="lqd-form-control-wrap bg-transparent text-white-80 border-1 border-white-10 rounded-100 pl-2em" data-name="subject">
                                                    <select name="subject" class="wpcf7-form-control text-black" aria-required="true" aria-invalid="false">
                                                        <option value="Subject">Subject</option>
                                                        <option value="Subject 1">Subject 1</option>
                                                        <option value="Subject 2">Subject 2</option>
                                                        <option value="Subject 3">Subject 3</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="col col-12 col-md-6 px-15">
                                                <span class="lqd-form-control-wrap bg-transparent text-white-80 border-1 border-white-10 rounded-100 pl-2em" data-name="subject2">
                                                    <select name="subject2" class="wpcf7-form-control text-black" aria-required="true" aria-invalid="false">
                                                        <option value="Your budget">Your budget</option>
                                                        <option value="&lt; 1000">&lt; 1000</option>
                                                        <option value="&lt; 2000">&lt; 2000</option>
                                                        <option value="&lt; 3000">&lt; 3000</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="col col-12 px-15">
                                                <span class="lqd-form-control-wrap" data-name="message">
                                                    <textarea class="text-white-80 border-1 border-white-10 bg-transparent px-2em" name="message" cols="10" rows="4" aria-required="true" aria-invalid="false" placeholder="Your message"></textarea>
                                                </span>
                                            </div>
                                            <div class="col col-12 text-white-50 px-15">
                                                <span class="lqd-form-control-wrap" data-name="acceptance">
                                                    <span class="lqd-cf-form-control lqd-cf-acceptance">
                                                        <span class="lqd-cf-list-item">
                                                            <label class="mb-5">
                                                                <input class="border-white-10 text-white-80" type="checkbox" name="your-acceptance" value="1" aria-invalid="false">
                                                                <span class="lqd-cf-list-item-label">I am bound by the terms of the Service I accept Privacy Policy</span>
                                                            </label>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="col col-12 px-15">
                                                <input type="submit" value="get a quote" class="lqd-cf-form-control has-spinner lqd-cf-submit">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="lqd-cf-response-output"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- End contact Us -->
</div
@endsection
