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
<div id="lqd-contents-wrap" class="pc-display">
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
                <img src="{{ url('webv2/images/product/weatherbond8y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/exterior/weatherbond-kh.pdf" download="Nippon Weatherbond 8Y" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/exterior/weatherbond.pdf" download="Nippon Weatherbond 8Y" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon WeatherBond 8Y</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">A high-performance water-based paint that possesses superior exterior and interior durability.
                </h6>
                <h4 class="mt-50">1.Nippon WeatherBond 8Y Features</h4>
                <ul style="line-height:25px">
                    <li>Excellent weathering under local climatic conditions.</li>
                    <li>Resistant to fungus and algae growth.</li>
                    <li>Good adhesion on stable surfaces.</li>
                    <li>Easy application with good levelling properties.</li>
                    <li>Excellent anti-carbonation properties.</li>
                    <li>High water vapour permeability
                </ul>
                <h4 class="mt-50">2.Application of Nippon WeatherBond 8Y</h4>
                <ul style="line-height:25px">
                    <li>Cement plasters.</li>
                    <li>Concrete.</li>
                    <li>Brickwork.</li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<div id="lqd-contents-wrap" class="mobile-display">
    <div class="titlebar-inner-40">
        <div class="container titlebar-container">
            <div class="row titlebar-container justify-center">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                    <h4 class="uppercase title-h6">Nippon WeatherBond 8 years</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="" >
        <img src="{{ url('webv2/images/product/weatherbond8y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="mobile-center">
        <a href="/webv2/exterior/weatherbond-kh.pdf" download="Nippon WeatherBond 8 years" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (KHM)
        </a>
        <a href="/webv2/exterior/weatherbond.pdf" download="Nippon WeatherBond 8 years" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (ENG)
        </a>
    </div>
    <div class="mobile-center" style="width: 350px;">
        <h3 class="mt-50" >Product Information</h3>
        <h6 style="line-height:25px; text-align: justify;">A high-performance water-based paint that possesses superior exterior and interior durability.
        </h6>
        <h4 class="mt-50">1.Nippon WeatherBond 8 years Features</h4>
        <ul style="line-height:25px">
            <li>Excellent weathering under local climatic conditions.</li>
            <li>Resistant to fungus and algae growth.</li>
            <li>Good adhesion on stable surfaces.</li>
            <li>Easy application with good levelling properties.</li>
            <li>Excellent anti-carbonation properties.</li>
            <li>High water vapour permeability
        </ul>
        <h4 class="mt-50">2.Application of Nippon WeatherBond 8 years</h4>
        <ul style="line-height:25px">
            <li>Cement plasters.</li>
            <li>Concrete.</li>
            <li>Brickwork.</li>
        </ul>
    </div>
    <br>
    <br>
</div>
@endsection
