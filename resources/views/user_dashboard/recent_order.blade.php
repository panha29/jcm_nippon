<div class="row">
    <!-- Recent Orders Start -->
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Recent Orders</h2>
        <div class="mb-n2 scroll-out">
            <div class="scroll-by-count" data-count="6">
                @foreach ($recent as $item)
                <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                                <a href="#" class="body-link stretched-link">Order #{{$item->customer_name}}</a>
                            </div>
                            <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                                <span class="badge bg-outline-primary me-1">COMPLETE</span>
                            </div>
                            <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                            <span>
                                <span class="text-small">$</span>
                                {{$item->customer_total}}
                            </span>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">{{$item->customer_date}} ({{$item->customer_time}})</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Orders End -->

    <!-- Performance Start -->
    <div class="col-xl-6 mb-5">
        <div class="d-flex">
            <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                </a>
                <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                        <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                        <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                </div>
            </div>
            <h2 class="small-title">Performance</h2>
        </div>
        <div class="card sh-45 h-xl-100-card">
            <div class="card-body h-100">
                <div class="h-100">
                    <canvas id="horizontalTooltipChart"></canvas>
                    <div
                            class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                    >
                        <div
                                class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                        >
                            <span class="icon"></span>
                        </div>
                        <div>
                            <span class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                            <span class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Performance End -->
</div>
