<style>
    .glide__slide {
        width: 400px !important;
        margin-right: 15px !important;
        height: 535px !important;
        padding-left: 16px !important;
    }
    /* .card-responsive{
        width: 300px !important;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        background: var(--foreground);
        border-radius: var(--border-radius-lg);
        border: initial;
        height: 400px;

    } */
</style>
<div class="container product-slide" style="width:60%">
{{-- <div class="container product-slide" style="width:60%"> --}}

    <section class="scroll-section" id="autoPlay">
        <h1 class="mb-5 mt-5" style="text-align: center; font-size:30px"><b>OFFICIAL PRODUCTS</b></h1>
        <div class="gx-2 mt-5">
            <div class="p-0">
                <div class="glide" id="glideAuto">
                {{-- <div class="glide" id="glideBasic" > --}}
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides" >
                            @foreach ($product as $item)
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35 card-responsive">
                                    <div class="background-img">
                                        <img src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="" class="img-responsive">
                                    </div>
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between product-label" style="">
                                        <h6 class="card-text text-center mb-0 d-flex" >{{$item->product_name}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

