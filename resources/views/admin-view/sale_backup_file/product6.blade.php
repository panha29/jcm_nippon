@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
        <div class="col-4">
            <select name="product6" id="product6" class="form-control pd-view labelkh1 pd-select6" onchange="updateprice6()">
                <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>}
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" data-value="{{$item->price}}" name="product6" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product6" name="price_product6" style="text-align: center" oninput="pd6function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct6" name="qtyproduct6" style="text-align:center" autocomplete="off" oninput="pd6function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount6" name="pd_discount6" style="text-align:center" onfocus="this.value=''" oninput="pd6function()"/>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="total_product6" name="total_price6" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" autocomplete="off" id="total_product6h" name="total_price6h" value="0" style="text-align:center" hidden/>
    </div>
</div>



