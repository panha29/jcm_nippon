<style>
    .carousel-item-inner{
        width: 100% !important;
    }
</style>
<section class="lqd-section case-study-carousel pt-60 pb-50" id="case-studies" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
    <div class="container">
        <div class="row items-center justify-between">
            <div class="col col-12 col-md-6 p-0">
                <div class="ld-fancy-heading relative animation-element">
                    <h2 class="m-0 ld-fh-element m-0 inline-block pos-re">Our Product</h2>
                </div>
            </div>
            <div class="col col-12 col-md-6 p-0 text-end sm:text-start">
                <div class="fancy-button animation-element">
                    <a href="/Products" class="btn btn-naked font-bold uppercase whitespace-nowrap tracking-1/5 leading-1/4em text-green-900">
                        <span class="btn-txt" data-text="see more works">see more products</span>
                    </a>
                </div>
            </div>
            <div class="col col-12 p-0">
                <div class="carousel-container pt-40 animation-element">
                    {{-- <div class="carousel-items relative" data-lqd-flickity='{ "equalHeightCells": true, "filters": "#pf-filter-46824385", "prevNextButtons": true, "navArrow":  6, "fullwidthSide":  true, "buttonsAppendTo":  "self", "autoPlay":3000}'> --}}
                        <div class="carousel-items relative" data-lqd-flickity='{ "equalHeightCells": true, "filters": "#pf-filter-46824385", "prevNextButtons": true, "navArrow":  6, "fullwidthSide":  true, "autoPlay":3000}'>

                       @foreach ($product as $item)
                       <div class="carousel-item col-12 col-lg-6 col-xl-4 mr-60">
                        <article class="lqd-pf-item lqd-pf-item-style-3 lqd-pf-overlay-bg-scale lqd-pf-content-v pf-details-h-str">
                            <div class="lqd-pf-item-inner">
                                <div class="lqd-pf-img overflow-hidden rounded-6 relative mb-2em">
                                    <figure>
                                        <figure class="lqd-overlay flex items-center justify-center">
                                            <img style="width: 80%;" src="{{url('img/product/company_product/'.$item->product_image)}}" class="w-full h-full objfit-cover objfit-center" alt="nippon paint cambodia product" >
                                        </figure>
                                    </figure>
                                    {{-- <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center bg-transparent text-white" style="background-image: linear-gradient(180deg,  rgb(0 127 255 / 94%) 0%,  rgb(255 77 84 / 86%) 100%)">
                                        <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                    </span> --}}
                                </div>
                                <div class="lqd-pf-details">
                                    <h2 class="lqd-pf-title mt-0 mb-1 h5">{{$item->product_name}}</h2>
                                    <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                        <li>
                                            <a href="#" class="leading-1/4em">{{$item->product_category}}</a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <a href="{{url('img/product/company_product/'.$item->product_image)}}" class="lqd-overlay flex lqd-pf-overlay-link leading-1/4em fresco" data-fresco-group="case-studies"></a> --}}
                            </div>
                        </article>
                    </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
