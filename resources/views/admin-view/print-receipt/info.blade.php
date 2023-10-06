<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet">
<style>
    .col1{
        /* width: 284px; */
        width: 33.33%;
        float: left;
    }
    .col2{
        /* margin-left: 192px; */
        width: 245px;
        float: left;
    }
    .col3{
        width: auto;
        float: left;
    }

</style>
    <div class="row">
        <div class="col1">
            <div class="address">
                <label for="sold-to" class="label">លក់ជូន/Sold To<i style="margin-left: 27px">:</i> {{$item->order_customer}}</label>
                <br>
                <label for="contact" class="label" >ទំនាក់ទំនង/Attend<i style="margin-left: 14px">:</i> {{$item->attendto}}</label>
                <br>
                <label for="address" class="label" contenteditable="true">អាស័យដ្ធាន/Address : {{$item->address}} </label><br>
                <label for="phone" class="label" contenteditable="true">ទូរស័ព្ទ/Tel<i style="margin-left: 61px">:</i> {{$item->order_phone}} </label><br>
                <label for="accpetor" class="label" contenteditable="true">ឈ្មោះអ្នកទទួល<i style="margin-left: 42px">:</i> {{$item->shipto}} </label><br>
                <label for="acceptor-address" class="label" contenteditable="true">ទីតាំងអ្នកទទួល<i style="margin-left: 42px">:</i>  {{$item->arrivelocation}}</label>
                <br>
                <label for="phone" class="label" >ម៉ោងដឹកជញ្ជូន <i style="margin-left: 44px">:</i>  {{$item->deliverytime}}</label>
            </div>
        </div>
        <div class="col2">
            <img src="{{URL::asset('img/kesorboutiqueaba.png')}}" width="60% !important;" style="margin-right: 10px">
        </div>
        <div class="col3">
            <div class="address printview" style="float:right">
                <label for="invoice" class="label" >Invoice No <i style="margin-left: 51px">:</i>  {{$item->invoice}} </label>
                <br>
                <label for="orderdate" class="label" >ថ្ងៃទទួលការកម្មុង <i style="margin-left: 36px">:</i> {{$item->order_date}}</label>
                <br>
                <label for="date" class="label" >កាលបរិច្ឆេទ<i style="margin-left: 64.5px">:</i> {{$item->date}}</label>
                <br>
                <label for="orderdate" class="label" >ថ្ងៃដែលទទួលប្រាក់ <i style="margin-left: 30px">:</i> {{$item->issued_date}}</label>
                <br>
                <label for="term" class="label" >លក្ខខ័ណ្ឌទូទាត់<i style="margin-left: 47.5px">:</i> {{$item->issued_payment_via}}</label>
                <br>
                <label for="pono" class="label" >ប័ណ្ណបញ្ចរទិញ/PO NO <i style="margin-left: 6px">:</i> {{$item->attendto}}</label>
                <br>
                <label for="seller" class="label" >អ្នកលក់ <i style="margin-left: 81px">:</i> {{$item->seller}}</label>
                <br>
                {{-- <label for="issuedby" class="label" >អ្នកចេញប័ណ្ណ<i style="margin-left: 57px">:</i> </label>
                <br> --}}
                <label for="" class="label" contenteditable="true" style="font-weight:600; color:red">Contact Us<i style="margin-left: 57px">:</i> 085 240 999</label>

            </div>
        </div>
    </div>
