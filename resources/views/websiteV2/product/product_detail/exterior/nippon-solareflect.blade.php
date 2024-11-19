@extends('webv2-layout')

@section('css')
<link rel="stylesheet" href="./css/hub5/css/demo/start-hub-5/start-hub-5-start.css">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<style>

</style>
@endsection

@section('js_vendor')
@include('websiteV2.product.js')

@endsection

@section('js_page')

@endsection
@include('websiteV2.product.product_detail.css')
@section('content')
<div id="lqd-contents-wrap">
    <div class="titlebar-inner">
        <div class="container titlebar-container mt-100">
            <div class="row titlebar-container justify-center">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                    {{-- <p class="leading-20 text-gray-400">Our Project Reference</p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="center-body">
        <div class="row">
            <div class="col col-4">
                <img src="{{ url('webv2/images/product/solarreflect.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/exterior/solareflect-kh.pdf" download="Nippon SolaReflect" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/exterior/solareflect.pdf" download="Nippon SolaReflect" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Sola Reflect</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Nippon Solareflect is an elastomeric cool paint system that reflects a large amount of solar energy from the sun. It can reflect more solar energy and reduces the surface temperature by up to 5°C*. This special property can lower heat build-up and subsequently decreases the energy needed for air-conditioning.
                    The Nippon Solareflect technology enables us to offer a wide range of fashionable colours for design and decoration, now houses don’t have to be white to be cool!
                </h6>
                <h4 class="mt-50">1.Nippon Solareflect Features</h4>
                <ul style="line-height:25px">
                    <li>High solar energy reflection, less heat build-up results in lesser.</li>
                    <li>power consumption for air-conditioning – energy saving.</li>
                    <li>Excellent weather resistance.</li>
                    <li>Long lasting colours.</li>
                    <li>Excellent dirt pick-up resistance.</li>
                    <li>Elastic and flexible – covers hairline cracks.</li>
                    <li>Excellent washability.</li>
                    <li>Excellent resistance to alkali and efflorescence.</li>
                    <li>Non-toxic, does not contain lead, mercury and heavy metals.</li>
                    <li>Anti-fungus and anti-algal properties.</li>
                    <li>Environmentally friendly paint certified under the Singapore.</li>
                    <li>Green Building Product Certification Scheme.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Solareflect</h4>
                <ul style="line-height:25px">
                    <li>masonry wall surfaces.</li>
                    <li>cement.</li>
                    <li>plastered wall.</li>
                    <li>Brickwork.</li>
                    <li>Warehouse.</li>
                    <li>Factory.</li>
                    <li>Cold storage room.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
