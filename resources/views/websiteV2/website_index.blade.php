@php
    $html_tag_data = [];
    $title = 'Dashboards';
    $description = 'Dashboard pages contains different layouts to provide stats, graphics, listings, categories, banners and so on. They have various implementations of plugins such as Datatables, Chart.js, Glide.js and Plyr.js with alternative extensions.';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')


@endsection

@section('js_page')

@endsection

@section('content')
<div id="lqd-contents-wrap">

@include('websiteV2.banner')

    <!-- Start Services -->
    <section class="lqd-section services pt-50" id="services" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "60px", "rotationZ" : 5, "opacity" : 0, "transformOrigin": "50% 50% 120px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity" : 1, "transformOrigin": "50% 50% 0px"}}'>
        <div class="container">
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
                                <svg class="w-1em h-auto" height="512" viewBox="0 0 64 64" width="512"><linearGradient id="gradient_ice-a" gradientUnits="userSpaceOnUse" x1="-9.983" x2="58.65" y1="69.729" y2="7.571"><stop offset="0" stop-color="#fff200"></stop><stop offset="1" stop-color="#cd118c"></stop></linearGradient><linearGradient id="gradient_ice-2" x1="-6.016" x2="62.616" xlink:href="#gradient_ice-a" y1="74.109" y2="11.951"></linearGradient><linearGradient id="gradient_ice-3" x1="-6.786" x2="61.847" xlink:href="#gradient_ice-a" y1="73.259" y2="11.101"></linearGradient><linearGradient id="gradient_ice-4" x1="-4.101" x2="64.531" xlink:href="#gradient_ice-a" y1="76.223" y2="14.066"></linearGradient><linearGradient id="gradient_ice-5" x1=".631" x2="69.263" xlink:href="#gradient_ice-a" y1="81.448" y2="19.29"></linearGradient><linearGradient id="gradient_ice-6" x1="-1.66" x2="66.972" xlink:href="#gradient_ice-a" y1="78.918" y2="16.761"></linearGradient><linearGradient id="gradient_ice-7" x1="1.494" x2="70.127" xlink:href="#gradient_ice-a" y1="82.401" y2="20.244"></linearGradient><g id="monitor-media-screen-Digital_Marketing" data-name="monitor-media-screen-Digital Marketing"><path d="m59 14h-30.98l.96-4.8a.99.99 0 0 0 -.21-.83.971.971 0 0 0 -.77-.37h-4a1 1 0 0 0 -1 1v2h-2v-2a1 1 0 0 0 -1-1h-4a1 1 0 0 0 -1 1v2h-2v-2a1 1 0 0 0 -1-1h-4a.971.971 0 0 0 -.77.37.99.99 0 0 0 -.21.83l.96 4.8h-2.98a3.009 3.009 0 0 0 -3 3v32a3.009 3.009 0 0 0 3 3h23v4h-6a1 1 0 0 0 -1 1v4a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1v-4a1 1 0 0 0 -1-1h-6v-4h23a3.009 3.009 0 0 0 3-3v-32a3.009 3.009 0 0 0 -3-3zm-48-4v2a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-2h2v2a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-2h1.78l-.8 4h-10.98v2h10.58l-.4 2h-14.36l-.4-2h2.58v-2h-2.98l-.8-4zm14 28h-14v-2h14zm2 2v2h-18v-2zm-13.94-6 .88-14h8.12l.88 14zm27.94 24v2h-18v-2zm-11-2v-4h4v4zm30-7a1 1 0 0 1 -1 1h-54a1 1 0 0 1 -1-1v-1h56zm0-3h-56v-29a1 1 0 0 1 1-1h3.38l.64 3.2a1 1 0 0 0 .98.8h1.94l-.88 14h-1.06a1 1 0 0 0 -1 1v3h-1a1 1 0 0 0 -1 1v4a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1v-4a1 1 0 0 0 -1-1h-1v-3a1 1 0 0 0 -1-1h-1.06l-.88-14h1.94a1 1 0 0 0 .98-.8l.64-3.2h31.38a1 1 0 0 1 1 1z" fill="url(#gradient_ice)"></path><path d="m36 36h20a1 1 0 0 0 1-1v-16a1 1 0 0 0 -1-1h-20a1 1 0 0 0 -1 1v16a1 1 0 0 0 1 1zm1-16h18v14h-18z" fill="url(#gradient_ice-2)"></path><path d="m50.5 26.132-7-4a1 1 0 0 0 -1.5.868v8a1 1 0 0 0 1.5.868l7-4a1 1 0 0 0 0-1.736zm-6.5 3.145v-4.554l3.984 2.277z" fill="url(#gradient_ice-3)"></path><path d="m35 38h4v2h-4z" fill="url(#gradient_ice-4)"></path><path d="m41 38h13v2h-13z" fill="url(#gradient_ice-5)"></path><path d="m35 42h6v2h-6z" fill="url(#gradient_ice-6)"></path><path d="m43 42h4v2h-4z" fill="url(#gradient_ice-7)"></path></g></svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading mb-0/7em text-18">Painting Services </h3>
                            <p>Experiencing house painter with many years of work.</p>
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
                                <svg class="w-1em h-auto" height="512" viewBox="0 0 64 64" width="512"><linearGradient id="gradient_ice" gradientUnits="userSpaceOnUse" x1="-3.571" x2="55.996" y1="74.712" y2="16.44"><stop offset="0" stop-color="#fff200"></stop><stop offset="1" stop-color="#cd118c"></stop></linearGradient><linearGradient id="gradient_ice-2" x1="-22.448" x2="37.12" xlink:href="#gradient_ice" y1="55.416" y2="-2.856"></linearGradient><linearGradient id="gradient_ice-3" x1="-13.07" x2="46.498" xlink:href="#gradient_ice" y1="65.003" y2="6.73"></linearGradient><linearGradient id="gradient_ice-4" x1="-15.069" x2="44.499" xlink:href="#gradient_ice" y1="62.959" y2="4.686"></linearGradient><linearGradient id="gradient_ice-5" x1="-4.702" x2="54.866" xlink:href="#gradient_ice" y1="73.556" y2="15.284"></linearGradient><linearGradient id="gradient_ice-6" x1="-3.681" x2="55.887" xlink:href="#gradient_ice" y1="74.601" y2="16.328"></linearGradient><linearGradient id="gradient_ice-7" x1=".318" x2="59.886" xlink:href="#gradient_ice" y1="78.688" y2="20.416"></linearGradient><linearGradient id="gradient_ice-8" x1="2.318" x2="61.886" xlink:href="#gradient_ice" y1="80.732" y2="22.46"></linearGradient><linearGradient id="gradient_ice-9" x1="-1.681" x2="57.887" xlink:href="#gradient_ice" y1="76.644" y2="18.372"></linearGradient><linearGradient id="gradient_ice-10" x1="-15.113" x2="44.455" xlink:href="#gradient_ice" y1="62.914" y2="4.642"></linearGradient><linearGradient id="gradient_ice-11" x1="-7.147" x2="52.421" xlink:href="#gradient_ice" y1="71.057" y2="12.784"></linearGradient><g id="laptop-megaphone-file-screen-Digital_Marketing" data-name="laptop-megaphone-file-screen-Digital Marketing"><path d="m61 51h-1v-29a3.009 3.009 0 0 0 -3-3h-2v-6h5a1 1 0 0 0 1-1v-5a4 4 0 0 0 -4-4h-35a5 5 0 0 0 -5 5v11h-10a3.009 3.009 0 0 0 -3 3v29h-1a1 1 0 0 0 -1 1v6a3.009 3.009 0 0 0 3 3h54a3.009 3.009 0 0 0 3-3v-6a1 1 0 0 0 -1-1zm-6-44a2 2 0 0 1 4 0v4h-4zm-36 1a3.009 3.009 0 0 1 3-3h31.56a3.906 3.906 0 0 0 -.56 2v40h-34v-3a.989.989 0 0 0 .99-.89l.9-8.09 13.77 4.92a.994.994 0 0 0 1.34-.94v-6h1a3 3 0 0 0 0-6h-1v-6a1.014 1.014 0 0 0 -.42-.82 1.035 1.035 0 0 0 -.92-.12l-13.83 4.94h-1.83zm3 25.29v-6.58l12-4.29v15.16zm14-2.29v-2h1a1 1 0 0 1 0 2zm-16-4v6h-6v-6zm-1.12 8-.78 7h-2.1v-7zm-12.88-13a1 1 0 0 1 1-1h10v4h-4a1 1 0 0 0 -1 1v.22l-3.24.81a1 1 0 0 0 -.76.97v4a1 1 0 0 0 .76.97l3.24.81v.22a1 1 0 0 0 1 1h1v8a1 1 0 0 0 1 1h2v4a1 1 0 0 0 1 1h36a1 1 0 0 0 1-1v-27h2a1 1 0 0 1 1 1v29h-52zm6 6.28v3.44l-2-.5v-2.44zm24 24.72v2h-8v-2zm24 5a1 1 0 0 1 -1 1h-54a1 1 0 0 1 -1-1v-5h22v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3h22z" fill="url(#gradient_ice)"></path><path d="m22 8h6v2h-6z" fill="url(#gradient_ice-2)"></path><path d="m22 16h28v2h-28z" fill="url(#gradient_ice-3)"></path><path d="m22 12h28v2h-28z" fill="url(#gradient_ice-4)"></path><path d="m46 21h4v2h-4z" fill="url(#gradient_ice-5)"></path><path d="m42 25h8v2h-8z" fill="url(#gradient_ice-6)"></path><path d="m42 33h8v2h-8z" fill="url(#gradient_ice-7)"></path><path d="m42 37h8v2h-8z" fill="url(#gradient_ice-8)"></path><path d="m42 29h8v2h-8z" fill="url(#gradient_ice-9)"></path><path d="m30 8h20v2h-20z" fill="url(#gradient_ice-10)"></path><path d="m42 21h2v2h-2z" fill="url(#gradient_ice-11)"></path></g></svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading mb-0/7em text-18">Color Scheme Service</h3>
                            <p>Creating perfect color based of your choice.</p>
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
                                <svg class="w-1em h-auto" height="512" viewBox="0 0 64 64" width="512"><linearGradient id="gradient_ice" gradientUnits="userSpaceOnUse" x1="2.719" x2="59.655" y1="58.57" y2="6.906"><stop offset="0" stop-color="#fff200"></stop><stop offset="1" stop-color="#cd118c"></stop></linearGradient><linearGradient id="gradient_ice-2" x1="23.104" x2="80.04" xlink:href="#gradient_ice" y1="81.035" y2="29.371"></linearGradient><linearGradient id="gradient_ice-3" x1="20.035" x2="76.971" xlink:href="#gradient_ice" y1="77.653" y2="25.989"></linearGradient><linearGradient id="gradient_ice-4" x1="-20.016" x2="36.92" xlink:href="#gradient_ice" y1="33.515" y2="-18.149"></linearGradient><linearGradient id="gradient_ice-5" x1="-18.21" x2="38.726" xlink:href="#gradient_ice" y1="35.505" y2="-16.159"></linearGradient><linearGradient id="gradient_ice-6" x1="-16.404" x2="40.532" xlink:href="#gradient_ice" y1="37.496" y2="-14.168"></linearGradient><linearGradient id="gradient_ice-7" x1="2.028" x2="58.964" xlink:href="#gradient_ice" y1="57.808" y2="6.144"></linearGradient><linearGradient id="gradient_ice-8" x1="-8.441" x2="48.495" xlink:href="#gradient_ice" y1="46.271" y2="-5.393"></linearGradient><path d="m61.965 39.737-3-11a1 1 0 0 0 -.965-.737h-2v-23a1 1 0 0 0 -1-1h-52a1 1 0 0 0 -1 1v46a1 1 0 0 0 1 1h25v7a1 1 0 0 0 1 1h32a1 1 0 0 0 1-1v-19a1.016 1.016 0 0 0 -.035-.263zm-2.274-.737h-13.691v-9h11.236zm-29.382 0 2.455-9h11.236v9zm10.691 2h8v4.131l-1.445-.963a1 1 0 0 0 -1.262.125l-1.293 1.293-1.293-1.293a1 1 0 0 0 -1.262-.125l-1.445.963zm-37-35h50v6h-50zm0 44v-36h50v14h-22a1 1 0 0 0 -.965.737l-3 11a1.016 1.016 0 0 0 -.035.263v10zm26 8v-17h9v6a1 1 0 0 0 1.555.832l2.318-1.545 1.42 1.42a1 1 0 0 0 1.414 0l1.42-1.42 2.318 1.545a1 1 0 0 0 1.555-.832v-6h9v17z" fill="url(#gradient_ice)"></path><path d="m57 50h-6a1 1 0 0 0 -1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0 -1-1zm-1 4h-4v-2h4z" fill="url(#gradient_ice-2)"></path><path d="m42 54h6v2h-6z" fill="url(#gradient_ice-3)"></path><path d="m6 8h2v2h-2z" fill="url(#gradient_ice-4)"></path><path d="m10 8h2v2h-2z" fill="url(#gradient_ice-5)"></path><path d="m14 8h2v2h-2z" fill="url(#gradient_ice-6)"></path><path d="m16 36h-2v10a1 1 0 0 0 1 1h11v-2h-10z" fill="url(#gradient_ice-7)"></path><g fill="url(#gradient_ice-8)"><path d="m24 25a9 9 0 1 0 -9 9 9.01 9.01 0 0 0 9-9zm-16 0a7 7 0 1 1 7 7 7.008 7.008 0 0 1 -7-7z"></path><path d="m16 31v-1a3 3 0 0 0 0-6h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1h2a3 3 0 0 0 -3-3v-1h-2v1a3 3 0 0 0 0 6h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 -1-1h-2a3 3 0 0 0 3 3v1z"></path></g></svg>
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="lqd-iconbox-heading mb-0/7em text-18">Computerized Color Mixing</h3>
                            <p>With modern technology, making your favorite color will more satisfies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start Portfolio -->
    <section class="lqd-section portfolio pt-150 pb-100">
        <h2 class="" style="text-align:center">Our Services</h2><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class=" lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="/webv2/images/painter.jpg" alt="Painting Services">
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg,  rgba(246,  72,  42,  0) 25%,  rgba(246,  72,  42,  0.9) 100%);"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-lqd-cogs"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Nippon Paint Cambodia</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">Painting Services</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="/webv2/images/mixer.jpg" alt="Modern Computerize Color">
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg,  rgba(192,  11,  238,  0) 25%,  rgba(192,  11,  238,  0.8) 100%);"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-lqd-presentation"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Nippon Paint Cambodia</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">Computerize Color Mixing</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class="lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="/webv2/images/colorscheme.jpg" alt="House Scheme Services">
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg,  rgba(255,  255,  255,  0) 25%,  rgba(71,  214,  126,  0.8) 100%);"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-lqd-mobile"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Nippon Paint Cambodia</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">House Scheme Services</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-xl-3 p-0 module-content">
                    <div class=" lqd-fb relative lqd-fb-style-6 rounded-4 h-pt-125 text-white" data-lqd-zindex="true">
                        <div class="lqd-fb-shadow"></div>
                        <div class="flex flex-wrap items-center lqd-overlay flex" data-hover3d="true">
                            <div class="lqd-fb-content-wrap lqd-overlay flex flex-col items-end transform-style-3d backface-hidden will-change-transform" data-stacking-factor="0.5">
                                <div class="lqd-fb-img lqd-overlay flex rounded-4 overflow-hidden backface-hidden">
                                    <figure class="w-full h-full m-0">
                                        <img class="w-full h-full objfit-cover objfit-center" src="/webv2/images/colorpallet.jpg" alt="Hundread Thousand of Color to choose">
                                    </figure>
                                    <div class="lqd-fb-bg lqd-overlay flex"></div>
                                    <div class="lqd-fb-hover-overlay lqd-overlay flex bg-transparent" style="background-image: linear-gradient(180deg,  rgba(238,  109,  11,  0) 25%,  rgb(238,  109,  1) 100%);"></div>
                                </div>
                                <div class="lqd-fb-content flex flex-col justify-end lqd-overlay flex backface-hidden py-1/5em px-1/5em">
                                    <span class="lqd-fb-icon flex mb-0/85em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-lqd-path"></i>
                                    </span>
                                    <h6 class="mt-0 mb-1/35em font-bold">Nippon Paint Cambodia</h6>
                                    <h2 class="lqd-fb__title mt-0 text-26 font-bold">Thousand of Colors to choose</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->
