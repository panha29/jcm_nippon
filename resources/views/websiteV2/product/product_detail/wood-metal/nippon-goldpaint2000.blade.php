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
                <img src="{{ url('webv2/images/product/goldpaint2000.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                <a href="/webv2/wood-matel/gold2000-kh.pdf" download="Nippon Gold Paint 2000" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (KHM)
                </a>
                <a href="/webv2/wood-matel/gold2000.pdf" download="Nippon Gold Paint 2000" class="title-h1 a-btn btn-hover mt-10 title-h1">
                    <img src="{{ url('webv2/images/icon-pdf-red.svg') }}" alt="" style="width: 40px">
                    Technical Documentation (ENG)
                </a>

            </div>
            <div class="col col-8">
                <h1 class="uppercase title-h1">Nippon Gold Paint 2000</h1>
                <h4>EXTERIOR</h4>
                <h3 class="mt-50" >Product Information</h3>
                <h6 style="line-height:25px">Nippon Paint Gold Paint 2000 is formulated from special thermoplastic acrylic resin and gold pigments.
                    It is suitable for both interior and exterior decoration.
                    It give shine and gorgeous finishing. Excellent alkaline and efflorescence resistance with excellent adhesion.
                </h6>
                <h4 class="mt-50">1.Nippon Gold Paint 2000 Features</h4>
                <ul style="line-height:25px">
                    <li> against harsh weather.</li>
                    <li>Tough resistance against fungus and algae.</li>
                    <li>Tough resistance against alkali and efflorescence.</li>
                    <li>Excellent washability.</li>
                </ul>
                <h4 class="mt-50">2.Application of Nippon Gold Paint 2000</h4>
                <ul style="line-height:25px">
                    <li>Metal.</li>
                    <li>Stainless.</li>
                    <li>Galvanize.</li>
                    <li>Copper.</li>
                    <li>Alloy.</li>
                </ul>
            </div>
        </div>
    </div>

<br>
<br>
</div>
@endsection
