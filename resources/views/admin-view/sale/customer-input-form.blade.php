<div class="card mb-5">
    <div class="card-body">
        <div class="mb-3">
            <select name="order_customer"  id="customer_name" class="form-control select" onchange="updateform()">
                <option value="Walk in Customer">Walk in Customer</option>
                    @foreach ($data as $item)
                        <option data-value="{{$item->customer_phone}}"
                                data-address="{{$item->customer_address}}"
                                data-shipto="{{$item->customer_shipto}}"
                                data-attendto="{{$item->customer_name}}"
                                data-arrivelocation="{{$item->customer_arrivelocation}}"

                            name="order_customer" value="{{$item->customer_name}}" >{{$item->customer_name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Invoice" name="invoice" autocomplete="off" required/>
            <label class="labelkh1">Invoice</label>
        </div>
        <div class="mb-3">
            <select class="form-select labelkh1" id="term" name="term">
                <option selected="" disabled>លក្ខខ័ណ្ឌទូទាត់</option>
                <option value="Cash">Cash</option>
                <option value="Transfer">Transfer</option>
                <option value="3D">3D</option>
                <option value="7D">7D</option>
                <option value="30D">30D</option>
            </select>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="ទូរស័ព្ទ" id="order_phone" name="order_phone" autocomplete="off" required/>
            <label class="labelkh1">ទូរស័ព្ទ</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="ឈ្មោះអ្នកទទួល" name="shipto" id="customer_shipto" autocomplete="off" required/>
            <label class="labelkh1">ឈ្មោះអ្នកទទួល</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="ទំនាក់ទំនង" name="attendto" id="customer_attendto" autocomplete="off" required/>
            <label class="labelkh1">ទំនាក់ទំនង</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="អាស័យដ្ធាន" name="address" id="customer_address" autocomplete="off" required/>
            <label class="labelkh1">អាស័យដ្ធាន</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="ទីតាំងអ្នកទទួល" name="arrivelocation" id="customer_arrivelocation" autocomplete="off" required/>
            <label class="labelkh1">ទីតាំងអ្នកទទួល</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="ម៉ោងដឹកជញ្ជួន" name="deliverytime" autocomplete="off" required/>
            <label class="labelkh1">ម៉ោងដឹកជញ្ជួន</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Date" name="order_date" data-provide="datepicker" autocomplete="off" required/>
            <label>Order Date</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Date" name="date" data-provide="datepicker" autocomplete="off" required/>
            <label>Date</label>
        </div>


    </div>
</div>

<script>
    function updateform(){
            var input = document.getElementsByName("order_customer");
            var inputList = Array.prototype.slice.call(input);

            inputList.forEach(ShowResults);

            function ShowResults(value, index, ar) {
                if(value.selected)
                {
                    var phone = value.getAttribute('data-value');
                    document.getElementById("order_phone").value = phone;
                    var address = value.getAttribute('data-address');
                    document.getElementById("customer_address").value = address;
                    var shipto = value.getAttribute('data-shipto');
                    document.getElementById("customer_shipto").value = shipto;
                    var arrivelocation = value.getAttribute('data-arrivelocation');
                    document.getElementById("customer_arrivelocation").value = arrivelocation;
                    var attendto = value.getAttribute('data-attendto');
                    document.getElementById("customer_attendto").value = attendto;
                }
            }
    }

    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')
    console.log(this.getAttribute('data-id'));
      })
    })
</script>

<script>
    $(document).ready(function () {
    $(".select").select2();
});
</script>