@include('websiteV2.professional')
@include('websiteV2.brand')
@include('websiteV2.product')
@include('websiteV2.goal')
@include('websiteV2.applicator')






    <!-- Start Counters -->
    <section class="lqd-section counters pt-70 pb-65" id="counters">
        <div class="container">
            <div class="row">
                <div class="col col-12 p-0" data-custom-animations="true" data-ca-options='{"animationTarget": "p", "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="title-container">
                        <div class="ld-fancy-heading relative text-center">
                            <p class="ld-fh-element inline-block relative mb-0/5em text-12 uppercase font-bold tracking-1 text-blue-700">Global clients around the world</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-3 p-0 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": "p, .lqd-split-chars .lqd-chars .split-inner", "ease": "power4.out", "initValues": {"y": "60px", "rotationZ" : 5, "opacity" : 0, "transformOrigin": "0% 50% 0px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity" : 1, "transformOrigin": "50% 50% 0px"}}'>
                    <div class="data-container flex flex-col items-center">
                        <div class="ld-fancy-heading relative mask-text -mb-30 module-number">
                            <p class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-chars h2 mb-0/5em font-bold" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "words, chars"}'>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">3160</span>
                                    <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                                </mark>
                            </p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative mb-0/5em text-12 uppercase font-bold tracking-1 text-blue-700">Avarage growth</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-3 p-0 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": "p, .lqd-split-chars .lqd-chars .split-inner", "startDelay" : 200, "ease": "power4.out", "initValues": {"y": "60px", "rotationZ" : 5, "opacity" : 0, "transformOrigin": "0% 50% 0px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity" : 1, "transformOrigin": "50% 50% 0px"}}'>
                    <div class="data-container flex flex-col items-center">
                        <div class="ld-fancy-heading relative mask-text -mb-30 module-number">
                            <p class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-chars h2 mb-0/5em font-bold" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "words, chars"}'>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">830</span>
                                    <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                                </mark>
                            </p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative mb-0/5em text-12 uppercase font-bold tracking-1 text-blue-700">Customer satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-3 p-0 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": "p, .lqd-split-chars .lqd-chars .split-inner", "startDelay" : 400, "ease": "power4.out", "initValues": {"y": "60px", "rotationZ" : 5, "opacity" : 0, "transformOrigin": "0% 50% 0px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity" : 1, "transformOrigin": "50% 50% 0px"}}'>
                    <div class="data-container flex flex-col items-center">
                        <div class="ld-fancy-heading relative mask-text -mb-30 module-number">
                            <p class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-chars h2 mb-0/5em font-bold" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "words, chars"}'>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">127</span>
                                    <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                                </mark>
                            </p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative mb-0/5em text-12 uppercase font-bold tracking-1 text-blue-700">Daily data input</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xl-3 p-0 text-center" data-custom-animations="true" data-ca-options='{"animationTarget": "p, .lqd-split-chars .lqd-chars .split-inner", "startDelay" : 600, "ease": "power4.out", "initValues": {"y": "60px", "rotationZ" : 5, "opacity" : 0, "transformOrigin": "0% 50% 0px"} , "animations": {"y": "0px", "rotationZ" : 0, "opacity" : 1, "transformOrigin": "50% 50% 0px"}}'>
                    <div class="data-container flex flex-col items-center">
                        <div class="ld-fancy-heading relative mask-text -mb-30 module-number">
                            <p class="ld-fh-element inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-chars h2 mb-0/5em font-bold" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "chars, words"}'>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">1134</span>
                                    <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                                </mark>
                            </p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative mb-0/5em text-12 uppercase font-bold tracking-1 text-blue-700">Hub it Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counters -->

