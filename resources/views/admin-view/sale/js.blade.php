<script>
    function findTotal(){
    var arr = document.getElementsByClassName('pprice');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('balance').value = tot;
}
</script>
<script>
    $(document).ready(function () {
        $(".pd-select0").select2();
        $(".pd-select1").select2();
        $(".pd-select2").select2();
        $(".pd-select3").select2();
        $(".pd-select4").select2();
        $(".pd-select5").select2();
        $(".pd-select6").select2();
        $(".pd-select7").select2();
        $(".user-select1").select2();
    });
</script>
<script>
    function updateprice1(){
        var input = document.getElementsByName("product1");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product1").value = k;


            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice2(){
        var input = document.getElementsByName("product2");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product2").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice2(){
        var input = document.getElementsByName("product2");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product2").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice3(){
        var input = document.getElementsByName("product3");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product3").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice4(){
        var input = document.getElementsByName("product4");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product4").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice5(){
        var input = document.getElementsByName("product5");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product5").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice6(){
        var input = document.getElementsByName("product6");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product6").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice7(){
        var input = document.getElementsByName("product7");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product7").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice8(){
        var input = document.getElementsByName("product8");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product8").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>

<script>
    function updateprice9(){
        var input = document.getElementsByName("product9");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product9").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice10(){
        var input = document.getElementsByName("product10");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product10").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>

<script>
    function updateprice11(){
        var input = document.getElementsByName("product11");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product11").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice12(){
        var input = document.getElementsByName("product12");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product12").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice13(){
        var input = document.getElementsByName("product13");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product13").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice14(){
        var input = document.getElementsByName("product14");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product14").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice15(){
        var input = document.getElementsByName("product15");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product15").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
<script>
    function updateprice16(){
        var input = document.getElementsByName("product16");
        var inputList = Array.prototype.slice.call(input);

        inputList.forEach(ShowResults);

        function ShowResults(value, index, ar) {
            if(value.selected)
            {
                var k = value.getAttribute('data-value');
                document.getElementById("get_price_product16").value = k;
            }
        }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-id')

      })
    })
</script>
@include('admin-view.sale.input_field_value_0')

{{-- <script>
    function pd1function1() {
        var price1 = document.getElementById("get_price_product1").value;
        var qty1 = document.getElementById("qtyproduct1").value;
        var dis1 = document.getElementById("pd_discount1").value;
        var total1 = (+price1 * +qty1) - +dis1;
        document.getElementById("total_product1").value = total1.toFixed(2);
    }
    function pd2function2() {
        var price = document.getElementById("get_price_product2").value;
        var qty = document.getElementById("qtyproduct2").value;
        var dis = document.getElementById("pd_discount2").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product2").value = total.toFixed(2);
    }
    function pd3function3() {
        var price = document.getElementById("get_price_product3").value;
        var qty = document.getElementById("qtyproduct3").value;
        var dis = document.getElementById("pd_discount3").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product3").value = total.toFixed(2);
    }
    function pd4function4() {
        var price = document.getElementById("get_price_product4").value;
        var qty = document.getElementById("qtyproduct4").value;
        var dis = document.getElementById("pd_discount4").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product4").value = total.toFixed(2);
    }
    function pd5function5() {
        var price = document.getElementById("get_price_product5").value;
        var qty = document.getElementById("qtyproduct5").value;
        var dis = document.getElementById("pd_discount5").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product5").value = total.toFixed(2);
    }
    function pd6function6() {
        var price = document.getElementById("get_price_product6").value;
        var qty = document.getElementById("qtyproduct6").value;
        var dis = document.getElementById("pd_discount6").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product6").value = total.toFixed(2);
    }
    function pd7function7() {
        var price = document.getElementById("get_price_product7").value;
        var qty = document.getElementById("qtyproduct7").value;
        var dis = document.getElementById("pd_discount7").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product7").value = total.toFixed(2);
    }
    function pd8function8() {
        var price = document.getElementById("get_price_product8").value;
        var qty = document.getElementById("qtyproduct8").value;
        var dis = document.getElementById("pd_discount8").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product8").value = total.toFixed(2);
    }
    function pd9function9() {
        var price = document.getElementById("get_price_product9").value;
        var qty = document.getElementById("qtyproduct9").value;
        var dis = document.getElementById("pd_discount9").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product9").value = total.toFixed(2);
    }
    function pd10function10() {
        var price = document.getElementById("get_price_product10").value;
        var qty = document.getElementById("qtyproduct10").value;
        var dis = document.getElementById("pd_discount10").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product10").value = total.toFixed(2);
    }
    function pd11function11() {
        var price = document.getElementById("get_price_product11").value;
        var qty = document.getElementById("qtyproduct11").value;
        var dis = document.getElementById("pd_discount11").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product11").value = total.toFixed(2);
    }
    function pd12function12() {
        var price = document.getElementById("get_price_product12").value;
        var qty = document.getElementById("qtyproduct12").value;
        var dis = document.getElementById("pd_discount12").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product12").value = total.toFixed(2);
    }
    function pd13function13() {
        var price = document.getElementById("get_price_product13").value;
        var qty = document.getElementById("qtyproduct13").value;
        var dis = document.getElementById("pd_discount13").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product13").value = total.toFixed(2);
    }
    function pd14function14() {
        var price = document.getElementById("get_price_product14").value;
        var qty = document.getElementById("qtyproduct14").value;
        var dis = document.getElementById("pd_discount14").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product14").value = total.toFixed(2);
    }
    function pd15function15() {
        var price = document.getElementById("get_price_product15").value;
        var qty = document.getElementById("qtyproduct15").value;
        var dis = document.getElementById("pd_discount15").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product15").value = total.toFixed(2);
    }
    function pd16function16() {
        var price = document.getElementById("get_price_product16").value;
        var qty = document.getElementById("qtyproduct16").value;
        var dis = document.getElementById("pd_discount16").value;
        var total = (+price * +qty) - +dis;
        document.getElementById("total_product16").value = total.toFixed(2);
    }
</script> --}}

<script>
    function calculate(){
        var price1 = document.getElementById("get_price_product1").value;
        var price2 = document.getElementById("get_price_product2").value;
        var price3 = document.getElementById("get_price_product3").value;
        var price4 = document.getElementById("get_price_product4").value;
        var price5 = document.getElementById("get_price_product5").value;
        var price6 = document.getElementById("get_price_product6").value;
        var price7 = document.getElementById("get_price_product7").value;
        var price8 = document.getElementById("get_price_product8").value;
        var price9 = document.getElementById("get_price_product9").value;
        var price10 = document.getElementById("get_price_product10").value;
        var price11 = document.getElementById("get_price_product11").value;
        var price12 = document.getElementById("get_price_product12").value;
        var price13 = document.getElementById("get_price_product13").value;
        var price14 = document.getElementById("get_price_product14").value;
        var price15 = document.getElementById("get_price_product15").value;
        var qty1 = document.getElementById("qtyproduct1").value;
        var qty2 = document.getElementById("qtyproduct2").value;
        var qty3 = document.getElementById("qtyproduct3").value;
        var qty4 = document.getElementById("qtyproduct4").value;
        var qty5 = document.getElementById("qtyproduct5").value;
        var qty6 = document.getElementById("qtyproduct6").value;
        var qty7 = document.getElementById("qtyproduct7").value;
        var qty8 = document.getElementById("qtyproduct8").value;
        var qty9 = document.getElementById("qtyproduct9").value;
        var qty10 = document.getElementById("qtyproduct10").value;
        var qty11 = document.getElementById("qtyproduct11").value;
        var qty12 = document.getElementById("qtyproduct12").value;
        var qty13 = document.getElementById("qtyproduct13").value;
        var qty14 = document.getElementById("qtyproduct14").value;
        var qty15 = document.getElementById("qtyproduct15").value;
        var dis1 = document.getElementById("pd_discount1").value;
        var dis2 = document.getElementById("pd_discount2").value;
        var dis3 = document.getElementById("pd_discount3").value;
        var dis4 = document.getElementById("pd_discount4").value;
        var dis5 = document.getElementById("pd_discount5").value;
        var dis6 = document.getElementById("pd_discount6").value;
        var dis7 = document.getElementById("pd_discount7").value;
        var dis8 = document.getElementById("pd_discount8").value;
        var dis9 = document.getElementById("pd_discount9").value;
        var dis10 = document.getElementById("pd_discount10").value;
        var dis11 = document.getElementById("pd_discount11").value;
        var dis12 = document.getElementById("pd_discount12").value;
        var dis13 = document.getElementById("pd_discount13").value;
        var dis14 = document.getElementById("pd_discount14").value;
        var dis15 = document.getElementById("pd_discount15").value;
        var total1 =  (+price1 * +qty1) - +dis1;
        var total2 =  (+price2 * +qty2) - +dis2;
        var total3 =  (+price3 * +qty3) - +dis3;
        var total4 =  (+price4 * +qty4) - +dis4;
        var total5 =  (+price5 * +qty5) - +dis5;
        var total6 =  (+price6 * +qty6) - +dis6;
        var total7 =  (+price7 * +qty7) - +dis7;
        var total8 =  (+price8 * +qty8) - +dis8;
        var total9 =  (+price9 * +qty9) - +dis9;
        var total10 = (+price10 * +qty10) - +dis10;
        var total11 = (+price11 * +qty11) - +dis11;
        var total12 = (+price12 * +qty12) - +dis12;
        var total13 = (+price13 * +qty13) - +dis13;
        var total14 = (+price14 * +qty14) - +dis14;
        var total15 = (+price15 * +qty15) - +dis15;
        document.getElementById("total_product1").value = total1.toFixed(2);
        document.getElementById("total_product2").value = total2.toFixed(2);
        document.getElementById("total_product3").value = total3.toFixed(2);
        document.getElementById("total_product4").value = total4.toFixed(2);
        document.getElementById("total_product5").value = total5.toFixed(2);
        document.getElementById("total_product6").value = total6.toFixed(2);
        document.getElementById("total_product7").value = total7.toFixed(2);
        document.getElementById("total_product8").value = total8.toFixed(2);
        document.getElementById("total_product9").value = total9.toFixed(2);
        document.getElementById("total_product10").value = total10.toFixed(2);
        document.getElementById("total_product11").value = total11.toFixed(2);
        document.getElementById("total_product12").value = total12.toFixed(2);
        document.getElementById("total_product13").value = total13.toFixed(2);
        document.getElementById("total_product14").value = total14.toFixed(2);
        document.getElementById("total_product15").value = total15.toFixed(2);

        var pd1 = document.getElementById("total_product1").value = total1.toFixed(2);
        var pd2 = document.getElementById("total_product2").value = total2.toFixed(2);
        var pd3 = document.getElementById("total_product3").value = total3.toFixed(2);
        var pd4 = document.getElementById("total_product4").value = total4.toFixed(2);
        var pd5 = document.getElementById("total_product5").value = total5.toFixed(2);
        var pd6 = document.getElementById("total_product6").value = total6.toFixed(2);
        var pd7 = document.getElementById("total_product7").value = total7.toFixed(2);
        var pd8 = document.getElementById("total_product8").value = total8.toFixed(2);
        var pd9 = document.getElementById("total_product9").value = total9.toFixed(2);
        var pd10 = document.getElementById("total_product10").value = total10.toFixed(2);
        var pd11 = document.getElementById("total_product11").value = total11.toFixed(2);
        var pd12 = document.getElementById("total_product12").value = total12.toFixed(2);
        var pd13 = document.getElementById("total_product13").value = total13.toFixed(2);
        var pd14 = document.getElementById("total_product14").value = total14.toFixed(2);
        var pd15 = document.getElementById("total_product15").value = total15.toFixed(2);
        var totalpd = +pd1 + +pd2 + +pd3 + +pd4 + +pd5 + +pd6 + +pd7 + +pd8 + +pd9 + +pd10 + +pd11 + +pd12 + +pd13+ +pd14 + +pd15;
        document.getElementById("totalprice").value = totalpd.toFixed(2);

        var ttpr = document.getElementById("totalprice").value;
        var ttdis = document.getElementById("totaldiscount").value;
        var ttdp = document.getElementById("deposit").value;
        var ttbl = +ttpr - +ttdis - +ttdp;
        document.getElementById("balance").value = ttbl.toFixed(2);


    }
</script>

