@php
    $html_tag_data = [];
    $title = 'Order List';
    $description= 'Ecommerce Order List Page';
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])


@section('css')
<link rel="stylesheet" href="/css/vendor/select2.css"/>
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
<link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/select2.full.min.js"></script>
@endsection

@section('js_page')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/datatables/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="/js/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="/js/forms/controls.datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/js/dateRange.js"></script>
@endsection

@section('content')
@include('admin-view.orders.order_css')

<style>
    .dataTables_filter{
    display: none !important;
    }
    body{
        background-color: #e7e7e7;
    }
    th{
        text-align: center !important;
    }
    tr{
        vertical-align: middle;
    }
</style>
<div class="">
    <div class="page-title-container">
        <div class="row">
            <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                    <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Home</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                </div>
            </div>

            <div class="col-3 d-flex align-items-end justify-content-end">
                <section class="scroll-section" id="default">
                </section>
            </div>
        </div>
    </div>
    <!-- Title and Top Buttons End -->

   <div class="row">
        <div class="col">
             <!-- Controls Start -->
            <div class="row mb-2">
                <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                        <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_name()" autocomplete="off" />
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
        </div>
        {{-- <div class="col">
            <a href="List/Issue" class="btn btn-success" style="float: right">ISSUE INVOICE</a>
        </div> --}}
   </div>

    <!-- Calendar List Start -->
    <div class="card">
        <div class="card-body">
            <table id="filter_table" class="ui celled table" style="width:100%">
                <div class="row mb-1">
                    <div class="col-md-1 custom_width">
                        <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                            <input class="form-control" placeholder="Start" id="min" autocomplete="off" />
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1 custom_width">
                        <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                            <input class="form-control" placeholder="End" id="max" autocomplete="off" />
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>INVOICE NO</th>
                        <th>NAME</th>
                        <th class="order_list_mobile">PHONE</th>
                        <th>DATE</th>
                        <th class="order_list_mobile">TOTAL</th>
                        <th class="order_list_mobile">DEPOSIT</th>
                        <th>BALANCE</th>
                        <th>PAID</th>
                        <th class="order_list_pc">EDIT</th>
                        <th class="order_list_mobile"></th>
                    </tr>
                </thead>
                <tbody id="tbody">

                    @foreach ($item as $data)

                     <?php if ($data->issued_paid == "") { ?>
                        <tr>
                            <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                            <td class="col-1" style="text-align: center">#{{$data->invoice}}</td>
                            <td class="col-1" style="text-align: left"><a href="Statement/{{$data->order_customer}}" class="labelkh" target="_blank">{{$data->order_customer}} </a></td>
                            <td class="col-1 order_list_mobile" style="text-align: center">{{$data->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$data->date}}</td>
                            <td class="col-1 order_list_mobile" style="text-align: center">{{number_format($data->totalprice,2)}}</td>
                            <td class="col-1 order_list_mobile" style="text-align: center">{{$data->deposit}}</td>
                            <td class="col-1" style="text-align: center"><b>{{number_format($data->balance,2)}}</b></td>
                            <td class="col-1" style="text-align: center"><b>{{$data->issued_paid}}</b></td>
                            <td class="col-1 order_list_pc" style="text-align: center">
                                <div class="dropdown">
                                    {{-- <button class="btn btn-primary dropdown-toggle mb-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button> --}}
                                    <a type="button" href="{{$data->id}}" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                                    <div class="dropdown-menu">
                                    <a draggable="false" class="dropdown-item print" target="_blank" href="Invoice/{{$data->id}}">
                                        <i data-acorn-icon="eye" data-acorn-size="18"></i>
                                        Print
                                    </a>
                                    <a draggable="false" class="dropdown-item" href="destroy/{{$data->id}}">
                                        Delete
                                    </a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-1 order_list_mobile" style="text-align: center;">
                                <a draggable="false" class="print btn btn-outline-primary" style="display:inline-grid" target="_blank" href="Issued/Invoice/{{$data->id}}">
                                    <i data-acorn-icon="edit" data-acorn-size="18"></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('admin-view.orders.js')


@endsection