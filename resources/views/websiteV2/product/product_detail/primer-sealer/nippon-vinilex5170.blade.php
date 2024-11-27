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
                <img src="{{ url('webv2/images/product/sealer5170.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/primer-sealer/vinilex5170-sealer-kh.pdf" download="Nippon Vinilex 5170" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/primer-sealer/vinilex5170-sealer.pdf" download="Nippon Vinilex 5170" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Vinilex 5170</h1>
                <h4>SEALER</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Nippon Paint Vinilex 5170 Wall Sealer is a solvent based sealer containing a superior resin/binder with additives.
                    It is excellent in preventing the degradation of finishing coats from attack by strong alkali cement.
                    It is specially designed for long-term performance in external conditions.
                </h6>
                <h4 class="mt-50">1.Nippon Vinilex 5170 Features</h4>
                <ul style="line-height:25px">
                    <li>Outstanding alkali resistance.</li>
                    <li>Excellent efflorescence resistance to prevent discolouration.</li>
                    <li>Good penetration for excellent adhesion.</li>
                    <li>Able to prevent resurfacing of stain mark on problem substrates.</li>
                    <li>Good inter coat adhesion for finishing coat.</li>
                    <li>Fungus & algae resistance.</li>
                    <li>Does not contain Lead, Mercury and heavy metals.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Vinilex 5170</h4>
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
                    <h4 class="uppercase title-h6">Nippon Vinilex 5170</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="" >
        <img src="{{ url('webv2/images/product/sealer5170.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="mobile-center">
        <a href="/webv2/primer-sealer/vinilex5170-sealer-kh.pdf" download="Nippon Vinilex 5170" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (KHM)
        </a>
        <a href="/webv2/primer-sealer/vinilex5170-sealer.pdf" download="Nippon Vinilex 5170" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (ENG)
        </a>
    </div>
    <div class="mobile-center" style="width: 350px;">
        <h3 class="mt-50" >Product Information</h3>
        <h6 style="line-height:25px; text-align: justify;">Nippon Paint Vinilex 5170 Wall Sealer is a solvent based sealer containing a superior resin/binder with additives.
            It is excellent in preventing the degradation of finishing coats from attack by strong alkali cement.
            It is specially designed for long-term performance in external conditions.
        </h6>
        <h4 class="mt-50">1.Nippon Vinilex 5170 Features</h4>
        <ul style="line-height:25px">
            <li>Outstanding alkali resistance.</li>
            <li>Excellent efflorescence resistance to prevent discolouration.</li>
            <li>Good penetration for excellent adhesion.</li>
            <li>Able to prevent resurfacing of stain mark on problem substrates.</li>
            <li>Good inter coat adhesion for finishing coat.</li>
            <li>Fungus & algae resistance.</li>
            <li>Does not contain Lead, Mercury and heavy metals.</li>
        </ul>
        <h4 class="mt-50">2.Application of Nippon Vinilex 5170</h4>
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
