@php
    $html_tag_data = [];
    $title = 'About Us';
    $description = 'About Us';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">
@endsection

<style>

    @media screen and (max-width: 879px){
        .logo-img {
            width: 73px;
            margin-left: 15%;
        }
        .new-logo1{
           display: none;

        }
        .new-logo{
            width: 35px !important;
            margin-left: 20%;

        }
        .category{
        background-color: #e9e9e9 !important;
        width: 331px;
        height: 300px;
        float: right;
        border-radius: 25px;
        padding: 15px;
        line-height: 40px;
        }
    }

    @media screen and (min-width: 1920px){
        .logo-img {
            width: 80px;
            margin-left: 210px !important;
        }

        .new-logo{
            width: 45px !important;
            margin-left: 230px !important;

        }
        .new-logo1{
            width: 45px !important;
            margin-left: 150px !important;

        }
    }

    @media screen and (min-width: 2560px){
        .logo-img {
            width: 80px;
            margin-left: 210px !important;
        }

        .new-logo{
            width: 45px !important;
            margin-left: 230px !important;

        }
        .new-logo1{
            width: 45px !important;
            margin-left: 143px !important;

        }
    }
</style>
@section('js_vendor')


@endsection

@section('js_page')

@endsection

@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section has-accordion-page pt-100 bg-gray-200">
        <div class="container" >
            <div class="titlebar-inner">
                <div class="container titlebar-container">
                    <div class="row titlebar-container justify-center">
                        <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                            <h1>About Us</h1>
                            <p class="leading-20">We are here to answer any question you may have.​</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-xl-6">
                    <h2 class="ld-fh-element relative mb-0/5em text-40"> History</h2>
                    <p class="ld-fh-element relative mb-2/25em"> Nippon Paint Holdings Co., Ltd. (日本ペイントホールディングス株式会社, Nippon Peinto Hōrudingusu Kabushiki-gaisha) is a Japanese paint and paint products manufacturing company.</p>
                    <div class="accordion accordion-sm accordion-side-spacing accordion-title-round accordion-expander-lg accordion-active-has-fill" id="accordion-bg-title" role="tablist" aria-multiselectable="true">
                        <div class="accordion-item mb-20 panel animation-element active">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-1">
                                    <a class="py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <span class="accordion-title-txt">Nippon Paint 1881</span>
                                        <img src="../webv2/images/1881.png" width="100" alt="nippon paint cambodia" class="logo-img">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse show" id="collapse-1" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-1">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">founded in Tokyo, Japan, as the
                                        pioneer first paint plant in Japan</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-2">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        <span class="accordion-title-txt">Nippon Paint 1962</span>
                                        <img src="../webv2/images/1962.png" width="100" alt="nippon paint cambodia" class="logo-img">
                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-2" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-2">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">took its first step toward
                                        globalization when it set up a
                                        joint venture in Singapore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt">Nippon Paint 1998</span>
                                        <img src="../webv2/images/1998.png" width="100" alt="nippon paint cambodia" class="logo-img">

                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-3" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">Private.,Ltd. Was officially
                                        established in Phnom Penh,
                                        Cambodia and fully operational.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt">Nippon Paint 2021</span>
                                        <img src="../webv2/images/npp.png" width="100" alt="nippon paint cambodia" class="logo-img new-logo">

                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-4" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">With our 56 manufacturing facilities, we produce close to
                                        1 Billion Liters of Coating
                                        annually and have
                                        employed 17,000 Workforces</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-20 panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-3">
                                        <span class="accordion-title-txt">Nippon Paint 2022</span>
                                        <img src="../webv2/images/npp.png" width="100" alt="nippon paint cambodia" class="logo-img new-logo">

                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse mb-20 collapse" id="collapse-5" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">was listed as the number 3
                                        in the world and stand as
                                        number 1 in Asia for many years
                                        now base on Orr and
                                        Boss Consulting Incorporated. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item panel animation-element">
                            <div class="accordion-heading" role="tab">
                                <h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
                                    <a class="collapsed py-0/65em px-1/5em bg-gray text-16 font-bold" role="button" data-bs-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                        <span class="accordion-title-txt">JCMNIPPON Private.,Ltd 2023</span>
                                        <img src="../webv2/images/npp.png" width="100" alt="nippon paint cambodia" class="logo-img new-logo1">

                                        <span class="accordion-expander text-22">
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                            <i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
                                        </span>
                                    </a>
                                </h4>
                            </div>
                            <div class="accordion-collapse collapse" id="collapse-6" data-bs-parent="#accordion-bg-title" role="tabpanel" aria-labelledby="heading-3">
                                <div class="pt-1/5em pl-1/5em">
                                    <p class="m-0">had added Selleys, an international
                                        brand from Australia with
                                        over 80 years of experience in
                                        adhesives, sealants, fillers, and
                                        paint preparation products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-xl-6 p-0">
                    <div class="w-full relative flex items-center pl-20percent rounded-8 z-1 module-col" data-parallax="true" data-parallax-options='{"ease":["linear"],"start":"top bottom","end":"bottom+=0px top"}' data-parallax-from='{"y":"60px"}' data-parallax-to='{"y":"-75px"}'>
                        <div class="lqd-imggrp-single block pos-rel rounded-inherit" data-shadow-style="4" >
                            <div class="lqd-imggrp-img-container inline-flex pos-rel items-center justify-center rounded-inherit">
                            <figure class="w-full pos-rel">
                                <img class="rounded-inherit" width="592" height="674" src="../webv2/images/nppbuilding.jpg" alt="has accordion">
                            </figure>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Has Accordion -->

    <!-- Start Icon Box -->
    <section class="lqd-section icon-box-page bg-gray-200 pt-90 pb-100" data-custom-animations="true" data-ca-options='{"addChildTimelines":false,"animationTarget":".col","ease":["power4.out"],"initValues":{"opacity":0},"animations":{"opacity":1}}'>
        <div class="container">
            <div class="row">
                <div class="col col-12 text-center flex flex-wrap p-0">
                    <div class="col col-12 col-md-6 col-xl-3 p-0">
                        <div class="flex flex-auto p-15 transition-all">
                            <div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-gray rounded-10 shadow-bottom lg:m-0" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewbox="0 0 50 50">
                                            <path d="M4.15-19.775a8.008,8.008,0,0,0,5.908-2.466A8.072,8.072,0,0,0,12.5-28.125V-42.48L18.115-37.7l1.465-1.66L11.67-46.24,3.76-39.355,5.225-37.7,10.4-42.48v14.355a6.082,6.082,0,0,1-1.782,4.443A6.017,6.017,0,0,1,4.15-21.875H-6.25a5.843,5.843,0,0,0-3.223.977,10.241,10.241,0,0,0-2.661,2.515,12.919,12.919,0,0,0-1.807,3.369,10.428,10.428,0,0,0-.659,3.54v6.25h2.1v-6.25a10.192,10.192,0,0,1,1.807-5.469q1.807-2.832,4.443-2.832Zm-25-25h25v-2.1h-25a4,4,0,0,0-2.93,1.221A4,4,0,0,0-25-42.725v41.7A4,4,0,0,0-23.779,1.9a4,4,0,0,0,2.93,1.221v-2.1A2.013,2.013,0,0,1-22.339.464,2.013,2.013,0,0,1-22.9-1.025v-41.7a2.013,2.013,0,0,1,.562-1.489A2.013,2.013,0,0,1-20.85-44.775Zm6.25,47.9h2.1v-4.15h-2.1Zm.83-32.52L-10.4-32.91l3.32,3.516,1.66-1.66-3.516-3.32L-5.42-37.7l-1.66-1.66L-10.4-35.84l-3.369-3.516-1.66,1.66,3.564,3.32-3.564,3.32ZM15.82-14.355,12.5-10.84,9.18-14.355,7.52-12.7l3.516,3.32L7.52-6.055l1.66,1.66L12.5-7.91l3.32,3.516,1.66-1.66-3.516-3.32L17.48-12.7ZM22.9-42.725H25a4,4,0,0,0-1.221-2.93,4,4,0,0,0-2.93-1.221h-2.1v2.1h2.1a2.013,2.013,0,0,1,1.489.562A2.013,2.013,0,0,1,22.9-42.725Zm0,41.7A2.013,2.013,0,0,1,22.339.464a2.013,2.013,0,0,1-1.489.562H-6.25v2.1h27.1A4,4,0,0,0,23.779,1.9,4,4,0,0,0,25-1.025v-29.2H22.9Zm0-33.35H25v-4.15H22.9Z" transform="translate(25 46.875)" fill="#184341"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">Diversity and Inclusion </h3>
                                <div class="contents">

                                    <a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">
                                        <span class="btn-txt" data-text="Learn more"></span>
                                        <span class="btn-icon text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                        <span class="btn-icon mr-10 text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-3 p-0">
                        <div class="flex flex-auto p-15 transition-all">
                            <div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-gray rounded-10 shadow-bottom lg:m-0" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewbox="0 0 50 50">
                                            <path d="M-1.27-11.865-8.35-5.225l-7.08-6.641a15.456,15.456,0,0,0-3.857,2.441,16.207,16.207,0,0,0-3.027,3.467,16.786,16.786,0,0,0-1.978,4.272A16.381,16.381,0,0,0-25,3.125H8.35a16.381,16.381,0,0,0-.708-4.81A16.786,16.786,0,0,0,5.664-5.957,16.207,16.207,0,0,0,2.637-9.424,15.16,15.16,0,0,0-1.27-11.865ZM-22.705,1.025A14.51,14.51,0,0,1-20.41-4.956a14.049,14.049,0,0,1,4.785-4.419l7.275,7.08,7.52-7.08A15.276,15.276,0,0,1,3.882-4.956,13.977,13.977,0,0,1,6.25,1.025Zm14.355-12.5a8.048,8.048,0,0,0,5.908-2.441A7.991,7.991,0,0,0,0-19.775v-4.2H-2.1v4.2a6.082,6.082,0,0,1-1.782,4.443A6.017,6.017,0,0,1-8.35-13.525a6.04,6.04,0,0,1-4.443-1.807A6.04,6.04,0,0,1-14.6-19.775v-4.2h6.25a8.048,8.048,0,0,0,5.908-2.441A7.991,7.991,0,0,0,0-32.275H-12.5a4,4,0,0,0-2.93,1.221,4,4,0,0,0-1.221,2.93v8.35a7.991,7.991,0,0,0,2.441,5.859A7.991,7.991,0,0,0-8.35-11.475Zm-6.25-16.65a2.048,2.048,0,0,1,.586-1.514,2.048,2.048,0,0,1,1.514-.586H-2.49a6.014,6.014,0,0,1-2.222,3.052A6.049,6.049,0,0,1-8.35-26.025H-14.6Zm18.75-8.35h12.5v-2.051H4.15Zm0,6.25h12.5v-2.051H4.15Zm-6.25-12.5a1.967,1.967,0,0,1,.586-1.489A2.1,2.1,0,0,1,0-44.775H20.85a2.013,2.013,0,0,1,1.489.562,2.013,2.013,0,0,1,.562,1.489H25a4,4,0,0,0-1.221-2.93,4,4,0,0,0-2.93-1.221H0a4,4,0,0,0-2.93,1.221,4,4,0,0,0-1.221,2.93v6.25H-2.1Zm25,8.35H25v-4.15H22.9Zm0,8.35a2.013,2.013,0,0,1-.562,1.489,2.013,2.013,0,0,1-1.489.562H13.965l-5.615,4.2v-4.2H4.15v2.1h2.1v6.25l8.35-6.25h6.25a4,4,0,0,0,2.93-1.221A4,4,0,0,0,25-26.025v-4.2H22.9Z" transform="translate(25 46.875)" fill="#184341"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">Consulting and Suggesting  </h3>
                                <div class="contents">

                                    <a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">

                                        <span class="btn-icon text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                        <span class="btn-icon mr-10 text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-3 p-0">
                        <div class="flex flex-auto p-15 transition-all">
                            <div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-gray rounded-10 shadow-bottom lg:m-0" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewbox="0 0 50 50">
                                            <path d="M-2.1-31.25a1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269H-8.35V-37.5a1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269,1.023,1.023,0,0,0-.757.269,1.023,1.023,0,0,0-.269.757v5.225h-5.225a1.023,1.023,0,0,0-.757.269,1.023,1.023,0,0,0-.269.757,1.023,1.023,0,0,0,.269.757,1.023,1.023,0,0,0,.757.269H-10.4V-25a1.023,1.023,0,0,0,.269.757,1.023,1.023,0,0,0,.757.269,1.023,1.023,0,0,0,.757-.269A1.023,1.023,0,0,0-8.35-25v-5.225h5.225a1.023,1.023,0,0,0,.757-.269A1.023,1.023,0,0,0-2.1-31.25ZM15.625-17.725H5.225a1.056,1.056,0,0,0-.781.293,1.056,1.056,0,0,0-.293.781.994.994,0,0,0,.293.732,1.056,1.056,0,0,0,.781.293h10.4a.975.975,0,0,0,.757-.293,1.043,1.043,0,0,0,.269-.732,1.111,1.111,0,0,0-.269-.781A.975.975,0,0,0,15.625-17.725Zm0,8.35H5.225a1.056,1.056,0,0,0-.781.293.994.994,0,0,0-.293.732,1.056,1.056,0,0,0,.293.781,1.056,1.056,0,0,0,.781.293h10.4a.975.975,0,0,0,.757-.293,1.111,1.111,0,0,0,.269-.781,1.043,1.043,0,0,0-.269-.732A.975.975,0,0,0,15.625-9.375Zm-10.4-20.85h10.4a1.023,1.023,0,0,0,.757-.269,1.023,1.023,0,0,0,.269-.757,1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269H5.225a1.111,1.111,0,0,0-.781.269.975.975,0,0,0-.293.757.975.975,0,0,0,.293.757A1.111,1.111,0,0,0,5.225-30.225ZM-3.32-18.555a1.136,1.136,0,0,0-.757-.293.965.965,0,0,0-.708.293L-9.18-14.16l-4.346-4.395a1.136,1.136,0,0,0-.757-.293.965.965,0,0,0-.708.293,1.05,1.05,0,0,0-.342.757.9.9,0,0,0,.342.708l4.346,4.395L-14.99-8.35a1.05,1.05,0,0,0-.342.757.9.9,0,0,0,.342.708.559.559,0,0,0,.317.171,3.945,3.945,0,0,0,.513.024,4.048,4.048,0,0,0,.488-.024.574.574,0,0,0,.342-.171l4.395-4.346L-4.59-6.885a.574.574,0,0,0,.342.171,4.048,4.048,0,0,0,.488.024,3.945,3.945,0,0,0,.513-.024.559.559,0,0,0,.317-.171.9.9,0,0,0,.342-.708A1.05,1.05,0,0,0-2.93-8.35L-7.275-12.7-2.93-17.09a1.107,1.107,0,0,1-.2-.635A2.829,2.829,0,0,0-3.32-18.555ZM16.65-46.875v2.1a6.06,6.06,0,0,1,4.468,1.782A6.06,6.06,0,0,1,22.9-38.525v33.3A6.06,6.06,0,0,1,21.118-.757,6.06,6.06,0,0,1,16.65,1.025h-33.3A6.06,6.06,0,0,1-21.118-.757,6.06,6.06,0,0,1-22.9-5.225v-33.3a6.06,6.06,0,0,1,1.782-4.468,6.06,6.06,0,0,1,4.468-1.782H4.15v-2.1h-20.8a8.048,8.048,0,0,0-5.908,2.441A8.048,8.048,0,0,0-25-38.525v33.3A8.048,8.048,0,0,0-22.559.684,8.048,8.048,0,0,0-16.65,3.125h33.3A8.048,8.048,0,0,0,22.559.684,8.048,8.048,0,0,0,25-5.225v-33.3a8.048,8.048,0,0,0-2.441-5.908A8.048,8.048,0,0,0,16.65-46.875Zm-8.3,2.1H12.5v-2.1H8.35Z" transform="translate(25 46.875)" fill="#184341"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">Save and Low Cost  </h3>
                                <div class="contents">

                                    <a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">

                                        <span class="btn-icon text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                        <span class="btn-icon mr-10 text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-xl-3 p-0">
                        <div class="flex flex-auto p-15 transition-all">
                            <div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-gray rounded-10 shadow-bottom lg:m-0" data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
                                <div class="iconbox-icon-wrap">
                                    <div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewbox="0 0 50 50">
                                            <path d="M-12.5-23.975a12.164,12.164,0,0,0,.977,4.858,12.625,12.625,0,0,0,2.686,3.979,12.625,12.625,0,0,0,3.979,2.686A12.164,12.164,0,0,0,0-11.475a12.164,12.164,0,0,0,4.858-.977,12.625,12.625,0,0,0,3.979-2.686,12.625,12.625,0,0,0,2.686-3.979,12.164,12.164,0,0,0,.977-4.858,12.219,12.219,0,0,0-.977-4.834,12.267,12.267,0,0,0-2.686-3.979,13.194,13.194,0,0,0-3.979-2.686,11.909,11.909,0,0,0-4.858-1,11.909,11.909,0,0,0-4.858,1,13.194,13.194,0,0,0-3.979,2.686,12.267,12.267,0,0,0-2.686,3.979A12.219,12.219,0,0,0-12.5-23.975ZM0-34.375a10.52,10.52,0,0,1,4.321.879,10.008,10.008,0,0,1,3.394,2.441L-2.1-21.24l-3.32-3.32-1.465,1.416,5.029,5.029L9.18-29.15a23.614,23.614,0,0,1,.83,2.441,9.912,9.912,0,0,1,.391,2.734,10.417,10.417,0,0,1-.806,4.1,10.549,10.549,0,0,1-2.2,3.32,10.063,10.063,0,0,1-3.3,2.222,10.417,10.417,0,0,1-4.1.806,10.417,10.417,0,0,1-4.1-.806,10.063,10.063,0,0,1-3.3-2.222,10.549,10.549,0,0,1-2.2-3.32,10.417,10.417,0,0,1-.806-4.1,10.293,10.293,0,0,1,.806-4.053,10.549,10.549,0,0,1,2.2-3.32,10.063,10.063,0,0,1,3.3-2.222A10.417,10.417,0,0,1,0-34.375Zm2.1-10.4H6.25v-2.1H2.1Zm12.5-2.1H10.4v2.1H12.7a12.335,12.335,0,0,0,1.245,3.662,12.644,12.644,0,0,0,2.246,3.052,12.644,12.644,0,0,0,3.052,2.246A12.335,12.335,0,0,0,22.9-34.57v12.7a12.106,12.106,0,0,1-2.588,7.2,37.292,37.292,0,0,1-6.2,6.567A56.254,56.254,0,0,1,6.567-2.759Q2.637-.439,0,.83-2.637-.439-6.567-2.759a56.254,56.254,0,0,1-7.544-5.347,37.292,37.292,0,0,1-6.2-6.567,12.106,12.106,0,0,1-2.588-7.2v-12.7a12.335,12.335,0,0,0,3.662-1.245,12.644,12.644,0,0,0,3.052-2.246,12.644,12.644,0,0,0,2.246-3.052A12.335,12.335,0,0,0-12.7-44.775H-2.1v-2.1H-14.6a10.417,10.417,0,0,1-.806,4.1,10.258,10.258,0,0,1-2.2,3.3,10.258,10.258,0,0,1-3.3,2.2,10.417,10.417,0,0,1-4.1.806v14.6a14.662,14.662,0,0,0,3.906,9.717A49.988,49.988,0,0,0-12.5-4.224,65.054,65.054,0,0,0-3.906,1.147L0,3.125,3.906,1.147A65.054,65.054,0,0,0,12.5-4.224a49.988,49.988,0,0,0,8.594-7.935A14.662,14.662,0,0,0,25-21.875v-14.6a10.417,10.417,0,0,1-4.1-.806,10.258,10.258,0,0,1-3.3-2.2,10.258,10.258,0,0,1-2.2-3.3A10.417,10.417,0,0,1,14.6-46.875Z" transform="translate(25 46.875)" fill="#184341"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">Warranty and Guarantee </h3>
                                <div class="contents">

                                    <a href="#" class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">

                                        <span class="btn-icon text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                        <span class="btn-icon mr-10 text-16 tracking-0">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Icon Box -->

    <!-- Start Team -->
    <section class="lqd-section team pt-100 pb-65">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <div class="w-full flex flex-col items-center text-center px-15percent pb-10 sm:px-0">
                        <h2 class="ld-fh-element relative mb-0/5em"> Message From Our CEO</h2>
                    </div>
                    <div class="container-fluid">
                        <div class=" col-12  flex flex-col items-start text-start p-20 module-col" data-custom-animations="true" data-ca-options='{"addChildTimelines":false,"animationTarget":"img, h4, h6, p","duration":1200,"startDelay":200,"delay":100,"ease":["power4.out"],"initValues":{"y":"20px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
                            <img class="mb-1em"src="../webv2/images/ceo.png" alt="team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->
</div>

@endsection
