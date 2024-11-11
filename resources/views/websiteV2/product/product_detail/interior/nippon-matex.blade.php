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
                <img src="{{ url('webv2/images/product/matex.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/interior/matex-kh.pdf" download="Nippon Matex" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (Kh)
                </a>
                <a href="/webv2/interior/matex.pdf" download="Nippon Matex" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Matex</h1>
                <h4>INTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">A multi-purpose Acrylic Copolymer emulsion recommended for humid environment Long-lasting, beauty and wide range of attractive colors.
                </h6>
                <h4 class="mt-50">1.Nippon Matex Features</h4>
                <ul style="line-height:25px">
                    <li>Economical.</li>
                    <li>Easy application.</li>
                    <li>Good coverage and hiding power.</li>
                    <li>Recommend for high humid environment.</li>
                    <li>Good Anti-fungus and anti- algae properties.</li>
                    <li>Well regarded as the premium paint in its class.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Matex</h4>
                <ul style="line-height:25px">
                    <li>Soft boards.</li>
                    <li>Wood.</li>
                    <li>Plastered Walls.</li>
                    <li>Cement/Concrete.</li>
                    <li>Ceilings.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
