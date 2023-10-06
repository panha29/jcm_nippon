<script type="text/javascript">



    $(document).ready(function(){
        $("body").on("click",".add_new_frm_field_btn", function (){ 
          console.log("clicked");
          var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
          $(".form_field_outer").append(`
      
            <div class="row form_field_outer_row" id="inputFormRow" >
                <div class="col-2">
                    <select name="product${index}" id="product${index}" class="form-control pd-view labelkh1 pd-select${index}">
                        <option class="labelkh1 center-select" value="" disabled selected>ជ្រើសរើស</option>
                            @foreach ($product as $item)
                                <option class="labelkh1 center-select" value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" autocomplete="off" placeholder="Price" id="get_price_product${index}" name="price_product${index}" style="text-align: center"/> 
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" placeholder="Discount" id="pd_discount${index}" name="pd_discount${index}" style="text-align:center" autocomplete="off"/> 
                </div>
                <div class="col-2">
                    <select name="qtyproduct${index}" id="qtyproduct${index}" class="form-control" onchange="totalprice${index}(this.value)" style="text-align: center">
                        <option value="" disabled selected>Qty</option>
                        <option value="1" name="quantity1">1</option>
                        <option value="2" name="quantity2">2</option>
                        <option value="3" name="quantity3">3</option>
                        <option value="4" name="quantity4">4</option>
                        <option value="5" name="quantity5">5</option>
                    </select>
                </div>
                <div class="col-2 mb-4">
                    <input type="text" class="form-control" placeholder="Total" id="total_product${index}" name="total_price${index}" value="0" autocomplete="off" style="text-align:center"/> 
                </div>
                <div class="col-2">
                    <button class="btn_round remove_node_btn_frm_field btn btn-warning" disabled>
                        Delete Row
                    </button>
                </div>
            </div>
            `);
    
          $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
          $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
        });
     });
    
    $(document).ready(function(){
        //===== delete the form fieed row
        $("body").on("click", ".remove_node_btn_frm_field", function () {
          $(this).closest(".form_field_outer_row").remove();
          console.log("success");
        });
      });
    </script>
    <script>
     
    </script>
    <script>
        function totalprice2(val) {
            var product2 = document.getElementById("get_price_product2").value;
            var pd_discount2 = document.getElementById("pd_discount2").value / 100;
            var each_discount = product2 - (product2 * pd_discount2)
            var tot_price = val * each_discount ;
            /*display the result*/
            var divobj = document.getElementById('total_product2');
            divobj.value = tot_price.toFixed(2);
        }
    </script>
    {{-- <script>
        $(document).ready(function () {
            $(".pd-select1").select2();
        });
    </script> 
    <script>
        $(document).ready(function () {
            $(".pd-select2").select2();
        });
    </script>  --}}