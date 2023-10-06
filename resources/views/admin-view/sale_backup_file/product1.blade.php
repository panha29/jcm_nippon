@include('admin-view.sale.css')

<div class="row" id="inputFormRow">
    <div class="col-3">
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
</div>
{{-- <div class="row" id="inputFormRow">
    <div class="col-4">
        <select name="product1" id="product1" class="form-control pd-view labelkh1 pd-select1" onchange="updateprice()">
            <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" name="product1" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
        </select>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product1" name="price_product1" style="text-align: center" oninput="pd1function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="qtyproduct1" name="qtyproduct1" style="text-align:center" autocomplete="off" oninput="pd1function()"/>
    </div>

    <div class="col-2">
        <input type="text" class="form-control product" id="pd_discount1" name="pd_discount1" style="text-align:center" autocomplete="off" onfocus="this.value=''" oninput="pd1function()"/>
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="total_product1" name="total_price1" autocomplete="off" style="text-align:center" value="0"/>
        <input type="text" class="form-control product" id="total_product1h" name="total_price1h" autocomplete="off" style="text-align:center" value="0" hidden/>
    </div>
</div> --}}
{{-- <table class="table table-bordered" id="dynamicAddRemove">
    <tr>
        <td><select name="product0" id="product0" class="form-control pd-view labelkh1 pd-select1" onchange="updateprice()" style="">
                <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                    @foreach ($product as $item)
                        <option class="labelkh1 center-select" name="product0" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
            </select>
        </td>

        <td>
            <input type="text" class="form-control product" autocomplete="off" id="get_price_product0" name="price_product0" style=" text-align:center" oninput="pd0function()"  />
        </td>
        <td>
            <input type="text" class="form-control product" id="qtyproduct0" name="qtyproduct0" style=" text-align:center" autocomplete="off" oninput="pd0function()" />

        </td>
        <td>
            <input type="text" class="form-control product" id="pd_discount0" name="pd_discount0" style=" text-align:center" autocomplete="off" onfocus="this.value=''" oninput="pd0function()"  />

        </td>
        <td>
            <input type="text" class="form-control product" id="total_product0" name="total_price0" autocomplete="off" style=" text-align:center" value="0" />

            <input type="text" class="form-control product" id="total_product0h" name="total_price0h" autocomplete="off" style="text-align:center" value="0" hidden/>
        </td>
        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button></td>
    </tr>
</table>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><select name="product' + i +'" id="product' + i +'" class="form-control pd-view labelkh1 pd-select1" onchange="updateprice()" style="" ><option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>@foreach ($product as $item)<option class="labelkh1 center-select" name="product' + i +'"  data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>@endforeach</select></td><td><input type="text" class="form-control product" autocomplete="off" id="get_price_product' + i +'" name="price_product' + i +'" style=" text-align:center" oninput="pd0function()"  /></td><td><input type="text" class="form-control product" id="qtyproduct' + i +'" name="qtyproduct' + i +'" style=" text-align:center" autocomplete="off" oninput="pd0function()" /></td><td><input type="text" class="form-control product" id="pd_discount' + i +'" name="pd_discount' + i +'" style=" text-align:center" autocomplete="off" oninput="pd0function()"  /></td><td><input type="text" class="form-control product" id="total_product' + i +'" name="total_price' + i +'" autocomplete="off" style=" text-align:center" value="0" /><input type="text" class="form-control product" id="total_product' + i +'h" name="total_price' + i +'h" autocomplete="off" style="text-align:center" value="0" hidden/></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
    );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script> --}}

<div class="row mb-3" id="dynamicAddRemove">
    <div class="col-3 select_2" id="select2">
        <select name="product0" id="product0" class="form-control pd-view labelkh1 pd-select0" onchange="updateprice0()" style="">
            <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                @foreach ($product as $item)
                    <option class="labelkh1 center-select" name="product0" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
        </select>
    </div>
    <!-- Basic Single Start -->

    {{-- <div class="col-3" id="select_2">
        <div>
            <select name="product0" id="select2Basic" class="form-control pd-view labelkh1 pd-select0" onchange="updateprice0()" style="">
                <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                    @foreach ($product as $item)
                        <option class="labelkh1 center-select" name="product0" data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
            </select>
        </div>
    </div> --}}
    <!-- Basic Single End -->

    <div class="col-2">
        <input type="text" class="form-control product" autocomplete="off" id="get_price_product0" name="price_product0" style=" text-align:center" oninput="pd0function0()"  />
    </div>
    <div class="col-1">
        <input type="text" class="form-control product" id="qtyproduct0" name="qtyproduct0" style=" text-align:center" autocomplete="off" oninput="pd0function0()" />
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="pd_discount0" name="pd_discount0" style=" text-align:center" autocomplete="off" onfocus="this.value=''" oninput="pd0function0()"  />
    </div>
    <div class="col-2">
        <input type="text" class="form-control product" id="total_product0" name="total_price0" autocomplete="off" style=" text-align:center" value="0" />
        <input type="text" class="form-control product" id="total_product0h" name="total_price0h" autocomplete="off" style="text-align:center" value="0" hidden/>
    </div>
    {{-- <div class="col-2" style="text-align: center">
        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button>
    </div> --}}
</div>
{{-- <script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<span style="margin-top:1rem;"><div class="row"><div class="col-3" id="select2"><div><select name="product' + i +'" id="product' + i +'" class="form-control pd-view labelkh1 pd-select' + i +'" onchange="updateprice' +i+'()" style="" ><option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>@foreach ($product as $item)<option class="labelkh1 center-select" name="product' + i +'"  data-value="{{$item->price}}" value="{{$item->name}}">{{$item->name}}</option>@endforeach</select></div></div><div class="col-2"><input type="text" class="form-control product" autocomplete="off" id="get_price_product' + i +'" name="price_product' + i +'" style=" text-align:center" oninput="pd' +i+'function' +i+'()"  /></div><div class="col-1"><input type="text" class="form-control product" id="qtyproduct' + i +'" name="qtyproduct' + i +'" style=" text-align:center" autocomplete="off" oninput="pd' +i+'function' +i+'()" /></div><div class="col-2"><input type="text" class="form-control product" id="pd_discount' + i +'" name="pd_discount' + i +'" style=" text-align:center" autocomplete="off" oninput="pd' +i+'function' +i+'()"  /></div><div class="col-2"><input type="text" class="form-control product" id="total_product' + i +'" name="total_price' + i +'" autocomplete="off" style=" text-align:center" value="0" /><input type="text" class="form-control product" id="total_product' + i +'h" name="total_price' + i +'h" autocomplete="off" style="text-align:center" value="0" hidden/></div><div class="col-1"><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></div></div></span>'
    );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents("span").remove();
    });
</script> --}}

