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
                <img src="{{ url('webv2/images/product/odourless-spotless.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/interior/odourless-spotless-kh.pdf" download="OdourLess Spotless Plus" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/interior/odourless-spotless.pdf" download="OdourLess Spotless Plus" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Odourless Spot-less</h1>
                <h4>INTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Nippon Paint SPOT-LESS PLUS is an outstanding interior paint with Anti-Stain Technology that makes it an excellent hydrophilic stain repellent with very high resistance to household stains such as tea, wine, coffee, inks, hand marks, lipstick, juice, etc.
                    Besides, SPOT-LESS PLUS is formulated with Silver Ion Technology that is proven 99.9% effective against COVID-19 (SARS-CoV-2), other harmful viruses and bacteria when existing on walls.
                    Long-lasting, beauty and wide range of attractive colors.
                </h6>
                <h4 class="mt-50">1.SPOT-LESS PLUS Features</h4>
                <ul style="line-height:25px">
                    <li>Excellent stain repellent by Anti-Stain Technology to resist the penetration of hydrophilicliquid stains and has beading effects on all these stains.</li>
                    <li>Excellent washability.</li>
                    <li>Anti-viral (effective against harmful viruses such as SARS-CoV-2) by Silver IonTechnology 99.9% effective against COVID-19 (SARS-CoV-2).</li>
                    <li>Outstanding product with advance colour technology bring the creative experience withmany colour choices, beauty and long-lasting colour.</li>
                    <li>Anti-bacterial (effective against common bacteria such as E. Coli, StaphylococcusAureus, Salmonella typhimurium, Shigella flexneri, Pseudomonas aeruginosa, Klebsiellapneumoniae, Listeria monocytogenes).</li>
                    <li>Excellent water resistance and anti-fungus properties.</li>
                    <li>Excellent coverage and hiding power.</li>
                    <li>Extra low odour during application and after drying.</li>
                    <li>Non-toxic, APEO free, does not contain Lead, Mercury and heavy metals.</li>
                    <li>Low VOCs (containing < 10g/L VOC, meeting the VOC requirement).</li>
                    <li>Green Label Certificate.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Odourless Spot-less</h4>
                <ul style="line-height:25px">
                    <li>Cement plasters.</li>
                    <li>Brickworks.</li>
                    <li>Gypsum board.</li>
                    <li>Concrete.</li>
                    <li>Primed wood.</li>
                    <li>Fiberboards.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
