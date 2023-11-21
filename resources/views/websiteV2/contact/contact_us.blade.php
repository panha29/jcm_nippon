@php
    $html_tag_data = [];
    $title = 'Contact Us';
    $description = 'Contact Us';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')


@endsection

@section('js_page')

@endsection

@section('content')
<div id="lqd-contents-wrap">
    <br>
    <br>
    <br>
    <div class="titlebar-inner">
        <div class="container titlebar-container">
            <div class="row titlebar-container justify-center">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                    <h1>Contact Us</h1>
                    <p class="leading-20">We are here to answer any question you may have.​</p>
                </div>
            </div>
        </div>
    </div>

    <section class="lqd-section form pt-40 pb-100">
        <div class="container module-container">
            <div class="row">
                <div class="col col-12 p-0 module-col">
                    <div class="w-full relative bg-white rounded-10 transition-all shadow-md pt-60 px-70 pb-80 module-form">
                        <address>
                            <span class="lqd-cf-list-item-label">I am bound by the terms of the Service I accept Privacy Policy.</span>

                          <div class="address">
                            #51, St. 271<br>
                            Sangkat Phsar Derm thkov, Khan Chamkarmorn
                            <div class="divider"></div>
                            <p>Phnom Penh, Kingdom of Cambodia.</p>
                          </div>
                          <i class="material-icons brand-color"></i>
                          <div class="phone">
                            <p>Fax: (855) 23 214 067<br>
                              Phone: (855) 11 822 266, 11 907 902<br>
                              Tel: (855) 23 211 854, 23 994 567
                            </p>
                          </div>
                          <i class="material-icons brand-color"></i>
                          <div class="mail">
                            <p><a href="mailto:info@jcmnippon.com">info@jcmnippon.com</a><br>
                            <a href="/">www.jcmnippon.com</a></p>
                          </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lqd-section form pt-40 pb-100" id="form">
        <div class="container module-container">
            <div class="row">
                <div class="col col-12 p-0 module-col">
                    <div class="w-full relative bg-white rounded-10 transition-all shadow-md pt-60 px-70 pb-80 module-form">
                        <div class="w-full relative flex flex-wrap items-center justify-between">
                            <div class="w-50percent relative pt-5 px-10 pb-10 sm:w-full">
                                <h2 class="ld-fh-element relative text-28 font-bold"> Send a message</h2>
                            </div>
                            <div class="w-50percent relative text-end pr-40 sm:w-full sm:text-start">
                                <img class="w-60" width="100" height="100" src="webv2/images/demo/start-hub-1/contact/shape-plane.svg" alt="plane">
                            </div>
                        </div>
                        <div class="lqd-contact-form lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-lg lqd-contact-form-button-round lqd-contact-form-button-border-none lqd-contact-form-inputs-lg p-10">
                            <div role="form" class="lqd-cf mt-25" id="lqd-cf-form-contact" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form action="#" method="post" class="lqd-cf-form init" novalidate="novalidate" data-status="init">
                                    <div class="row -mx-15">
                                        <div class="col col-md-6 col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap text">
                                                <input type="text" name="text" value="" size="40" class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false" placeholder="Full name">
                                            </span>
                                        </div>
                                        <div class="col col-md-6 col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap email">
                                                <input type="email" name="email" value="" size="40" class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false" placeholder="Your email address">
                                            </span>
                                        </div>
                                        <div class="col col-md-6 col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap text">
                                                <input type="text" name="text" value="" size="40" class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false" placeholder="Your Subject">
                                            </span>
                                        </div>
                                        <div class="col col-md-6 col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap tel-969">
                                                <input type="tel" name="tel-969" value="" size="40" class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false" placeholder="Phone number">
                                            </span>
                                        </div>
                                        <div class="col col-12 py-0 px-15">
                                            <div class="mb-0 lqd-form-control-wrap relative">
                                                <div class="lqd-select-dropdown" role="menubar">
                                                    <div class="ui-selectmenu-menu ui-front">
                                                        <ul aria-hidden="true" aria-labelledby="ui-id-2-button" id="ui-id-2-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul>
                                                    </div>
                                                </div>
                                                <span tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget border-1 border-black-10 text-16 font-normal text-slate-700">
                                                    <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
                                                    <span class="ui-selectmenu-text px-2em">Select a product</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap">
                                                <textarea name="textarea" cols="10" rows="4" class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false" placeholder="Your message"></textarea>
                                            </span>
                                        </div>
                                        <div class="col col-12 py-0 px-15">
                                            <span class="lqd-form-control-wrap acceptance-120">
                                                <span class="lqd-cf-form-control lqd-cf-acceptance">
                                                    <span class="lqd-cf-list-item">
                                                        <label>
                                                            <input type="checkbox" name="acceptance-120" value="1" aria-invalid="false">
                                                            <span class="lqd-cf-list-item-label">I am bound by the terms of the Service I accept Privacy Policy.</span>
                                                        </label>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col col-12 py-0 px-15">
                                            <input type="submit" value="Send message" class="lqd-cf-form-control has-spinner lqd-cf-submit text-white bg-primary">
                                        </div>
                                    </div>
                                    <div class="lqd-cf-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
