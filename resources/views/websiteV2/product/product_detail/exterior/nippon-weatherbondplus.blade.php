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
                <img src="{{ url('webv2/images/product/weatherbondplus.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/exterior/weatherbond-plus-12y-kh.pdf" download="Nippon Weatherbond Plus" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (Kh)
                </a>
                <a href="/webv2/exterior/weatherbond-plus-12y.pdf" download="Nippon Weatherbond Plus" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon WeatherBond Plus 18Y</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">A high-performance water-based paint that possesses superior exterior durability with good water proofing and long lasting colour.
                </h6>
                <h4 class="mt-50">1.Nippon WeatherBond Plus 18Y Features</h4>
                <ul style="line-height:25px">
                    <li>Excellent weathering resistance</li>
                    <li>12 years colour performance</li>
                    <li>Good washability and water proofing</li>
                    <li>Excellent to Alkaline & Efflorescence properties</li>
                    <li>Good dirt pick up resistance</li>
                    <li>Excellent resistance to fungus and algae growth</li>
                    <li>Good adhesion on stable substrates</li>
                    <li>Easy apply with good flow & leveling properties</li>
                    <li>APEO free, Non-toxic, does not contain Lead, Mercury and heavy metals</li>
                    <li>Low VOCs (containing < 30g/L VOC, meeting the VOC requirement)</li>
                    <li>Green Label Certificate</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon WeatherBond Plus 18Y</h4>
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
@endsection
