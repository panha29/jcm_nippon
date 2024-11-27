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
                <img src="{{ url('webv2/images/product/EcoRedOxidePrimer.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/wood-matel/red-oxide-primer-kh.pdf" download="Nippon ECO Red Oxide Primer" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/wood-matel/red-oxide-primer.pdf" download="Nippon ECO Red Oxide Primer" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Eco Red Oxide Primer</h1>
                <h4>Wood & Metal</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">NIPPON METAL RED OXIDE PRIMER is an Oil-Modified Alkyd based anti-rust primer used as an economical
                    protective coating for iron and steel surfaces under non-immersion condition.
                </h6>
                <h4 class="mt-50">1.Nippon Eco Red Oxide Primer Features</h4>
                <ul style="line-height:25px">
                    <li>Economic grade of normal protection.</li>
                    <li>Non-toxic.</li>
                    <li>Cost-effective through high coverage.</li>
                    <li>High quality appearance achievable with appropriate finishing coat.</li>
                    <li>Ease of application. Can be applied by normal spraying equipment.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Eco Red Oxide Primer</h4>
                <ul style="line-height:25px">
                    <li>Ferrous Metal.</li>
                    <li>Non Ferrous Metal.</li>
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
                    <h4 class="uppercase title-h6">Nippon Red Oxide Primer</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="" >
        <img src="{{ url('webv2/images/product/EcoRedOxidePrimer.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="mobile-center">
        <a href="/webv2/wood-metal/red-oxide-primer-kh.pdf" download="Nippon Red Oxide Primer" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (KHM)
        </a>
        <a href="/webv2/wood-metal/red-oxide-primer.pdf" download="Nippon Red Oxide Primer" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (ENG)
        </a>
    </div>
    <div class="mobile-center" style="width: 350px;">
        <h3 class="mt-50" >Product Information</h3>
        <h6 style="line-height:25px; text-align: justify;">NIPPON METAL RED OXIDE PRIMER is an Oil-Modified Alkyd based anti-rust primer used as an economical
            protective coating for iron and steel surfaces under non-immersion condition.
        </h6>
        <h4 class="mt-50">1.Nippon Red Oxide Primer Features</h4>
        <ul style="line-height:25px">
            <li>Economic grade of normal protection.</li>
            <li>Non-toxic.</li>
            <li>Cost-effective through high coverage.</li>
            <li>High quality appearance achievable with appropriate finishing coat.</li>
            <li>Ease of application. Can be applied by normal spraying equipment.</li>
        </ul>
        <h4 class="mt-50">2.Application of Nippon Red Oxide Primer</h4>
        <ul style="line-height:25px">
            <li>Ferrous Metal.</li>
            <li>Non Ferrous Metal.</li>
        </ul>
    </div>
    <br>
    <br>
</div>
@endsection
