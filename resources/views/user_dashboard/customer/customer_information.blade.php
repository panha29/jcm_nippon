@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];

    $title = 'Customer Invoice Information';
    $description= 'Customer Invoice Information Page';
@endphp
@extends('user_dashboard/layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])


@section('css')
<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>


@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/select2.full.min.js"></script>



@endsection

@section('js_page')
<script src="/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/forms/controls.datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/js/datatables/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
{{-- <script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script> --}}
<script>
    var minDate, maxDate;

 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[6] );

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
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'YYYY/MM/DD'
     });
     maxDate = new DateTime($('#max'), {
         format: 'YYYY/MM/DD'
     });

     // DataTables initialisation
     var table = $('#customer_info').DataTable({
        pageLength: 50,
        ordering: false,
        dom: 'Bfrtip',
        lengthMenu: [[50, 70, 100,], [50, 70, 100]],
        buttons: [
            // 'copy', 'excel', 'print'
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


     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });

 });
</script>

@endsection

@section('content')
<style>
    .card [class*=card-img-horizontal] {
        border-radius: initial;
        border-top-right-radius: var(--border-radius-lg);
        border-bottom-right-radius: var(--border-radius-lg);
        border-bottom-left-radius: initial;
        border-top-left-radius: initial;
        height: 100%;
    }
    .modal-header{
        border-bottom: 0 !important;
    }
    .modal-content {
    border-radius: var(--border-radius-lg);
    background: var(--foreground);
    opacity: 0.1;
    display: contents;
}
.modal-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
    color: white;
}
    .preview{
    margin-left: auto;
    margin-right: auto;
    display: block;
}
    .dt-button {
    margin-top: -65% !important;
    font-family: var(--font);
    padding: 10px 20px;
    display: flex;
    font-size: 1em;
    line-height: 1rem;
    border: initial;
    box-shadow: initial !important;
    transition: all var(--transition-time-short);
    transition-property: color, background-color, background-image, background;
    border-radius: var(--border-radius-md);
    color: var(--light-text) !important;
    white-space: nowrap;
    background-color: var(--success) !important;
    }
.dt-buttons {
    float: right !important;
    }

    .dataTables_filter{
        display: none;
    }
    th{
        text-align: center !important;
    }
    td{
        height: 50px;
        vertical-align:middle;
    }
</style>
<div class="container">
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                    <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Home</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title" style="width: 400px">{{ $title }}</h1>
                </div>
            </div>
            <!-- Title End -->


        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Controls Start ON-->
    <div class="row mb-2">
        <!-- Search Start -->
        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1 mobile-display-on">
            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                <input class="form-control" placeholder="Search" onkeyup="filter_name()" id="myInput"/>
                <span class="search-magnifier-icon"><i data-acorn-icon="search"></i></span>
                <span class="search-delete-icon d-none"><i data-acorn-icon="close"></i></span>
            </div>
        </div>
        <!-- Search End -->

        <!-- Search Start -->
        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1 mobile-display-off">
            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                <input class="form-control" placeholder="Search" onkeyup="filter_name_mobile()" id="mymobileInput"/>
                <span class="search-magnifier-icon"><i data-acorn-icon="search"></i></span>
                <span class="search-delete-icon d-none"><i data-acorn-icon="close"></i></span>
            </div>
        </div>
        <!-- Search End -->

        <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
            <div class="d-inline-block">

                <!-- Export Dropdown Start -->


                <!-- Export Dropdown End -->


            </div>
        </div>
    </div>
    <!-- Controls End -->
    <!-- Mobile Display ON -->
    <div class="card mobile-display-on">
        <div class="card-body">
            <table id="customer_info" class="display compact table" style="width:100%">
                <div class="row mb-1">
                    <div class="col-md-2 custom_width">
                        <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #f9f9f9;border: 1px solid lightgray">
                            <input class="form-control" placeholder="Start" id="min" autocomplete="off" name="min"/>
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 custom_width">
                        <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #f9f9f9;border: 1px solid lightgray">
                            <input class="form-control" placeholder="End" id="max" autocomplete="off" name="max" />
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th class="">No</th>
                        <th class="">NAME</th>
                        <th class="">INVOICE</th>
                        <th class="">PHONE</th>
                        <th class="">EMAIL</th>
                        <th class="">GENDER</th>
                        <th class="">SEEN DATE</th>
                        <th class="">TOTAL</th>
                        <th class="">IMAGE</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($customer as $item)
                        <tr class="" style="background-color: ">
                            <td class="col-1" style="text-align: center;">{{$loop->iteration}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_name}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_invoice}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_email}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_gender}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_date}}</td>
                            <td class="col-1" style="text-align: center">$ {{number_format($item->customer_total,2)}}</td>
                            <td class="col-1" style="text-align: center"><img src="{{ url('public/Image/'.$item->customer_image) }}" width="50px" height="50px" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}" onerror="this.style.display = 'none'">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Mobile Display ON -->

    <!-- Mobile Display OFF -->
    @foreach ($customer as $item)
    <div class="card mb-2 mobile-display-off" id="filter_search">
        <div class="row g-0 h-100 sh-lg-9 position-relative">
            <div class="col-3 py-4 py-lg-0">
                <div class="ps-3 pe-4 h-100">
                    <div class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                       <U> <b>No. {{$loop->iteration}}</b></U>
                    </div>
                </div>
            </div>
            <div class="col py-4 py-lg-0">
                <div class="h-100">
                    <div class="row g-0 align-content-center">
                        <div class="col-11 col-lg-4 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center">
                            {{$item->customer_name}}
                            <div class="text-small text-muted text-truncate position">{{$item->customer_phone}}</div>
                            <div class="text-small text-muted text-truncate position">{{$item->customer_email}}</div>
                            <div class="text-small text-muted text-truncate position">{{$item->customer_gender}}</div>
                        </div>
                        <div class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                            <div class="lh-1 text-alternate">{{$item->customer_address}}</div>
                        </div>
                        <div class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                            <div class="lh-1 text-alternate">$ {{number_format($item->customer_total,2)}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ url('public/Image/'.$item->customer_image) }}" class="card-img card-img-horizontal sw-11 " style="height:150px; width:35% !important;" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}" onerror="this.style.display = 'none'">
            {{-- <a href="" draggable="false"></a> --}}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="" style="display: inline-flex;">
                        <img src="{{ url('public/Image/'.$item->customer_image) }}" style="width: 100%">
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- EndMobile Display OFF -->

</div>
<!-- Modal -->
@foreach ($customer as $item)
<div class="modal fade" id="preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <img src="{{ url('public/Image/'.$item->customer_image) }}" width="100%" class="preview" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- script to set display property -->
@include('user_dashboard.customer.customer_js')


@endsection
