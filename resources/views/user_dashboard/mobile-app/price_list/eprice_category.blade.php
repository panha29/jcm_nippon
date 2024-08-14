@php
    $html_tag_data = [];
    $title = 'Price List';
    $description = 'Price List';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout-eprice',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>

<style>
@media screen and (max-width: 430px){
    .pt-100{
        padding-top: 0 !important;
    }
}


</style>
@endsection

@section('js_vendor')
<script src="/js/vendor/baguetteBox.min.js"></script>

@endsection

@section('js_page')


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="/js/plugins/lightbox.js"></script>

@endsection

@section('content')
@include('user_dashboard.mobile-app.price_list.css')

<div id="lqd-contents-wrap">
    <section class="lqd-section events pb-70 pt-40" id="events">
        <div class="container">
            <a href="" class="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/matex.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Matex</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <a href="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/matexpremium.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Matex Premium</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <a href="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/weatherbond8y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Weatherbond 8 Years</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <a href="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/weatherbondplus.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Weatherbond Plus 12 Years</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <a href="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/weathergard6y.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Weathergard 6 Years</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <br>
            <a href="">
                <div class="card category_btn" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="width: 30%; max-width:30%; padding: 0 0 0 2%;">
                                <img src="{{ url('webv2/images/product/supereasywash.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                            </div>
                            <div class="col" style="margin: auto;">
                                <div class="container">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Super Easy Wash</b></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
@endsection

