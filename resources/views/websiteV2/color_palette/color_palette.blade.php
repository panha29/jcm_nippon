{{-- @php
    $html_tag_data = [];
    $title = 'Color Palette';
    $description = 'Color Palette';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

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

@section('content') --}}
<style>
    @media (max-width: 767px) {
    .solutions .module-last {
        margin-top: 0%;
        padding-top: 0%;
    }
    .color-border{
        width: 110px;
    height: 110px;
    border: 1px solid #ebebeb;
    }
    .color-box {
    display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0px;
    width: 390px;
    }
}
    .lqd-tabs-style-3 .lqd-tabs-nav {
        flex-wrap: wrap;
    }
    .lqd-tabs-style-3 .lqd-tabs-nav a {
        padding-top: 1.5em;
        padding-bottom: 1.5em;
        display: block;
        height: 50px;
    }
    .lqd-tabs-style-3 .lqd-tabs-nav li {
        padding-left: 20px;
        padding-right: 20px;
    }
    .lqd-tabs-nav-items-not-expanded .lqd-tabs-nav li {
		flex-grow: 0;
	}
    .iconbox-title{
        color: var(--lqd-h3-color, var(--lqd-heading-color)) !important;
    }
</style>
@include('user_dashboard.websiteV2.color_palette.color_palette_js')
@include('user_dashboard.websiteV2.css')
{{-- <link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css"> --}}
{{-- <link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div id="lqd-contents-wrap">
		<!-- Satrt Events -->
        <section class="lqd-section events" id="events">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                            <nav class="lqd-tabs-nav-wrap">
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
                                    {{-- <li data-controls="lqd-tab-events-item-4" role="presentation" class="text-center">
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
                                    </li> --}}
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

                            <div class="lqd-tabs-content">
                              @include('websiteV2.color_palette.color')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Events -->

</div>
{{-- @endsection --}}

