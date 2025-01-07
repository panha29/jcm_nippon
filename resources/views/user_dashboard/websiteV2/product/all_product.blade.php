@extends('user_dashboard.webv2-layout')

@section('css')
<link rel="stylesheet" href="../css/hub5/css/demo/start-hub-5/start-hub-5-start.css">

<style>

</style>
@endsection

@section('js_vendor')
@include('user_dashboard.websiteV2.product.js')

@endsection

@section('js_page')

@endsection
<style>
    @media screen and (max-width: 1920px) {
        .lqd-tabs-style-3 .lqd-tabs-nav li a:after {
	    height: 4px!important;
	    background-color: #ff4747 !important;
        }
    }
    @media screen and (max-width: 479px) {
        .lqd-tabs-style-3 .lqd-tabs-nav li a:after {
        height: 50px!important;
        background-color: #ff4747b8 !important;
        }
    }
</style>
@section('content')
<div id="lqd-contents-wrap">
    <div class="titlebar-inner">
        <div class="container titlebar-container mt-100">
            <div class="row titlebar-container justify-center">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                    <h2>Our Product</h2>
                    {{-- <p class="leading-20 text-gray-400">Our Project Reference</p> --}}
                </div>
            </div>
        </div>
    </div>

    <div id="product-table">
        @include('user_dashboard.websiteV2.product.product_category')
    </div>
</div>
@endsection
