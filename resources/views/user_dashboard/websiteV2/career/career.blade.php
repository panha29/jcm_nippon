@extends('user_dashboard.webv2-layout')
@section('css')
    <link rel="stylesheet" href="./css/hub5/css/demo/start-hub-5/start-hub-5-start.css">
@endsection

@section('js_vendor')
    <script src="../css/hub5/vendors/particles.min.js"></script>
@endsection

@section('js_page')
@endsection
<style>

    .text-01ad08{
        color: #01ad08 !important;
    }
</style>
@section('content')
<div id="lqd-contents-wrap">
    <section class="lqd-section webinar pt-130 pb-45" id="nipponcambodia">
        <div class="container">
            <div class="row items-stretch">
                <div class="col col-12 col-md-5 relative flex flex-col flex-wrap justify-center">
                    <div class="max-w-full w-auto absolute top-0 left-0 z-0 text-start">
                        <img width="75" height="75" src="../webv2/images/demo/events-hub/shape-dots.svg" alt="dots">
                    </div>
                    <div class="max-w-full w-auto absolute -top-15percent -right-10percent">
                        <img width="309" height="321" src="../webv2/images/demo/events-hub/shape-two-circle.svg" alt="circles">
                    </div>
                    <div class="lqd-imggrp-single relative z-1" data-hover3d="true">
                        <div class="lqd-imggrp-img-container flex" data-stacking-factor="1">
                            <figure class="rounded-inherit">
                                <img class="rounded-16" width="998" height="662" src="../webv2/images/nppbuilding.jpg" alt="nipponcambodia">
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="col col-12 col-md-7 relative flex flex-col">
                    <div class="flex flex-col items-start justify-center mr-15percent ml-10percent lg:m-0">
                        <div class="iconbox items-center mb-25 -ml-5">
                            <div class="iconbox-icon-wrap mr-5">
                                <span class="iconbox-icon-container text-accent">
                                    <i class="lqd-icn-ess icon-lqd-circle"></i>
                                </span>
                            </div>
                            <h3 class="lq-icon-box-el text-11 uppercase tracking-1/5">News</h3>
                        </div>
                        <h2 class="ld-fh-element relative mb-0/5em"> Why Working With Us?</h2>
                        <p class="ld-fh-element relative mb-2em"> <b>Innovative Environment:</b> We foster an innovative environment, encouraging our employees to bring forth new ideas and solutions. We believe that innovation is the key to staying ahead in the industry. </p>
                        <p class="ld-fh-element relative mb-2em"> <b>Professional Growth:</b> We offer numerous opportunities for professional growth. With a variety of projects and challenges, our team members can expand their skills and knowledge.</p>
                        <p class="ld-fh-element relative mb-2em"> <b>Work-Life Balance:</b> We understand the importance of a healthy work-life balance. We offer flexible working hours and remote work options to ensure our employees can maintain a balance between their work and personal life.</p>
                        <p class="ld-fh-element relative mb-2em"> <b>Competitive Compensation:</b> We offer competitive compensation packages, including attractive salaries, benefits, and opportunities for bonuses.</p>
                        <p class="ld-fh-element relative mb-2em"> <b>Team Spirit:</b> We believe in the power of teamwork. Our collaborative culture ensures that everyone's voice is heard and valued.</p>
                        <p class="ld-fh-element relative mb-2em"> <b>Making a Difference:</b> By working with us, you'll be part of a team that's making a real difference in the industry. Our work impacts thousands of people and businesses around the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section speakers pt-40 sm:pt-0" id="speakers">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-8 col-xl-6 relative">
                    <div class="w-full absolute top-15percent -right-80percent z-0 text-center" data-parallax="true" data-parallax-options='{ "ease" : "linear", "start" : "top bottom", "end" : "bottom-=100% top" }' data-parallax-from='{ "y" : "65%", "rotationZ":-50,"opacity":0.6}' data-parallax-to='{ "y" : "-10%", "rotationZ":0,"opacity":1}'>
                        <div class="elementor-widget-container">
                            <img class="w-390" width="790" height="731" src="../webv2/images/demo/events-hub/shape-colored.jpg" alt="shape">
                        </div>
                    </div>
                    <h2 class="ld-fh-element relative mb-0/5em"> Career</h2>
                    <p class="ld-fh-element relative mb-1/5em text-18 leading-1/5em"> Keep connecting with us, we will always updating news for you.</p>
                </div>
                <div class="w-full"></div>
                <!-- /.col col-12 col-md-6 -->


            </div>
        </div>
    </section>
    <!-- Satrt Events -->
    <section class="lqd-section events pt-40 pb-70" id="events">
        <div class="container">
            <div class="row">
                <div class="col col-12 mb-30">
                    <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>

                        <div class="lqd-tabs-content mb-2rem pt-15">

                                <div class="container p-0 module-container">
                                    @foreach ($career as $item)
                                    <div class="w-full relative flex flex-wrap bg-white rounded-100 shadow-md transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                        <div class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                            <p class="text-01ad08 ld-fh-element relative m-0 text-17 font-bold leading-1em text-primary"> {{$item->career_date}}</p>
                                            <p class="text-01ad08 ld-fh-element relative m-0 text-14 text-primary"> </p>
                                        </div>
                                        <div class="w-65percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                            <p class="text-01ad08 ld-fh-element relative m-0 text-14 text-primary"> {{$item->career_location}} </p>
                                            <p class="text-01ad08 ld-fh-element relative m-0 text-17 font-bold text-primary"> {{$item->career_title}}</p>
                                        </div>

                                        <div class="w-20percent flex flex-col items-center justify-center py-25 md:w-25percent sm:w-full">
                                            <a href="Career/{{$item->career_title}}" style="color: white" class="button btn btn-solid btn-md btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-md btn-has-label bg-slate-700 rounded-100 text-13 uppercase leading-1/3em tracking-1 font-bold hover:bg-secondary hover:text-primary">
                                                <span class="btn-txt" data-text="Urgent" style="position:revert" data-split-text="true" data-split-options='{ "type": "chars, words" }'>More Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                        {{-- @include('websiteV2.career.modal') --}}
                                        {{-- <a href="career/{{$item->id}}">More Detail</a> --}}
                                    @endforeach
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Events -->
</div>

@endsection
