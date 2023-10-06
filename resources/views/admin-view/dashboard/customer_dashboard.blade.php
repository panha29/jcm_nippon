<!-- Top Selling Items Start -->
<div class="col-xl-6 mb-5">
    <h2 class="small-title">Customer Index</h2>
    <div class="scroll-out mb-n2">
        <div class="scroll-by-count" data-count="4">
            @foreach ($customer as $item)
            <div class="card mb-2">
                <div class="row g-0 sh-14 sh-md-10">
                    <div class="col-auto">
                        <a href="#" draggable="false">
                            <img src="{{ url('../img/user-png.png') }}" draggable="false" style="margin: 15px 0 0 15px; width:50px; opacity: 0.5;" class="" onerror="this.src='../img/unvailable.jpg'"/>
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                            <div class="row g-0 h-100 align-content-center">
                                <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                                    <a href="#" draggable="false">{{$item->name}}</a>
                                </div>
                                <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">Joined at {{$item->created_at}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Top Selling Items End -->
