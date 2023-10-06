@include('admin-view.sale.css')

<div class="row" >
    <div class="col-4">
        <p class="labelkh1">មុខទំនិញ</p>
    </div>
    <div class="col-2">
        <p class="labelkh1">តំលៃរាយ</p>
    </div>
    <div class="col-1">
        <p class="labelkh1">ចំនួន</p>
    </div>
    <div class="col-2">
        <p class="labelkh1">បញ្ចុះតំលៃ</p>
    </div>
    <div class="col-2">
        <p class="labelkh1">តំលៃសរុប</p>
    </div>
    <div class="col-1">
        <p class="labelkh1"></p>
    </div>
</div>


<div class="row mb-3" id="dynamicAddRemove">
    <div class="col-4" >
        <select name="product1" id="product1" class="form-control pd-view labelkh1 pd-select0" onchange="updateprice1()" style="">
            <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" name="product1" id="" data-value="{{$item->price}}" value="{{$item->name}}" value1={{$item->price}}>{{$item->name}}</option>
                @endforeach
        </select>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product1" name="price_product1" style=" text-align:center" oninput="calculate()"  />
    </div>
    <div class="col-1">
        <input type="text" class="form-control product" id="qtyproduct1" name="qtyproduct1" style=" text-align:center" autocomplete="off" oninput="calculate()" />
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="pd_discount1" name="pd_discount1" style=" text-align:center" autocomplete="off" onfocus="this.value=''" oninput="calculate()"  />
    </div>
    <div class="col-2">
        <input type="text" class="form-control product total" id="total_product1" name="total_price1" autocomplete="off"/>
        <input type="text" class="form-control product" id="total_product1h" name="total_price1h" autocomplete="off" style="text-align:center"  hidden/>
    </div>
    <div class="col-1" style="text-align: center">
        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">&nbsp;&nbsp;Add&nbsp;&nbsp;</button>
    </div>
</div>

<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
    if(i<15)
        var div ='<span style="margin-top:1rem;"><div class="row"><div class="col-4"><div><select name="product' + (i+1) +'" id="product' + (i+1) +'" class="form-control pd-view labelkh1 pd-select0 select2" onchange="updateprice' + (i+1) +'()"><option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>@foreach ($product as $item)<option class="labelkh1 center-select" name="product' + (i+1) +'"  data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>@endforeach</select></div></div><div class="col-2"><input type="text" class="form-control product" autocomplete="off" id="get_price_product' + (i+1) +'" name="price_product' + (i+1) +'" style=" text-align:center" oninput="calculate()"  /></div><div class="col-1"><input type="text" class="form-control product" id="qtyproduct' + (i+1) +'" name="qtyproduct' + (i+1) +'" style=" text-align:center" autocomplete="off" oninput="calculate()" /></div><div class="col-2"><input type="text" class="form-control product" id="pd_discount' + (i+1) +'" name="pd_discount' + (i+1) +'" style=" text-align:center" autocomplete="off" oninput="calculate()"  /></div><div class="col-2"><input type="text" class="form-control product total" id="total_product'+ (i+1) +'" name="total_price'+ (i+1) +'" autocomplete="off" style=" text-align:center"  /><input type="text" class="form-control product" id="total_product' + (i+1) +'h" name="total_price' + (i+1) +'h" autocomplete="off" style="text-align:center"  hidden/></div><div class="col-1" style="text-align:center"><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></div></div></span>';
        $('#dynamicAddRemove').append(div)
        $('.pd-select0').select2();
    });

    $(document).on('click', '.remove-input-field', function () {
        $(this).parents("span").remove();
    });
</script>
<script>
    function totalpd() {
        var price = document.getElementById("totalprice").value;
        var discount = document.getElementById("totaldiscount").value;
        var deposit = document.getElementById("deposit").value;
        var total = +price + -discount + -deposit;
        document.getElementById("balance").value = total.toFixed(2);
    }
</script>
