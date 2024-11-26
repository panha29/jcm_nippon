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
                <img src="{{ url('webv2/images/product/supereasywash.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/interior/super-easy-wash-kh.pdf" download="OdourLess Super Easy Wash" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/interior/super-easy-wash.pdf" download="OdourLess Super Easy Wash" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Odourless Super Easy Wash</h1>
                <h4>INTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Odourless Super Easy Wash is developed for interior use with special easy‐wash
                    property. More kinds of stains can be removed easily while the paint film still
                    maintains it natural beauty.    <br>
                    The wet scrub property of Odourless Super Easy Wash is much higher compared to other
                    interior emulsion paint (more than 10,000 cycles based on Singapore Test method
                    SS5: Part F5: 1992).
                </h6>
                <h4 class="mt-50">1.Super Easy Wash Features</h4>
                <ul style="line-height:25px">
                    <li>Less dirt & stain collections.</li>
                    <li>Stains on Nippon Super Easy Wash can be removed easily.</li>
                    <li>Excellent wet scrub property (more than 10,000 cycles based on Singapore Test
                        method SS5: Part F5: 1992).</li>
                    <li>Good coverage & easy application.</li>
                    <li>Good Anti-fungus and anti- algae properties.</li>
                    <li>Anti‐fungus property. Effective control against mildew growth.</li>
                </ul>
                <h4 class="mt-50">2.Application of Odourless Super Easy Wash</h4>
                <ul style="line-height:25px">
                    <li>Concrete wall.</li>
                    <li>Partition.</li>
                    <li>Panels.</li>
                    <li>Asbestos.</li>
                    <li>Plaster.</li>
                    <li>Gypsum.</li>
                    <li>Ceiling boards.</li>
                    <li>Fibre boards.</li>
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
                    <h4 class="uppercase title-h6">Nippon Odourless Super Easy Wash</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="" >
        <img src="{{ url('webv2/images/product/supereasywash.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" class="mobile-center">
        <a href="/webv2/interior/super-easy-wash-kh.pdf" download="Nippon Odourless Super Easy Wash" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (KHM)
        </a>
        <a href="/webv2/interior/super-easy-wash.pdf" download="Nippon Odourless Super Easy Wash" class="title-h1 a-btn-m btn-hover mt-10 title-h1 mobile-center">
            <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
            Technical Documentation (ENG)
        </a>
    </div>
    <div class="mobile-center" style="width: 350px;">
        <h3 class="mt-50" >Product Information</h3>
        <h6 style="line-height:25px; text-align: justify;">Odourless Super Easy Wash is developed for interior use with special easy‐wash
            property. More kinds of stains can be removed easily while the paint film still
            maintains it natural beauty.    <br>
            The wet scrub property of Odourless Super Easy Wash is much higher compared to other
            interior emulsion paint (more than 10,000 cycles based on Singapore Test method
            SS5: Part F5: 1992).
        </h6>
        <h4 class="mt-50">1.Nippon Odourless Super Easy Wash Features</h4>
        <ul style="line-height:25px">
            <li>Less dirt & stain collections.</li>
            <li>Stains on Nippon Super Easy Wash can be removed easily.</li>
            <li>Excellent wet scrub property (more than 10,000 cycles based on Singapore Test
                method SS5: Part F5: 1992).</li>
            <li>Good coverage & easy application.</li>
            <li>Good Anti-fungus and anti- algae properties.</li>
            <li>Anti‐fungus property. Effective control against mildew growth.</li>
        </ul>
        <h4 class="mt-50">2.Application of Nippon Odourless Super Easy Wash</h4>
        <ul style="line-height:25px">
            <li>Concrete wall.</li>
            <li>Partition.</li>
            <li>Panels.</li>
            <li>Asbestos.</li>
            <li>Plaster.</li>
            <li>Gypsum.</li>
            <li>Ceiling boards.</li>
            <li>Fibre boards.</li>
        </ul>
    </div>
    <br>
    <br>
</div>
@endsection
