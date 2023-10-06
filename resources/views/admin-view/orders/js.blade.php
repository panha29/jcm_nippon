{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

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


