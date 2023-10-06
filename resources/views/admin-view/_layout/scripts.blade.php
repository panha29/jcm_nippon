<!-- Vendor Scripts Start -->
{{-- <script src="/js/jquery.min.js"></script> --}}
{{-- <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/js/vendor/OverlayScrollbars.min.js"></script>
<script src="/js/vendor/autoComplete.min.js"></script>
<script src="/js/vendor/clamp.min.js"></script>
<script src="/icon/acorn-icons.js"></script>
<script src="/icon/acorn-icons-interface.js"></script>
<script src="/icon/acorn-icons-commerce.js"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('js_vendor')
<!-- Vendor Scripts End -->
<!-- Template Base Scripts Start -->
<script src="/js/base/helpers.js"></script>
<script src="/js/base/globals.js"></script>
<script src="/js/base/nav.js"></script>
<script src="/js/base/search.js"></script>
<script src="/js/base/settings.js"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->
@yield('js_page')
<script src="/js/common.js"></script>
<script src="/js/scripts.js"></script>
<!-- Page Specific Scripts End -->

{{-- <script>
    var minDate, maxDate;
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[3] );
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
 $(document).ready(function() {
    minDate = new DateTime($('#min'), {
        format: 'MM/DD/YYYY'
     });
    maxDate = new DateTime($('#max'), {
        format: 'MM/DD/YYYY'
     });
     var table = $('#filter_table').DataTable({
        pageLength: 50,
        visible: false,
        ordering: false,
        dom: 'Bfrtip',
        lengthMenu: [[50, 70, 100,], [50, 70, 100]],
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'KesorBoutique',
                messageTop: 'អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។',
            }
        ],
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        responsive: true
     });
     $('#min, #max').on('change', function () {
         table.draw();
     });
 });
</script> --}}

{{-- <script>
    var minDate, maxDate,minDatepj,maxDatepj;
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var minpj = minDatepj.val();
         var maxpj = maxDatepj.val();
         var date = new Date(data[3]);
         var datepj = new Date(data[10]);
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         )
         if(
            ( minpj === null && maxpj === null ) ||
             ( minpj === null && datepj <= maxpj ) ||
             ( minpj <= datepj   && maxpj === null ) ||
             ( minpj <= datepj   && datepj <= maxpj )
         )
         {
             return true;
         }
         return false;


     }
 );
 $(document).ready(function() {
    minDate = new DateTime($('#min'), {
        format: 'MM/DD/YYYY'
    });
    maxDate = new DateTime($('#max'), {
         format: 'MM/DD/YYYY'
    });
    minDatepj = new DateTime($('#minpj'), {
        format: 'MM/DD/YYYY'
    });
    maxDatepj = new DateTime($('#maxpj'), {
        format: 'MM/DD/YYYY'
    });
    var table1 = $('#filter_table').DataTable({
        pageLength: 50,
        visible: false,
        ordering: false,
        dom: 'Bfrtip',
        lengthMenu: [[50, 70, 100,], [50, 70, 100]],
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'KesorBoutique',
                messageTop: 'អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។',
            }
        ],
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        responsive: true
     });
     $('#min, #max, #minpj ,#maxpj').on('change', function () {
         table1.draw();
     });
     var table2 = $('#filter_pj').DataTable({
        pageLength: 50,
        visible: false,
        ordering: false,
        dom: 'Bfrtip',
        lengthMenu: [[50, 70, 100,], [50, 70, 100]],
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'KesorBoutique',
                messageTop: 'អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។',
            }
        ],
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        responsive: true
     });
     $('#min, #max, #minpj ,#maxpj').on('change', function () {
         table2.draw();
     });
 });
</script> --}}
















