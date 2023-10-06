@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
        <div class="col-4">
            <select name="product7" id="product7" class="form-control pd-view labelkh1 pd-select7" onchange="updateprice7()">
                <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>}
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" data-value="{{$item->price}}" name="product7" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product7" name="price_product7" style="text-align: center" oninput="pd7function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct7" name="qtyproduct7" style="text-align:center" autocomplete="off" oninput="pd7function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount7" name="pd_discount7" style="text-align:center" onfocus="this.value=''" oninput="pd7function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="total_product7" name="total_price7" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" autocomplete="off" id="total_product7h" name="total_price7h" value="0" style="text-align:center" hidden/>
    </div>
</div>



