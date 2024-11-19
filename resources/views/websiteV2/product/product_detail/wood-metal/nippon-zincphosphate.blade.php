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
                <img src="{{ url('webv2/images/product/EcoGreyOxidePrimer.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/wood-matel/zinc-phosphate-primer-kh.pdf" download="Nippon Zinc Phosphate Primer" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/wood-matel/zinc-phosphate-primer.pdf" download="Nippon Zinc Phosphate Primer" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Zinc Phosphate Primer</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">NIPPON ZINC PHOSPHATE BLAST PRIMER is a two-pack Epoxy-Amin anti-corrosive primer with non-toxic Zinc Phosphate as its pigment.
                    It is recommended for use in combination with Nippon EA-4 Finish, Nippon EA-9 Finish and Nippon Polyurethane Finish for corrosive environment.
                </h6>
                <h4 class="mt-50">1.Nippon Zinc Phosphate Primer Features</h4>
                <ul style="line-height:25px">
                    <li>Resistant to splash, spillage and immersion in a wide range of chemicals, fresh water, etc.</li>
                    <li>Excellent mechanical film properties such as Film Hardness, Adhesion, Scratch Resistance and AbrasionResistance.</li>
                    <li>Easy application by brush, roller and spray.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Zinc Phosphate Primer</h4>
                <ul style="line-height:25px">
                    <li>Mild Steel Surfaces.</li>
                    <li>Galvanised Steel Surface.</li>
                    <li>Aluminium and Stainless Steel Surface.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
