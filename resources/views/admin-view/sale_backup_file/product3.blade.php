@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
    <div class="col-4">
        <select name="product3" id="product3" class="form-control pd-view labelkh1 pd-select3" onchange="updateprice3()">
            <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>
            @foreach ($product as $item)
                <option class="labelkh1 center-select" name="product3" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product3" name="price_product3" style="text-align: center" oninput="pd3function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct3" name="qtyproduct3" style="text-align:center" autocomplete="off" oninput="pd3function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount3" name="pd_discount3" style="text-align:center" onfocus="this.value=''" oninput="pd3function()"/>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product"  autocomplete="off" id="total_product3" name="total_price3" style="text-align:center" value="0"/>
        <input type="text" class="form-control product"  autocomplete="off" id="total_product3h" name="total_price3h" value="0" style="text-align:center" hidden/>
    </div>
</div>




