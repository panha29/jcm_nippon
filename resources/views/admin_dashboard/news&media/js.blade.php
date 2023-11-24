<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
    if(i<15)
        var div ='<span style="margin-top:1rem;"><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></span>';
        $('#dynamicAddRemove').append(div)
        $('.pd-select0').select2();
    });

    $(document).on('click', '.remove-input-field', function () {
        $(this).parents("span").remove();
    });
</script>
