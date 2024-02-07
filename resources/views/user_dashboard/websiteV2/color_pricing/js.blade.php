<script>
    $(document).ready(function() {
        var table = $('#tablecolor, #ma, #mpm, #wb, #wg, #nsew').DataTable({
            "pageLength": 10,
            "oLanguage": {
            "sLengthMenu": "_MENU_"
            }
        });
        $('#myInput').on( 'keyup', function () {
            table.search( this.value ).draw();
        });
    });
</script>

