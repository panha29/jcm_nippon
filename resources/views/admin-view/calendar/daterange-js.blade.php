<script>
    var minDate, maxDate, minDatepj, maxDatepj;
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        var min = minDate.val();
        var max = maxDate.val();
        // var minpj = minDatepj.val();
        // var maxpj = maxDatepj.val();

        let minpj = ($('#minpj').val() == '') ?
            null :
            new Date($('#minpj').val());

        let maxpj = ($('#maxpj').val() == '') ?
            null :
            new Date($('#maxpj').val());


        var date = new Date(data[3]);
        var datepj = new Date(data[10]);
        if (
            (min === null && max === null) ||
            (min === null && date <= max) ||
            (min <= date && max === null) ||
            (min <= date && date <= max)
        )
            if (
                (minpj === null && maxpj === null) ||
                (minpj === null && datepj <= maxpj) ||
                (minpj <= datepj && maxpj === null) ||
                (minpj <= datepj && datepj <= maxpj)
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
    minDatepj = new DateTime($('#minpj'), {
        format: 'MM/DD/YYYY'
    });
    maxDatepj = new DateTime($('#maxpj'), {
        format: 'MM/DD/YYYY'
    });
    var table1 = $('#filter_table').DataTable({
        // pageLength: 50,
        visible: false,
        ordering: false,
        dom: 'Bfrtip',
        drawCallback: function() {
            new AcornIcons().replace();
        },
        // lengthMenu: [
        //     [50, 70, 100, ],
        //     [50, 70, 100]
        // ],
        buttons: [{
            extend: 'excelHtml5',
            title: 'KesorBoutique',
            messageTop: 'អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។',
        }],
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        responsive: true,

    });
    $('#min, #max, #minpj ,#maxpj').on('change', function() {
        table1.draw();
    });
    var table2 = $('#filter_pj').DataTable({
        pageLength: 100,
        visible: false,
        ordering: false,
        dom: 'Bfrtip',
        drawCallback: function() {
            new AcornIcons().replace();
        },
        // lengthMenu: [
        //     [50, 70, 100, ],
        //     [50, 70, 100]
        // ],
        buttons: [{
            extend: 'excelHtml5',
            title: 'KesorBoutique',
            messageTop: 'អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។',
        }],
        rowReorder: {
            selector: 'td:nth-child(2)',
        },
        responsive: true
    });
    $('#min, #max, #minpj ,#maxpj').on('change', function() {
        table2.draw();
    });
});
</script>
