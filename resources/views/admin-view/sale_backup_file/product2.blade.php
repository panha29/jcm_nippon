@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
        <div class="col-4">
            <select name="product2" id="product2" class="form-control pd-view labelkh1 pd-select2" onchange="updateprice2()">
                <option class="labelkh1" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" name="product2" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product2" name="price_product2" style="text-align: center" oninput="pd2function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct2" name="qtyproduct2" style="text-align:center" autocomplete="off" oninput="pd2function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="pd_discount2" name="pd_discount2" style="text-align:center" onfocus="this.value=''" oninput="pd2function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="total_product2" name="total_price2" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" autocomplete="off" id="total_product2h" name="total_price2h" value="0" style="text-align:center" hidden/>
    </div>
</div>


{{-- <script>
    $('#get_price_product2, #qtyproduct2, #total_product2, #pd_discount2').on('input',function() {
    var pd2 = parseInt($('#get_price_product2').val());
    var qty2 = parseInt($('#qtyproduct2').val());
    $('#total_product2').val((pd2 * qty2).toFixed(2));
    var disc2 = parseInt($('#pd_discount2').val());
    var totpd2 = parseInt($('#total_product2').val());
    $('#total_product2').val((totpd2 - disc2).toFixed(2));
});
</script> --}}

<script>

</script>
<script>
    $('#pd_discount2, #get_price_product2').on('input',function() {
    var dis = parseInt($('#pd_discount2').val());
    var price = parseInt($('#get_price_product2').val());
    $('#total_product2').val((price - dis).toFixed(2));
});
</script>
