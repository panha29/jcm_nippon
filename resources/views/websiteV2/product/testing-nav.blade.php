<section class="lqd-section events pb-70" id="events">
    <div class="container">
        <div class="row">
            <div class="col col-12 mb-30">
                <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-" data-tabs-options='{ "trigger" : "click" }'>
                    <nav class="lqd-tabs-nav-wrap">
                        <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-black-10 link-13 uppercase font-ultrabold link-primary md:justify-between" role="tablist">
                            <li data-controls="lqd-tab-events-item-home-paint" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-home-paint" class="active" aria-expanded="false" aria-controls="lqd-tab-events-home-paint" role="tab" data-bs-toggle="tab">
                                    <span class="iconbox items-center justify-center">
                                        <span class="flex flex-col">
                                            <span class="iconbox-title h3 my-0">Home Paint</span>
                                        </span>
                                    </span>
                                    <span class="lqd-tabs-nav-progress">
                                        <span class="lqd-tabs-nav-progress-inner"></span>
                                    </span>
                                </a>
                            </li>
                            <li data-controls="lqd-tab-events-item-waterproofing" role="presentation" class="text-center">
                                <a draggable="false" href="#lqd-tab-events-item-waterproofing" aria-expanded="false" aria-controls="lqd-tab-events-item-waterproofing" role="tab" data-bs-toggle="tab">
                                    <span class="iconbox items-center justify-center">
                                        <span class="flex flex-col">
                                            <span class="iconbox-title h3 my-0">waterproofing</span>
                                        </span>
                                    </span>
                                    <span class="lqd-tabs-nav-progress">
                                        <span class="lqd-tabs-nav-progress-inner"></span>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="boxpc">
            {{-- <div id="lqd-tab-events-item-home-paint" role="tabpanel" class="lqd-tabs-pane show active fade col-3"> --}}
                <div class="p-0 module-container">
                    @foreach ($allpd as $item)
                        <?php if ($item->product_tag == "home-paint") { ?>
                            <div id="lqd-tab-events-item-home-paint" role="tabpanel" class="lqd-tabs-pane active fade col-3" >
                                <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                                    <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                                        <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                                            <figure class="rounded-inherit">
                                                <img class="rounded-8" src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="nippon paint cambodia" style="width:80%;background-image: url('webv2/images/demo/modern-agency/banner.jpg');">
                                            </figure>
                                        </div>
                                    </div>
                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->product_name}}</h3>
                                    <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->product_category}}</p>
                                </div>
                            </div>
                        <?php } ?>
                    @endforeach
                </div>
            {{-- </div> --}}

                <div class="p-0 module-container">
                    @foreach ($allpd as $item)
                        <?php if ($item->product_tag == "waterproofing") { ?>
                            <div id="lqd-tab-events-item-waterproofing" role="tabpanel" class="lqd-tabs-pane fade col-3" >
                                <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                                    <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                                        <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                                            <figure class="rounded-inherit">
                                                <img class="rounded-8" src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="nippon paint cambodia" style="width:80%;background-image: url('webv2/images/demo/modern-agency/banner.jpg');">
                                            </figure>
                                        </div>
                                    </div>
                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->product_name}}</h3>
                                    <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->product_category}}</p>
                                </div>
                            </div>
                        <?php } ?>
                    @endforeach
                </div>
{{--
            <div id="lqd-tab-events-item-{{$item->product_tag}}" role="tabpanel" class="lqd-tabs-pane show active col-3 " >
                <div class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col">
                    <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                        <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                            <figure class="rounded-inherit">
                                <img class="rounded-8" src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="nippon paint cambodia" style="width:80%;background-image: url('webv2/images/demo/modern-agency/banner.jpg');">
                            </figure>
                        </div>
                    </div>
                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5"> {{$item->product_name}}</h3>
                    <p class="ld-fh-element relative m-0 text-15 font-medium"> {{$item->product_category}}</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<style>
    .boxpc{
        display: inline-flex;
        margin: auto;
        flex-wrap: wrap;
    }
</style>
