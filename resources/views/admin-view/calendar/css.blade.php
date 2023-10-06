<style>
    /* * {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
} */
.dataTables_wrapper .dataTables_filter input {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.70rem;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;

}

.data{
    text-align: center;
}
    .form-control:disabled,
.form-control[readonly] {
    background: rgba(var(--separator-rgb), 0.5) !important;
    border-color: rgba(var(--separator-rgb), 0.5) !important;
    color: var(--muted);
    font-weight: bold;
    -webkit-text-fill-color: #000000 !important;
}


.select2-selection__rendered {
    text-align: center;
    font-size:15px;
    font-weight: 550 !important;
    font-family: 'Nokora', sans-serif !important;
    text-align:center !important;
}
.select2-container .select2-selection--single
    {
        font-size: 1em !important;
        height: auto !important;
        min-height: var(--input-height) !important;
        color: #4e4e4e var(--body) !important;
        box-shadow: initial !important !important;
        background-color: #ffffff var(--foreground) !important;
        border-color: #e6e6e6 var(--separator) !important;
        border-radius: var(--border-radius-md) !important;
        filter: none !important;
        border: 1px solid #ddd !important;
        transition: border-color 0.15s ease-in-out !important;
    }
.select2-dropdown {
        border: 1px solid rgba(var(--primary-rgb), 1) !important;
        padding: 0.75rem !important;
        border-radius: var(--border-radius-md) !important;
        background: var(--foreground) !important;
        margin-top: 3px !important;
    }
.select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px !important;
        position: absolute !important;
        top: 7px !important;
        right: 10px !important;
        width: 20px !important;
    }
    .labelkh{
    vertical-align: middle;
    font-size: 16px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
}
.pjlabelkh{
    vertical-align: middle;
    font-size: 16px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
}
.dataTables_wrapper .dataTables_length select{
    margin-bottom: 1rem;
    font-size: 1em;
    height: auto;
    min-height: var(--input-height);
    color: var(--body);
    box-shadow: initial !important;
    background-color: var(--foreground);
    border-color: var(--separator);
    border-radius: var(--border-radius-md);
    filter: none;
    transition: border-color 0.15s ease-in-out;

}

.dataTables_wrapper .dataTables_length {

    float: right;
    position: relative;
    /* top: -50px; */
}

@media screen and (max-width:414px){
        .order_list_mobile{
            display:none;
        }
        tr{
            font-size: 10px;
        }
        .labelkh{
            font-size: 13px;
        }
        .custom_width{
            width: 50%;
        }
        .dataTables_wrapper .dataTables_length {
        float: right;
        position: relative;
        top: 0px;
    }
}

@media screen and (min-width:912px){
    .order_list_pc{
        display:none;
    }

}

.bkingimg{
    width: 50%;
    padding: 1%;
    border-radius: 15px;
}


</style>
