@php
    $html_tag_data = [];
    $title = 'Color Palette';
    $description = 'Color Palette';
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
@include('user_dashboard.websiteV2.color_palette.color_palette_js')
@include('user_dashboard.websiteV2.css')

<div id="lqd-contents-wrap">
    <!-- Satrt Events -->
    <section class="lqd-section events pb-70" id="events">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-30">
                    <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                        <nav class="lqd-tabs-nav-wrap mb-2rem">
                            <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-13 uppercase font-ultrabold link-primary md:justify-between" role="tablist">

                                <li data-controls="lqd-tab-events-item-1" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Green" class="active" aria-expanded="false" aria-controls="lqd-tab-events-item-green" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Green</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-2" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Red" aria-expanded="false" aria-controls="lqd-tab-events-item-Red" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Red</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Yellow" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Yellow</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-4" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Orange" aria-expanded="false" aria-controls="lqd-tab-events-item-4" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Orange</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-Blue" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Blue" aria-expanded="false" aria-controls="lqd-tab-events-item-Blue" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Blue</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Purple" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Purple</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Grey" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Grey</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Neutral" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Neutral</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Green-Blue" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Green Blue</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                                <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                    <a draggable="false" href="#lqd-tab-events-item-Off-White" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                        <span class="iconbox items-center justify-center">
                                            <span class="flex flex-col">
                                                <span class="iconbox-title h3 my-0">Off White</span>
                                            </span>
                                        </span>
                                        <span class="lqd-tabs-nav-progress">
                                            <span class="lqd-tabs-nav-progress-inner"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="lqd-contact-form ">
                            <div class="mobile-view-search" style="float: right">
                                <span class="lqd-form-control-wrap text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                    <input type="text"  onkeyup="filter_name()" size="40" id="myInput" autocomplete="off" class="icon-rtl lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false">
                                </span>
                            </div>
                        </div>
                        <div class="lqd-tabs-content mb-2rem pt-15">
                            @include('user_dashboard.mobile-app.color_palette.color')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events -->

</div>
@endsection

