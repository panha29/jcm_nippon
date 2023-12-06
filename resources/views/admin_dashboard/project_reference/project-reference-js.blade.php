<script>
    $(document).ready(function() {
    var table = $('#project').DataTable( {
        pageLength: 20,
        ordering: false,
        dom: 'Bfrtip',
        drawCallback: function() {
            new AcornIcons().replace();
        },
        rowReorder: {
            selector: 'td:nth-child(2)',
        },

        responsive: true
    } );
    $('#myInput').on( 'keyup', function () {
        table.search( this.value ).draw();
    } );
} );
</script>
<script>
    var loadFile1 = function(event) {
    var pdimage1 = document.getElementById('pdimage1');
        pdimage1.height =134;
        pdimage1.width =134;
        pdimage1.src = URL.createObjectURL(event.target.files[0]);
        pdimage1.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadFile2 = function(event) {
    var pdimage2 = document.getElementById('pdimage2');
        pdimage2.height =134;
        pdimage2.width =134;
        pdimage2.src = URL.createObjectURL(event.target.files[0]);
        pdimage2.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadFile3 = function(event) {
    var pdimage3 = document.getElementById('pdimage3');
        pdimage3.height =134;
        pdimage3.width =134;
        pdimage3.src = URL.createObjectURL(event.target.files[0]);
        pdimage3.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadFile4 = function(event) {
    var pdimage4 = document.getElementById('pdimage4');
        pdimage4.height =134;
        pdimage4.width =134;
        pdimage4.src = URL.createObjectURL(event.target.files[0]);
        pdimage4.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
