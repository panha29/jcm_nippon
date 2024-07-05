<section class="lqd-section events pt-40 pb-70" id="events">
    <div class="container">
        <div class="row">
            <div class="col col-12 mb-30">
                <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                    <nav class="lqd-tabs-nav-wrap mb-2rem">
                        <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-13 uppercase font-ultrabold link-primary md:justify-between" role="tablist">

                            <li data-controls="lqd-tab-events-item-1" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Interior" class="active" aria-expanded="false" aria-controls="lqd-tab-events-item-green" role="tab" data-bs-toggle="tab">
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
                            <li data-controls="lqd-tab-events-item-2" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Exterior" aria-expanded="false" aria-controls="lqd-tab-events-item-Red" role="tab" data-bs-toggle="tab">
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
                            <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Wall-Primer-Sealer" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
                                    <span class="iconbox items-center justify-center">
                                        <span class="flex flex-col">
                                            <span class="iconbox-title h3 my-0">Wall Primer & Sealer</span>
                                        </span>
                                    </span>
                                    <span class="lqd-tabs-nav-progress">
                                        <span class="lqd-tabs-nav-progress-inner"></span>
                                    </span>
                                </a>
                            </li>
                            <li data-controls="lqd-tab-events-item-4" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Enamel-Paint" aria-expanded="false" aria-controls="lqd-tab-events-item-4" role="tab" data-bs-toggle="tab">
                                    <span class="iconbox items-center justify-center">
                                        <span class="flex flex-col">
                                            <span class="iconbox-title h3 my-0">Enamel Paint</span>
                                        </span>
                                    </span>
                                    <span class="lqd-tabs-nav-progress">
                                        <span class="lqd-tabs-nav-progress-inner"></span>
                                    </span>
                                </a>
                            </li>
                            <li data-controls="lqd-tab-events-item-Blue" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Wood-Metal-Paint" aria-expanded="false" aria-controls="lqd-tab-events-item-Blue" role="tab" data-bs-toggle="tab">
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
                            <li data-controls="lqd-tab-events-item-3" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-Coating" aria-expanded="false" aria-controls="lqd-tab-events-item-3" role="tab" data-bs-toggle="tab">
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
                    {{-- <div class="lqd-contact-form ">
                        <div class="mobile-view-search" style="float: right">
                            <span class="lqd-form-control-wrap text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                <input type="text"  onkeyup="filter_name()" size="40" id="myInput" autocomplete="off" class="icon-rtl lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" aria-required="true" aria-invalid="false">
                            </span>
                        </div>
                    </div> --}}
                    <div class="lqd-tabs-content mb-2rem pt-15">
                      @include('websiteV2.product.interior')
                      @include('websiteV2.product.exterior')
                      @include('websiteV2.product.primer-sealer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
