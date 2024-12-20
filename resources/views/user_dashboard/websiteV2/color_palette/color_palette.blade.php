@php
    $html_tag_data = [];
    $title = 'Color Palette';
    $description = 'Color Palette';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
{{-- <link rel="stylesheet" href="../webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="../webv2/css/demo/digital-hub/digital-hub.css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="../css/vendor/baguetteBox.min.css"/>
@endsection

@section('js_vendor')
<script src="../js/vendor/baguetteBox.min.js"></script>
<script>
        @foreach ($color as $item)

    // Get the modal
    var modal{{$item->id}} = document.getElementById('{{$item->id}}');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal{{$item->id}}) {
        modal{{$item->id}}.style.display = "none";
      }
    }
    @endforeach
    </script>
@endsection

@section('js_page')


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="../js/plugins/lightbox.js"></script>
@endsection
<style>
    @media screen and (max-width: 430px){
        .pt-100{
            padding-top: 0 !important;
        }
    }
        table td, table th {
            border: none;
            padding: 0 0 1em 1em;

        }
        table tbody tr:nth-child(odd) {
            background-color: #f7f7f700 !important;
        }
        tbody{
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        table tr {
            border-bottom: 0px solid #dedede !important;
        }
        .link-primary a {
        color: #ff0000 !important;
        }
        .lqd-tabs-style-3 .lqd-tabs-nav li a:after{
            background-color: #ff0000 !important;
        }
    </style>
@section('content')
@include('user_dashboard.websiteV2.color_palette.color_palette_js')
@include('user_dashboard.websiteV2.css')

<div id="lqd-contents-wrap">
    <section class="lqd-section design pt-100 pb-40 top-90 pt-0">
        <div class="absolute top-0">
            <div class="ld-particles-container relative w-full">
                <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-design-services" ></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="w-450 flex flex-col relative items-center max-w-full text-center mx-auto px-15">
                    <div class="ld-fancy-heading relative w-auto py-5 px-15 bg-gray rounded-100 animation-element">
                        <h6 class="ld-fh-element relative text-12 uppercase tracking-1 text-slate-500 m-0">Our services</h6>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <h2 class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-bottom lqd-highlight-reset-onhover lqd-split-lines mb-0/5em mt-0/25em">
                            Consulting
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">with</span>
                                <span class="bottom-0 left-0 lqd-highlight-inner bg-purple-200"></span>
                            </mark> our professional.
                        </h2>
                    </div>
                    <div class="absolute -top-5percent -left-10percent module-shape">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="67" height="73" src="../webv2/images/demo/start-hub-4/services/Shape.svg" alt="shape">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <p class="ld-fh-element relative lqd-split-lines text-17 leading-1/3em" data-split-text="true" data-split-options='{"type": "lines"}'> With our professional, we will help you to choose color and provide you more idea based on your dream house, construct, or industry .</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

		<!-- Satrt Events -->
        <section class="lqd-section events pt-40 pb-70" id="events">
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
                                <div class="mobile-view-search">
                                    <span class="lqd-form-control-wrap text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                        <input type="text"  onkeyup="filter_name()" size="40" id="myInput" autocomplete="off" class="icon-rtl lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false">
                                    </span>
                                </div>
                            </div>
                            <div class="lqd-tabs-content mb-2rem pt-15">
                              @include('user_dashboard.websiteV2.color_palette.color')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Events -->

</div>
@endsection

