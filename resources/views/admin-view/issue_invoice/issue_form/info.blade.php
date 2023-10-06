<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet">

    <div class="row">
        <div class="col">
            <div class="address">
                <label for="sold-to" class="labelm">លក់ជូន<i style="margin-left: 40px">:</i> {{$data->order_customer}}</label>
                <br>

                {{-- <label for="contact" class="labelm" >ទំនាក់ទំនង/Attend<i style="margin-left: 14px">:</i> {{$data->attendto}}</label>
                <br> --}}
                <label for="address" class="labelm">អាស័យដ្ធាន <i style="margin-left: 18px">:</i> {{$data->address}} </label><br>
                <label for="phone" class="labelm">ទូរស័ព្ទ<i style="margin-left: 44px">:</i> {{$data->order_phone}} </label><br>
                <label for="accpetor" class="labelm">ឈ្មោះអ្នកទទួល<i style="margin-left: 5px">:</i> {{$data->shipto}} </label><br>
                <label for="acceptor-address" class="labelm">ទីតាំងអ្នកទទួល<i style="margin-left: 5px">:</i>  {{$data->arrivelocation}}</label>
                <br>
                <label for="phone" class="labelm" >ម៉ោងដឹកជញ្ជូន <i style="margin-left: 5px">:</i>  {{$data->deliverytime}}</label>
            </div>
        </div>
        <div class="col">
            <img src="{{URL::asset('img/kesorboutiqueaba.png')}}" width="80% !important;" style="margin-right: 14px">
        </div>
        <div class="col">
            <div class="address">
                <label for="invoice" class="labelm" >Invoice No <i style="margin-left: 51px">:</i>  {{$data->invoice}} </label>
                <br>
                <label for="orderdate" class="labelm" >ថ្ងៃទទួលការកម្មុង <i style="margin-left: 36px">:</i> {{$data->order_date}}</label>
                <br>
                <label for="date" class="labelm" >កាលបរិច្ឆេទ<i style="margin-left: 64.5px">:</i> {{$data->date}}</label>
                <br>
                <label for="term" class="labelm" >លក្ខខ័ណ្ឌទូទាត់<i style="margin-left: 47.5px">:</i> {{$data->term}}</label>
                <br>
                {{-- <label for="pono" class="labelm" >ប័ណ្ណបញ្ចរទិញ/PO NO <i style="margin-left: 2px">:</i> </label>
                <br> --}}
                {{-- <label for="seller" class="labelm" >អ្នកលក់ <i style="margin-left: 81px">:</i> {{$data->seller}}</label> --}}
                <label for="seller" class="labelm" >អ្នកលក់ <i style="margin-left: 81px">:</i> {{ Auth::user()->name }}</label>

                <br>
                {{-- <label for="issuedby" class="labelm" >អ្នកចេញប័ណ្ណ<i style="margin-left: 57px">:</i> </label>
                <br> --}}
                <label for="" class="labelm" contenteditable="true" style="font-weight:600; color:red">Contact Us<i style="margin-left: 57px">:</i> 085 240 999</label>

            </div>
        </div>
    </div>
