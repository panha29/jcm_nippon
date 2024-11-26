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

            </div>
        </div>
    </div>

    <div class="center-body">
        <div class="row">
            <div class="col col-4">
                <img src="{{ url('webv2/images/product/EpoxyEA9.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/coating/ea9-kh.pdf" download="Nippon Epoxy EA9" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/coating/ea9.pdf" download="Nippon Epoxy EA9" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Epoxy EA9</h1>
                <h4>COATING</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">NIPPON EA-9 used as intermediate coat or finishing coat on steel, concrete, plaster, brick and most type of building
                    boards and blocks. Nippon EA‐9 primer / finish systems have been extensively used for long term
                    corrossion of both ferrous and non‐ferrous surfaces within the civil engineering and building industry,
                    and as lining systems for portable water, chemical and fuel storage tanks, palm oil derivatives and
                    edible oil.
                </h6>
                <h4 class="mt-50">1.Nippon Epoxy EA9 Features</h4>
                <ul style="line-height:25px">
                    <li>Excellent mechanical film properties such as film hardness, adhesion and abrasion resistance.</li>
                    <li>Outstanding resistance to corrosion and abrasion.</li>
                    <li>Resistance to water, alkaline, chemicals, oils, solvents,
                        mild acids, crude oils, fats, cutting oils, etc.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Matex</h4>
                <ul style="line-height:25px">
                    <li>Plaster.</li>
                    <li>Cement.</li>
                    <li>Concrete.</li>
                    <li>Steel.</li>
                    <li>Brick.</li>
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
                    <h4 class="uppercase title-h6">Nippon Epoxy EA9</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="" >
        <img src="{{ url('webv2/images/product/EpoxyEA9.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="mobile-center">
        <a href="/webv2/coating/ea9-kh.pdf" download="Nippon Epoxy EA9" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (KHM)
        </a>
        <a href="/webv2/coating/ea9.pdf" download="Nippon Epoxy EA9" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (ENG)
        </a>
    </div>
    <div class="mobile-center" style="width: 350px;">
        <h3 class="mt-50" >Product Information</h3>
        <h6 style="line-height:25px; text-align: justify;">NIPPON EA-9 used as intermediate coat or finishing coat on steel, concrete, plaster, brick and most type of building
            boards and blocks. Nippon EA‐9 primer / finish systems have been extensively used for long term
            corrossion of both ferrous and non‐ferrous surfaces within the civil engineering and building industry,
            and as lining systems for portable water, chemical and fuel storage tanks, palm oil derivatives and
            edible oil.
        </h6>
        <h4 class="mt-50">1.Nippon Epoxy EA9 Features</h4>
        <ul style="line-height:25px">
            <li>Excellent mechanical film properties such as film hardness, adhesion and abrasion resistance.</li>
            <li>Outstanding resistance to corrosion and abrasion.</li>
            <li>Resistance to water, alkaline, chemicals, oils, solvents,
                mild acids, crude oils, fats, cutting oils, etc.</li>
        </ul>
        <h4 class="mt-50">2.Application of Nippon Epoxy EA9</h4>
        <ul style="line-height:25px">
            <li>Plaster.</li>
            <li>Cement.</li>
            <li>Concrete.</li>
            <li>Steel.</li>
            <li>Brick.</li>
        </ul>
    </div>
    <br>
    <br>
</div>
@endsection
