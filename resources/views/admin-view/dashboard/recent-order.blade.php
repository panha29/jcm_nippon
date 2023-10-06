<!-- Recent Orders Start -->
<div class="col-xl-6 mb-5">
    <h2 class="small-title">Recent Orders</h2>
    <div class="mb-n2 scroll-out">
        <div class="scroll-by-count" data-count="6">
            @foreach ($pd as $item)
            <div class="card mb-2 sh-15 sh-md-6">
                <div class="card-body pt-0 pb-0 h-100">
                    <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                            <a href="#" class="body-link stretched-link dashkh" draggable="false">{{$item->order_customer}}</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                            <span class="badge bg-outline-primary me-1">{{$item->invoice}}</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                            <span>
                                <span class="text-small">$</span>
                                <b>{{$item->balance}}</b>
                            </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">{{$item->date}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Recent Orders End -->
