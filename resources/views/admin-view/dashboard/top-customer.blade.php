<div class="row gx-4 gy-5">
    <!-- Top Selling Items Start -->
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Top Selling Items</h2>
        <div class="scroll-out mb-n2">
            <div class="scroll-by-count" data-count="4">
                {{-- @foreach ($data as $item) --}}
                <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                        <div class="col-auto">
                            <a href="#" draggable="false">
                                {{-- <img src="{{ url('public/Image/'.$item->image) }}" draggable="false" style="height: 80px" class="card-img card-img-horizontal" onerror="this.src='../img/unvailable.jpg'"/> --}}
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="#" draggable="false">{{$data}}</a>
                                    </div>
                                    <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @endforeach --}}
            </div>
        </div>
    </div>
