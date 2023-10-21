<script>
    function filter_name() {
        var input, filter, table, tr, td, i, tbody;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        tbody = document.getElementById("tbody");
        tr = tbody.getElementsByTagName("tr");
        for (var i = 0; i < tr.length; i++) {
            var tds = tr[i].getElementsByTagName("td");
            var flag = false;
            for(var j = 0; j < tds.length; j++){
            var td = tds[j];
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                flag = true;
            }
            }
            if(flag){
                tr[i].style.display = "";
            }
            else {
                tr[i].style.display = "none";
            }
        }
    }
</script>

<script>
    function filter_name_mobile() {
        var input, filter, table, tr, td, i, tbody, div, card;
        input = document.getElementById("mymobileInput");
        filter = input.value.toUpperCase();
        tbody = document.getElementById("tbody");
        tr = tbody.getElementsByTagName("tr");
        cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            var divs = cards[i].getElementsByTagName("div");
            var flag = false;
            for(var j = 0; j < divs.length; j++){
            var div = divs[j];
            if (div.innerHTML.toUpperCase().indexOf(filter) > -1) {
                flag = true;
            }
            }
            if(flag){
                cards[i].style.display = "";
            }
            else {
                cards[i].style.display = "none";
            }
        }
    }
</script>



