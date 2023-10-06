<script>
    $(document).ready(function () {
    $('#testing').DataTable({
        dom: 'Bfrtip',
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        "searching": false,
        pageLength: 50,
    });
});
</script>
<script>
    function filter_name() {
        var input, filter, table, tr, td, i, tbody;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        tbody = document.getElementById("tbody");
        tr = tbody.getElementsByTagName("tr");
        // tr = table.getElementsByTagName("tr");
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
    $(".delete").on("click", function(){
      var id = $(this).attr("data-id");
      $.ajax({
        url: "{{ route('customer.delete') }}",
        data: {"id": id,"_token": "{{ csrf_token() }}"},
        type: 'post',
        success: function(result){
            location.reload();
        }
      });
    });
</script>