@include('websiteV2.history')


    {{-- <!-- Start Clients -->
    <section class="lqd-section clients py-45 bg-slate-100 border-top border-bottom border-black-10 transition-all" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"scaleX" : 0.2, "scaleY" : 0.2, "opacity" : 0} , "animations": {"scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
        <div class="container">
            <div class="row items-center text-center">
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-dropcam.svg" alt="Dropcam">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-amazon.svg" alt="Amazon">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-cisco.svg" alt="Cisco">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-amd-logo.svg" alt="AMD">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center module-img animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-logitech.svg" alt="Logitech">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2 p-0">
                    <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                        <figure class="w-full relative">
                            <img src="/webv2/images/demo/digital-hub/client-Spotify.svg" alt="Spotify">
                            <a href="#" target="_blank" rel="nofollow" class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients --> --}}

    <!-- Start Contact -->
    <section class="lqd-section contact pt-75 pb-100 bg-slate-100 transition-all" id="contact">
        <div class="lqd-shape lqd-shape-bottom" data-negative="true">
            <svg class="h-80 left-0" viewbox="0 0 1000 100" preserveaspectratio="none">
                <path class="lqd-shape-fill" d="M790.5, 93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2, 1.1-22.6, 1.4-50.1, 7.4c-27.2, 6.3-58.2, 16.6-79.4, 24.7c-41.3, 15.9-94.9, 21.9-134, 22.6C72, 58.2, 0, 25.8, 0, 25.8V100h1000V65.3 c0, 0-51.5, 19.4-106.2, 25.7C839.5, 97, 814.1, 95.2, 790.5, 93.1z" fill="#fff"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-xl-6 p-0" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element,  .animation-element .split-inner", "ease": "power4.out", "initValues": {"y": "50px"} , "animations": {"y": "0px"}}'>
                    <div class="w-full flex items-center">
                        <div class="w-70percent flex flex-col items-start p-10 lg:w-full lg:text-center">
                            <div class="ld-fancy-heading relative mask-text lg:w-full animation-element">
                                <h2 class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-46" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="false" data-split-options='{"type": "lines"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Any questions à </span>
                                        <span class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"></span>
                                    </mark>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Painting?</span>
                                        <span class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"></span>
                                    </mark>
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative mask-text lg:w-full animation-element">
                                <p class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-blue-700" data-split-text="true" data-split-options='{"type": "lines"}'> Digital experiences, and print materials that communicate marketing goals.</p>
                            </div>
                        </div>
                        <div class="w-30percent flex items-center p-10 lg:hidden" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 150, "ease": "power4.out", "initValues": {"x": "-30px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                            <div class="-mr-15percent -mb-40percent -ml-15percent animation-element">
                                <div class="lqd-imggrp-single block relative perspective" data-hover3d="true" data-float="ease">
                                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                        <figure class="w-full relative" data-stacking-factor="1">
                                            <img width="308" height="552" src="/webv2/images/demo/digital-hub/shape-person.png" alt="consultaition">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-6 p-10" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element,  p,  h4", "startDelay" : 250, "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="w-full flex flex-wrap bg-white shadow-md transition-all">
                        <div class="w-50percent flex flex-col border-right border-black-10 py-30 pr-30 pl-60 sm:w-full module-white animation-element">
                            <div class="ld-fancy-heading relative">
                                <p class="ld-fh-element inline-block relative m-0 text-blue-200">For More Information</p>
                            </div>
                            <div class="ld-fancy-heading relative">
                                <h4 class="ld-fh-element inline-block relative m-0 text-20 text-blue-700">info@jcmnippon.com</h4>
                            </div>
                        </div>
                        <div class="w-50percent flex flex-col py-30 pr-30 pl-60 sm:w-full module-white animation-element">
                            <div class="ld-fancy-heading relative">
                                <p class="ld-fh-element inline-block relative m-0 text-blue-200">Consultation</p>
                            </div>
                            <div class="ld-fancy-heading relative">
                                <h4 class="ld-fh-element inline-block relative m-0 text-20 text-blue-700">+855 11 822 266
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

</div>
@endsection
