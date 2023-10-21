{{-- @foreach ($count as $data) --}}
<div class="col-6 col-md-4 col-lg-2">
    <div class="card h-100 hover-scale-up cursor-pointer">
        <div class="card-body d-flex flex-column align-items-center">
            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                <i data-acorn-icon="server" class="text-primary"></i>
            </div>
            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">CUSTOMERS</div>
            {{-- <div class="text-primary cta-4">{{$data->customer_name}}</div> --}}
            <div class="text-primary cta-4">{{$count}}</div>
        </div>
    </div>
</div>

{{-- @endforeach --}}
