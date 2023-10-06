<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet">
<style>

/* .col{
    width: 33.33% !important;
} */
</style>
    <div class="row">
        <div class="col" style="width: 42.33% !important;">
            <div class="address">
                <label for="sold-to" class="label">លក់ជូន<i style="margin-left: 40px">:</i> {{$item->order_customer}}</label>
                <br>
                {{-- <label for="contact" class="label" >ទំនាក់ទំនង/Attend<i style="margin-left: 14px">:</i> {{$item->attendto}}</label>
                <br> --}}
                <label for="address" class="label">អាស័យដ្ធាន <i style="margin-left: 18px">:</i> {{$item->address}} </label><br>
                <label for="phone" class="label">ទូរស័ព្ទ<i style="margin-left: 44px">:</i> {{$item->order_phone}} </label><br>
                <label for="accpetor" class="label">ឈ្មោះអ្នកទទួល<i style="margin-left: 5px">:</i> {{$item->shipto}} </label><br>
                <label for="acceptor-address" class="label">ទីតាំងអ្នកទទួល<i style="margin-left: 5px">:</i>  {{$item->arrivelocation}}</label>
                <br>
                <label for="phone" class="label" >ម៉ោងដឹកជញ្ជូន <i style="margin-left: 5px">:</i>  {{$item->deliverytime}}</label>
            </div>
        </div>
        <div class="col" style="width: 23.33% !important;">
            <img src="{{URL::asset('img/kesorboutiqueaba.png')}}" width="80% !important;" style="margin-right: 14px">
        </div>
        <div class="col" style="width:33.33% !important;">
            <div class="address printview" style="float:right">
                <label for="invoice" class="label" >Invoice No <i style="margin-left: 51px">:</i>  {{$item->invoice}} </label>
                <br>
                <label for="orderdate" class="label" >ថ្ងៃទទួលការកម្មុង <i style="margin-left: 36px">:</i> {{$item->order_date}}</label>
                <br>
                <label for="date" class="label" >កាលបរិច្ឆេទ<i style="margin-left: 64.5px">:</i> {{$item->date}}</label>
                <br>
                <label for="term" class="label" >លក្ខខ័ណ្ឌទូទាត់<i style="margin-left: 47.5px">:</i> {{$item->term}}</label>
                <br>
                {{-- <label for="pono" class="label" >ប័ណ្ណបញ្ចរទិញ/PO NO <i style="margin-left: 2px">:</i> </label>
                <br> --}}
                {{-- <label for="seller" class="label" >អ្នកលក់ <i style="margin-left: 81px">:</i> {{$item->seller}}</label> --}}
                <label for="seller" class="label" >អ្នកលក់ <i style="margin-left: 81px">:</i> {{ Auth::user()->name }}</label>

                <br>
                {{-- <label for="issuedby" class="label" >អ្នកចេញប័ណ្ណ<i style="margin-left: 57px">:</i> </label>
                <br> --}}
                <label for="" class="label" contenteditable="true" style="font-weight:600; color:red">Contact Us<i style="margin-left: 57px">:</i> 085 240 999</label>

            </div>
        </div>
    </div>
