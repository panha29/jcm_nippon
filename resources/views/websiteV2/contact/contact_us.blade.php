@extends('webv2-layout')
@section('css')
    <link rel="stylesheet" href="./css/hub5/css/demo/start-hub-5/start-hub-5-about.css">
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

<div id="lqd-contents-wrap ">
    <div class="titlebar-inner">
        <div class="container titlebar-container mt-100">
            <div class="row titlebar-container justify-center">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                    <h1>About</h1>
                    <p class="leading-20 text-gray-400">unleashing our clients’ potential by maximising the innovation.​</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Tab Box -->
    <section class="lqd-section tab-box bg-white transition-all py-50" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
        <div class="container animation-element">
            <div class="row justify-center">
                <div class="col col-12 col-xl-6">
                    <h2 class="ld-fh-element relative mb-0/5em text-40"> History</h2>
                    <p class="ld-fh-element relative mb-2/25em"> Nippon Paint Holdings Co., Ltd. (日本ペイントホールディングス株式会社, Nippon Peinto Hōrudingusu Kabushiki-gaisha) is a Japanese paint and paint products manufacturing company.</p>
                    <div class="accordion accordion-sm accordion-side-spacing accordion-title-round accordion-expander-lg accordion-active-has-fill" id="accordion-bg-title" role="tablist" aria-multiselectable="true">
                        <div class="accordion-item mb-20 panel animation-element active">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-1">
                                    <a class="py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <span class="accordion-title-txt col-8">Nippon Paint 1881</span>
                                        <img src="webv2/images/1881.png" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img">
                                        <span class="accordion-expander text-22 col-1">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse show" id="collapse-1" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-1">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">founded in Tokyo, Japan, as the
                                        pioneer first paint plant in Japan</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-2">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        <span class="accordion-title-txt col-8">Nippon Paint 1962</span>
                                        <img src="webv2/images/1962v1.jpg" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-2" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-2">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">took its first step toward globalization when it set up a joint venture in Singapore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt col-8">Nippon Paint 1998</span>
                                        <img src="webv2/images/1998v1.jpg" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-3" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">Private.,Ltd. Was officially established in Phnom Penh, Cambodia and fully operational.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt col-8">Nippon Paint 2021</span>
                                        <img src="webv2/images/npp.png" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img new-logo">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-4" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">With our 56 manufacturing facilities, we produce close to 1 Billion Liters of Coating annually and have employed 17,000 Workforces</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt col-8">Nippon Paint 2022</span>
                                        <img src="webv2/images/npp.png" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img new-logo">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse mb-20 collapse" id="collapse-5" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">was listed as the number 3 in the world and stand as number 1 in Asia for many years now base on Orr and Boss Consulting Incorporated. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                        <span class="accordion-title-txt col-8">JCMNIPPON Private.,Ltd 2023</span>
                                        <img src="webv2/images/2024.png" width="75" style="margin-left: auto" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="logo-img new-logo1">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-6" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">had added Selleys, an international brand from Australia with over 80 years of experience in adhesives, sealants, fillers, and paint preparation products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-6 p-0">
                    <div class="w-full relative flex items-center p-20 rounded-8 z-1 module-col" data-parallax="true" data-parallax-options='{"ease":["linear"],"start":"top bottom","end":"bottom+=0px top"}' data-parallax-from='{"y":"60px"}' data-parallax-to='{"y":"-75px"}'>
                        <div class="lqd-imggrp-single block pos-rel rounded-inherit" data-shadow-style="4" >
                            <div class="lqd-imggrp-img-container inline-flex pos-rel items-center justify-center rounded-inherit">
                                <figure class="w-full pos-rel">
                                    <img class="rounded-inherit" width="592" height="674" src="webv2/images/nppbuilding.jpg" alt="has accordion">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tab Box -->

	<!-- Start Tab Box -->
    <section class="lqd-section tab-box bg-white transition-all" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
        <div class="container animation-element">
            <div class="row justify-center">
                <div class="col col-12 col-md-10 col-lg-8 text-center pb-50 pt-20">
                    <div class="ld-fancy-heading relative">
                        <h2 class="ld-fh-element mb-0/5em inline-block relative ld-gradient-heading lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover text-44 bg-transparent" data-inview="true" data-transition-delay="true" data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}' style="background-image: linear-gradient(250deg, #f24444  0%, #ff0303  100%);">
                            <span>Contact</span>
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Us.</span>
                                <span class="lqd-highlight-inner h-20 -bottom-5 left-0 bg-slate-100"></span>
                            </mark>
                        </h2>
                    </div>
                    <div class="px-10percent ld-fancy-heading relative">
                        <p class="ld-fh-element mb-0/5em inline-block relative text-18">Use customer data to build great and solid product experiences that convert.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xl-4 col-12 mb-30 sm:py-0">
                        <div class="iconbox flex flex-grow-1 relative items-center iconbox-custombg animation-element">
                            <div class="iconbox-icon-wrap mr-60">
                                <div class="iconbox-icon-container relative z-1 m-0 w-55 h-55 text-primary text-54">
                                    <span class="icon-custom-bg">
                                        <svg class="w-145" viewBox="0 0 200 200">
                                            <path fill="#F2F4F8" d="M54.4, -27.6C66, -11.2, 68, 14.6, 57.3, 31.9C46.6, 49.1, 23.3, 57.8, -0.3, 58C-23.9, 58.2, -47.9, 49.8, -55.4, 34.4C-63, 18.9, -54.2, -3.6, -42.2, -20.3C-30.3, -36.9, -15.1, -47.6, 3.1, -49.3C21.3, -51.1, 42.7, -44.1, 54.4, -27.6Z" transform="translate(100 100)"></path>
                                        </svg>
                                    </span>
                                    <svg class="w-1em h-auto" height="512" viewBox="0 0 24 24" width="512">
                                        <linearGradient id="gradient_ice-a" gradientUnits="userSpaceOnUse" x1="-9.983" x2="58.65" y1="69.729" y2="7.571">
                                            <stop offset="0" stop-color="#fff200"></stop>
                                            <stop offset="1" stop-color="#cd118c"></stop></linearGradient>
                                            <linearGradient id="gradient_ice-2" x1="-6.016" x2="62.616" xlink:href="#gradient_ice-a" y1="74.109" y2="11.951"></linearGradient>
                                            <linearGradient id="gradient_ice-3" x1="-6.786" x2="61.847" xlink:href="#gradient_ice-a" y1="73.259" y2="11.101"></linearGradient>
                                            <linearGradient id="gradient_ice-4" x1="-4.101" x2="64.531" xlink:href="#gradient_ice-a" y1="76.223" y2="14.066"></linearGradient>
                                            <linearGradient id="gradient_ice-5" x1=".631" x2="69.263" xlink:href="#gradient_ice-a" y1="81.448" y2="19.29"></linearGradient>
                                            <linearGradient id="gradient_ice-6" x1="-1.66" x2="66.972" xlink:href="#gradient_ice-a" y1="78.918" y2="16.761"></linearGradient>
                                            <linearGradient id="gradient_ice-7" x1="1.494" x2="70.127" xlink:href="#gradient_ice-a" y1="82.401" y2="20.244"></linearGradient>
                                            <g id="monitor-media-screen-Digital_Marketing" data-name="monitor-media-screen-Digital Marketing">
                                                <path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z" fill="url(#gradient_ice)"></path>
                                            </g>
                                        </svg>
                                </div>
                            </div>
                            <div class="contents">
                                <h3 class="lqd-iconbox-heading mb-0/7em text-18">Address </h3>
                                <p><b>#51, St. 271 Sangkat Phsar Derm thkov, Khan Chamkarmorn Phnom Penh, Kingdom of Cambodia.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 col-12 mb-30 sm:py-0">
                        <div class="iconbox flex flex-grow-1 relative items-center iconbox-custombg animation-element">
                            <div class="iconbox-icon-wrap mr-60">
                                <div class="iconbox-icon-container relative z-1 m-0 w-55 h-55 text-primary text-54">
                                    <span class="icon-custom-bg">
                                        <svg class="w-145" viewBox="0 0 200 200"><path fill="#F2F4F8" d="M54.4, -27.6C66, -11.2, 68, 14.6, 57.3, 31.9C46.6, 49.1, 23.3, 57.8, -0.3, 58C-23.9, 58.2, -47.9, 49.8, -55.4, 34.4C-63, 18.9, -54.2, -3.6, -42.2, -20.3C-30.3, -36.9, -15.1, -47.6, 3.1, -49.3C21.3, -51.1, 42.7, -44.1, 54.4, -27.6Z" transform="translate(100 100)"></path></svg>
                                    </span>
                                    <svg class="w-1em h-auto" height="512" viewBox="0 0 24 24" width="512">
                                        <linearGradient id="gradient_ice" gradientUnits="userSpaceOnUse" x1="-3.571" x2="55.996" y1="74.712" y2="16.44">
                                            <stop offset="0" stop-color="#fff200"></stop>
                                            <stop offset="1" stop-color="#cd118c"></stop>
                                        </linearGradient>
                                        <linearGradient id="gradient_ice-2" x1="-22.448" x2="37.12" xlink:href="#gradient_ice" y1="55.416" y2="-2.856"></linearGradient>
                                        <linearGradient id="gradient_ice-3" x1="-13.07" x2="46.498" xlink:href="#gradient_ice" y1="65.003" y2="6.73"></linearGradient>
                                        <linearGradient id="gradient_ice-4" x1="-15.069" x2="44.499" xlink:href="#gradient_ice" y1="62.959" y2="4.686"></linearGradient>
                                        <linearGradient id="gradient_ice-5" x1="-4.702" x2="54.866" xlink:href="#gradient_ice" y1="73.556" y2="15.284"></linearGradient>
                                        <linearGradient id="gradient_ice-6" x1="-3.681" x2="55.887" xlink:href="#gradient_ice" y1="74.601" y2="16.328"></linearGradient>
                                        <linearGradient id="gradient_ice-7" x1=".318" x2="59.886" xlink:href="#gradient_ice" y1="78.688" y2="20.416"></linearGradient>
                                        <linearGradient id="gradient_ice-8" x1="2.318" x2="61.886" xlink:href="#gradient_ice" y1="80.732" y2="22.46"></linearGradient>
                                        <linearGradient id="gradient_ice-9" x1="-1.681" x2="57.887" xlink:href="#gradient_ice" y1="76.644" y2="18.372"></linearGradient>
                                        <linearGradient id="gradient_ice-10" x1="-15.113" x2="44.455" xlink:href="#gradient_ice" y1="62.914" y2="4.642"></linearGradient>
                                        <linearGradient id="gradient_ice-11" x1="-7.147" x2="52.421" xlink:href="#gradient_ice" y1="71.057" y2="12.784"></linearGradient>
                                        <g id="laptop-megaphone-file-screen-Digital_Marketing" data-name="laptop-megaphone-file-screen-Digital Marketing">
                                            <path d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z" fill="url(#gradient_ice)"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="contents">
                                <h3 class="lqd-iconbox-heading mb-0/7em text-18">Contact</h3>
                                <p><b>Fax</b><span style="margin-left:17px">:</span>&nbsp;&nbsp; 023 214 067</p>
                                <p><b>Phone</b><span>:</span>&nbsp;&nbsp;  011 822 266</p>
                                <p style="margin-left: 53px;">&nbsp; 011 907 902</p>
                                <p><b>Tel</b><span style="margin-left: 25px;">:</span>&nbsp;&nbsp;  023 211 854</p>
                                <p style="margin-left: 54px;">&nbsp; 023 994 567</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 col-12 mb-30 sm:py-0">
                        <div class="iconbox flex flex-grow-1 relative items-center iconbox-custombg animation-element">
                            <div class="iconbox-icon-wrap mr-60">
                                <div class="iconbox-icon-container relative z-1 m-0 w-55 h-55 text-primary text-54">
                                    <span class="icon-custom-bg">
                                        <svg class="w-145" viewBox="0 0 200 200"><path fill="#F2F4F8" d="M54.4, -27.6C66, -11.2, 68, 14.6, 57.3, 31.9C46.6, 49.1, 23.3, 57.8, -0.3, 58C-23.9, 58.2, -47.9, 49.8, -55.4, 34.4C-63, 18.9, -54.2, -3.6, -42.2, -20.3C-30.3, -36.9, -15.1, -47.6, 3.1, -49.3C21.3, -51.1, 42.7, -44.1, 54.4, -27.6Z" transform="translate(100 100)"></path></svg>
                                    </span>
                                    <svg class="w-1em h-auto" height="512" viewBox="0 0 24 24" width="512" style="margin-left: 7px;">
                                        <linearGradient id="gradient_ice" gradientUnits="userSpaceOnUse" x1="2.719" x2="59.655" y1="58.57" y2="6.906">
                                            <stop offset="0" stop-color="#fff200"></stop>
                                            <stop offset="1" stop-color="#cd118c"></stop>
                                        </linearGradient>
                                        <linearGradient id="gradient_ice-2" x1="23.104" x2="80.04" xlink:href="#gradient_ice" y1="81.035" y2="29.371"></linearGradient>
                                        <linearGradient id="gradient_ice-3" x1="20.035" x2="76.971" xlink:href="#gradient_ice" y1="77.653" y2="25.989"></linearGradient>
                                        <linearGradient id="gradient_ice-4" x1="-20.016" x2="36.92" xlink:href="#gradient_ice" y1="33.515" y2="-18.149"></linearGradient>
                                        <linearGradient id="gradient_ice-5" x1="-18.21" x2="38.726" xlink:href="#gradient_ice" y1="35.505" y2="-16.159"></linearGradient>
                                        <linearGradient id="gradient_ice-6" x1="-16.404" x2="40.532" xlink:href="#gradient_ice" y1="37.496" y2="-14.168"></linearGradient>
                                        <linearGradient id="gradient_ice-7" x1="2.028" x2="58.964" xlink:href="#gradient_ice" y1="57.808" y2="6.144"></linearGradient>
                                        <linearGradient id="gradient_ice-8" x1="-8.441" x2="48.495" xlink:href="#gradient_ice" y1="46.271" y2="-5.393"></linearGradient>
                                        <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" fill="url(#gradient_ice)"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="contents">
                                <h3 class="lqd-iconbox-heading mb-0/7em text-18">Email</h3>
                                <a href="mailto:info@jcmnippon.com"><br>info@jcmnippon.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 py-0">
                    <div class="flex justify-center">
                        <div class="lqd-tabs lqd-tabs-style-13 flex lqd-tabs-nav-items-not-expanded flex-row-reverse lqd-nav-underline-" data-tabs-options='{"trigger": "click"}'>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15637.1073596482!2d104.92720480000001!3d11.53198785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511c5ffc60ab%3A0xabbabcf6bf4c8113!2sJCMNippon%20Private%20Ltd.!5e0!3m2!1sen!2skh!4v1730449635207!5m2!1sen!2skh" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Tab Box -->
    <!-- Start Faq -->
    {{-- <section class="lqd-section faq bg-white transition-all pt-50 pb-90">
        <div class="container">
            <div class="row">
                <div class="col col-12 text-center">
                    <div class="mb-25 lqd-imggrp-single block relative">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img width="54" height="54" src="./css/hub5/images/demo/start-hub-5/about/shape-Message-1.svg" alt="message icon">
                            </figure>
                        </div>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <h2 class="ld-fh-element mb-0/5em inline-block relative text-slate-600">Frequently Asked Questions</h2>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <p class="ld-fh-element mb-0/5em inline-block relative text-18 text-text">Use customer data to build great and solid product experiences that convert.</p>
                    </div>
                </div>
                <div class="col col-12 p-0">
                    <section class="lqd-section mt-60">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 col-md-6 p-30 md:pl-0 md:pr-0">
                                    <div class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill" id="accordion-question-parent-1" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item panel mb-20 active">
                                            <div class="accordion-heading" role="tab" id="heading-tab-1">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-1" aria-expanded="true" aria-controls="collapse-question-tab-1">
                                                        <span class="accordion-title-txt col-8">End-to-end encryption for iOS Devices</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-1" class="accordion-collapse collapse show" role="tabpanel" aria-labelledby="heading-tab-1" data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-2">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-2" aria-expanded="false" aria-controls="collapse-question-tab-2">
                                                        <span class="accordion-title-txt col-8">Sending media, location and contacts</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-2" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-2" data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-3">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-3" aria-expanded="false" aria-controls="collapse-question-tab-3">
                                                        <span class="accordion-title-txt col-8">Get insights on key metrics time</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-3" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-3" data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel">
                                            <div class="accordion-heading" role="tab" id="heading-tab-4">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-4" aria-expanded="false" aria-controls="collapse-question-tab-4">
                                                        <span class="accordion-title-txt col-8">Calling unavailable in some countries</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-4" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-4" data-bs-parent="#accordion-question-parent-1">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 p-30 md:pl-0 md:pr-0">
                                    <div class="accordion accordion-md accordion-side-spacing accordion-title-circle accordion-expander-lg accordion-active-has-shadow accordion-active-has-fill" id="accordion-question-parent-2" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-5">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-5" aria-expanded="false" aria-controls="collapse-question-tab-5">
                                                        <span class="accordion-title-txt col-8">Google mobile can monetize your app</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-5" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-5" data-bs-parent="#accordion-question-parent-2">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel mb-20">
                                            <div class="accordion-heading" role="tab" id="heading-tab-6">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-6" aria-expanded="false" aria-controls="collapse-question-tab-6">
                                                        <span class="accordion-title-txt col-8">How to restore your chat history?</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-6" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-6" data-bs-parent="#accordion-question-parent-2">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item panel">
                                            <div class="accordion-heading" role="tab" id="heading-tab-7">
                                                <h4 class="accordion-title">
                                                    <a class="collapsed text-16 leading-2em bg-gray-100 " role="button" data-bs-toggle="collapse" href="#collapse-question-tab-7" aria-expanded="false" aria-controls="collapse-question-tab-7">
                                                        <span class="accordion-title-txt col-8">Problems sending or receiving messages</span>
                                                        <span class="text-22 text-brown-500 accordion-expander">
                                                            <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                                            <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                                        </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-question-tab-7" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-tab-7" data-bs-parent="#accordion-question-parent-2">
                                                <div class="text-15 accordion-content">Content-focused grid designs, unique social elements, post-sharing function, author exposure, sticky newsletter. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col col-12">
                    <div class="flex flex-wrap justify-center items-center pt-30">
                        <div class="mr-25 px-15 rounded-100 bg-brown-300 ld-fancy-heading relative">
                            <p class="text-15 font-normal text-brown-500 m-0 ld-fh-element relative">Contact</p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="text-15 m-0 ld-fh-element relative">Looking for a corporate solution? <a href="#" class="underline">Contact us.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Faq -->
    <br>
    <br>
</div>
@endsection
