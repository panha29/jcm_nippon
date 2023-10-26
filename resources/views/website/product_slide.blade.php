
<div class="container product-slide" style="">
    <section class="scroll-section" id="autoPlay" style="margin-top: 5%;">
    {{-- <section class="scroll-section" id="smallGutters" style="margin-top: 5%;"> --}}


        <div class="container-divider">
            <div class="row">
                <div class="col">
                    <div class="divider"></div>
                </div>
                <div class="col">
                    <h3 class="mb-5">PRODUCTS</h3>
                </div>
                <div class="col">
                    <div class="divider"></div>
                </div>
            </div>
        </div>

        <div class="gx-2">
            <div class="p-0">
                <div class="glide" id="glideAuto">
                {{-- <div class="scroll-section" id="glideSmall"> --}}
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35 card-responsive">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between" style="padding: 20px">
                                        <img src="img/product/p1.png" alt="" class="img-responsive">
                                        <p class="card-text h5 text-center mb-0 d-flex">Pending Orders</p>
                                    </div>
                                </div>
                            </div>
                            @foreach ($product as $item)
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35 card-responsive">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between" style="padding: 20px">
                                        <img src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="" class="img-responsive">
                                        <p class="card-text h5 text-center mb-0 d-flex">{{$item->product_name}}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            {{-- <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="pear" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="loaf" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="cupcake" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="radish" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="radish" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-35">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-3 align-items-center justify-content-center rounded-xl">
                                            <i data-acorn-icon="radish" class="text-white"></i>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Pending Orders</p>
                                        <p class="h4 text-center mb-0 d-flex text-primary">25</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
