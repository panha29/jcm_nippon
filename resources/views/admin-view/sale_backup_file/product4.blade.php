@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
        <div class="col-4">
            <select name="product4" id="product4" class="form-control pd-view labelkh1 pd-select4" onchange="updateprice4()">
                <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" data-value="{{$item->price}}" name="product4" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product4" name="price_product4" style="text-align: center" oninput="pd4function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct4" name="qtyproduct4" style="text-align:center" autocomplete="off" oninput="pd4function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount4" name="pd_discount4" style="text-align:center" onfocus="this.value=''" oninput="pd4function()"/>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="total_product4" name="total_price4" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" autocomplete="off" id="total_product4h" name="total_price4h" value="0" style="text-align:center" hidden/>
    </div>
</div>



