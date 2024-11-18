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
                <img src="{{ url('webv2/images/product/matexpremium.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/exterior/matex-premium-kh.pdf" download="Nippon Matex Premium" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (Kh)
                </a>
                <a href="/webv2/exterior/matex-premium.pdf" download="Nippon Matex Premium" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Matex Premium</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Nippon Matex Premium Sheen is formulated to resist cement alkali material on Interior and Exterior masonry surfaces. It has good weathering resistance , anti- algae and fungus property. It gives good coverage and is easy to use.
                </h6>
                <h4 class="mt-50">1.Nippon Matex Premium Features</h4>
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
                <h4 class="mt-50">2.Application of Nippon Matex Premium</h4>
                <ul style="line-height:25px">
                    <li>Soft boards.</li>
                    <li>Asbestos.</li>
                    <li>Wood.</li>
                    <li>Plastered walls.</li>
                    <li>Cement / Concrete.</li>
                    <li>Factory.</li>
                    <li>Ceiling.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
