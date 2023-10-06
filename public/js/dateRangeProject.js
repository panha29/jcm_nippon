let minDate, maxDate, minDateex, maxDateex;

// Custom filtering function which will search data in column four between two values
DataTable.ext.search.push(function(settings, data, dataIndex) {
    let min = minDate.val();
    let max = maxDate.val();
    let date = new Date(data[4]);

    let minex = minDateex.val();
    let maxex = maxDateex.val();
    let dateex = new Date(data[4]);

    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
        // (minex === null && maxex === null) ||
        // (minex === null && dateex <= maxex) ||
        // (minex <= dateex && maxex === null) ||
        // (minex <= dateex && dateex <= maxex)
    ) {
        return true;
    }
    return false;
});

// Create date inputs
minDate = new DateTime('#min', {
    format: 'MM/DD/YYYY'
});
maxDate = new DateTime('#max', {
    format: 'MM/DD/YYYY'
});

minDateex = new DateTime('#minex', {
    format: 'MM/DD/YYYY'
});
maxDateex = new DateTime('#maxex', {
    format: 'MM/DD/YYYY'
});
// DataTables initialisation
let table = $('#project_table').DataTable({
    // pageLength: 50,
    visible: false,
    ordering: false,
    dom: 'Bfrtip',
    drawCallback: function() {
        new AcornIcons().replace();
    },
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

let tableex = $('#project_table_export').DataTable({
    // pageLength: 50,
    visible: false,
    ordering: false,
    dom: 'Bfrtip',
    bPaginate: false,
    bLengthChange: false,
    bInfo: false,
    bAutoWidth: false,
    drawCallback: function() {
        new AcornIcons().replace();
    },
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
document.querySelectorAll('#min, #max, #minex, #maxex').forEach((el) => {
    el.addEventListener('change', () => table.draw());
});