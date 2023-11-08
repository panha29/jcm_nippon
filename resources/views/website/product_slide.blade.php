
<div class="container product-slide" style="">
    <section class="scroll-section" id="autoPlay" style="margin-top: 5%;">
    {{-- <section class="scroll-section" id="smallGutters" style="margin-top: 5%;"> --}}


        <div class="container-divider">
            <div class="row">
                <div class="col">
                    {{-- <div class="divider"></div> --}}
                </div>
                <div class="col">
                    <h1 class="mb-5"><b>OFFICIAL PRODUCTS</b></h1>
                </div>
                <div class="col">
                    {{-- <div class="divider"></div> --}}
                </div>
            </div>
        </div>

        <div class="gx-2 mt-5">
            <div class="p-0">
                <div class="glide" id="glideAuto">
                {{-- <div class="glide" id="glideBasic"> --}}
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            @foreach ($product as $item)
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35 card-responsive">
                                <div class="background-img">
                                    <img src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="" class="img-responsive">
                                </div>
                                        <div class="card-body text-center align-items-center d-flex flex-column justify-content-between " style="padding: 25px 10px 0 10px">
                                        <h6 class="card-text text-center mb-0 d-flex" ><b>{{$item->product_name}}</b></h6>

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

