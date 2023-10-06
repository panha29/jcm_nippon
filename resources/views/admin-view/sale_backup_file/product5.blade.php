@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
        <div class="col-4">
            <select name="product5" id="product5" class="form-control pd-view labelkh1 pd-select5" onchange="updateprice5()">
                <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" data-value="{{$item->price}}" name="product5" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product5" name="price_product5" style="text-align: center" oninput="pd5function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct5" name="qtyproduct5" style="text-align:center" autocomplete="off" oninput="pd5function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount5" name="pd_discount5" style="text-align:center" onfocus="this.value=''" oninput="pd5function()"/>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="total_product5" name="total_price5" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" autocomplete="off" id="total_product5h" name="total_price5h" value="0" style="text-align:center" hidden/>
    </div>
</div>




