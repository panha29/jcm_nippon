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
{{-- @include('user_dashboard.websiteV2.color_palette.color_palette_js')
@include('user_dashboard.websiteV2.css') --}}

<div id="lqd-contents-wrap">
    <section class="lqd-section events pb-70 pt-40" id="events">
        <div class="container">
            <a href="">
                <div class="card">
                    <div class="card-body">


                            <div class="row">
                                <div class="col">
                                    <img src="{{ url('webv2/images/product/matexpremium.png') }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint" style="width: 50%">
                                </div>
                                <div class="col">
                                    <h5><span class="leading-1/6em tracking-1 uppercase font-ultrabold"><b>Matex Premium</b></span></h5>
                                </div>
                            </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
</div>
@endsection

