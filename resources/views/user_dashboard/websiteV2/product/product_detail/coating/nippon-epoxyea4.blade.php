@extends('user_dashboard.webv2-layout')

@section('css')
<link rel="stylesheet" href="./css/hub5/css/demo/start-hub-5/start-hub-5-start.css">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<style>

</style>
@endsection

@section('js_vendor')
@include('user_dashboard.websiteV2.product.js')

@endsection

@section('js_page')

@endsection
@include('user_dashboard.websiteV2.product.product_detail.css')
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
                <img src="{{ url('webv2/images/product/EpoxyEA4.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/coating/ea4-kh.pdf" download="Nippon Epoxy EA4" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/coating/ea4.pdf" download="Nippon Epoxy EA4" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Epoxy EA4</h1>
                <h4>COATING</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">NIPPON EA4 is a two-pack, high gloss Amine-Adduct Epoxy coating for use on steel, concrete, plaster, brick and
                    most types of building boards and blocks where chemical, oil and abrasion resistant coating is required. It is
                    recommended for non-immersion services. Non-skid quality available upon request.
                    voe content is < 350 g/L.
                </h6>
                <h4 class="mt-50">1.Nippon Epoxy EA4 Features</h4>
                <ul style="line-height:25px">
                    <li>Good resistance to abrasion and mechanical damage.</li>
                    <li>Excellent on correctly prepared and primed surfaces.</li>
                    <li>Dry service temperature up to 100°C.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Matex</h4>
                <ul style="line-height:25px">
                    <li>Masonry.</li>
                    <li>Cement.</li>
                    <li>Concrete.</li>
                    <li>Mild Steel Surfaces.</li>
                    <li>Galvanised Steel Surface.</li>
                    <li>New cement floor.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
