@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Customer List';
    $description= 'Ecommerce Customer List Page';
@endphp
@extends('user_dashboard/layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.semanticui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

@endsection

@section('js_vendor')
@endsection

@section('js_page')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
{{-- <script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.semanticui.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  --}}{{--Export Button--}}
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#customer').DataTable( {
            pageLength: 100,
            ordering: false,
            dom: 'Bfrtip',
            // lengthMenu: [[50, 70, 100,], [50, 70, 100]],
            buttons: [
                // 'copy', 'excel', 'print'
                {
                    extend: 'excelHtml5',
                    title: 'Homefix'
                }
            ],
            rowReorder: {
                selector: 'td:nth-child(2)',
            },
            responsive: true
        } );
    } );
    </script>

@endsection
@section('content')
@include('admin_dashboard/customer/customer_css')

<div class="row">
    <!-- Search Start -->
    <div class="col-sm-12 col-lg-3 col-xxl-2 mb-3 customer_list">
        <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
            <input class="form-control" placeholder="Search" onkeyup="filter_name()" id="myInput" autocomplete="off"/>
            <span class="search-magnifier-icon">
            <i data-acorn-icon="search"></i>
            </span>
                        <span class="search-delete-icon d-none">
            <i data-acorn-icon="close"></i>
            </span>
        </div>
    </div>
</div>
<!-- Controls End -->


<div class="card mobile-display-on customer_list">
    <div class="card-body" >
        <table id="customer" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="">NAME</th>
                    <th class="">ROLE</th>
                    <th class="">PHONE</th>
                    <th class="">ACTION</th>
                </tr>
            </thead>
            <tbody id="tbody">
                @foreach ($data as $item)
                <tr class="" style="background-color: ">
                    <td class="col-1" style="text-align: center"><a href="customer_statement_view/{{$item->customer_name}}">{{$item->customer_name}}</a></td>
                    <td class="col-1" style="text-align: center">{{$item->customer_vip}}</td>
                    <td class="col-1" style="text-align: center">{{$item->customer_phone}}</td>
                    <td class="col-1" style="text-align: center">
                        <a draggable="false" class="btn btn-warning" style="background-color:red" href="destroy/customer_list/id={{$item->id}}">
                            <i data-acorn-icon="bin" data-acorn-size="18" style=""></i>
                        </a>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('user_dashboard.customer.customer_js')

@endsection
