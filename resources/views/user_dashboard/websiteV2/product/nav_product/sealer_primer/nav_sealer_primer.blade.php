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
     .text-white{
        color: black !important;
    }
    .lqd-tabs-style-3 .lqd-tabs-nav li a:after {
	height: 4px!important;
	background-color: #ff4747 !important;

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
        <style>
            .link-primary a {
            color: #ff0000;

        }
        </style>
        <section class="lqd-section events pt-40 pb-70" id="events">
            <div class="container">
                <div class="row">
                    <div class="col col-12 mb-30">
                        <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                            <nav class="lqd-tabs-nav-wrap">
                                <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-17 uppercase font-ultrabold link-primary md:justify-between" role="tablist">
                                    <li data-controls="Nippon-Paint-All" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-All" class="" aria-expanded="false" aria-controls="Nippon-Paint-All" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">All</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="Nippon-Paint-Interior" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-Interior" aria-expanded="false" aria-controls="Nippon-Paint-Interior" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Interior</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="Nippon-Paint-Exterior" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-Exterior" aria-expanded="false" aria-controls="Nippon-Paint-Exterior" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Exterior</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="Nippon-Paint-Primer-Sealer" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-Primer-Sealer" class="active show" aria-expanded="false" aria-controls="Nippon-Paint-Primer-Sealer" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Primer & Sealer</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="Nippon-Paint-Wood-Metal-Paint" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-Wood-Metal-Paint" aria-expanded="false" aria-controls="Nippon-Paint-Wood-Metal-Paint" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Wood & Metal Paint</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-controls="Nippon-Paint-Coating" role="presentation" class="text-center">
                                        <a draggable="false" href="#Nippon-Paint-Coating" aria-expanded="false" aria-controls="Nippon-Paint-Coating" role="tab" data-bs-toggle="tab">
                                            <span class="iconbox items-center justify-center">
                                                <span class="flex flex-col">
                                                    <span class="iconbox-title h3 my-0">Coating</span>
                                                </span>
                                            </span>
                                            <span class="lqd-tabs-nav-progress">
                                                <span class="lqd-tabs-nav-progress-inner"></span>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                            <div class="lqd-tabs-content pt-15">
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.nav_product_listing')
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.type.interior')
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.type.exterior')
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.type.primer-sealer')
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.type.wood-metal')
                                @include('user_dashboard.websiteV2.product.nav_product.sealer_primer.type.coating')
                            </div>.
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
