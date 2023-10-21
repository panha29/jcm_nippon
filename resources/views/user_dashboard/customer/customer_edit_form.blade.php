@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];

    $title = 'Edit Customer List';
    $description= 'Ecommerce Edit Customer List Page';
@endphp
@extends('user_dashboard/layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/export/buttons.datatables.min.css">
    <link rel="stylesheet" href="/css/export/jquery.datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')
@endsection

@section('js_page')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

@endsection

@section('content')

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
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->


            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" onkeyup="filter_name()" id="myInput"/>
                    <span class="search-magnifier-icon">
                    <i data-acorn-icon="search"></i>
                    </span>
                                <span class="search-delete-icon d-none">
                    <i data-acorn-icon="close"></i>
                    </span>
                </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                <div class="d-inline-block">
                </div>
            </div>
        </div>
        <!-- Controls End -->


    <form action="/User/Update/Customer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">NAME</span>
            <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">

            <input type="text" class="form-control" name="customer_name" value="{{$data['customer_name']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">INVOICE</span>
            <input type="text" class="form-control" name="customer_invoice" value="{{$data['customer_invoice']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">EMAIL</span>
            <input type="text" class="form-control" name="customer_email" value="{{$data['customer_email']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">GENDER</span>
            <input type="text" class="form-control" name="customer_gender" value="{{$data['customer_gender']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">PHONE</span>
            <input type="text" class="form-control" name="customer_phone" value="{{$data['customer_phone']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ADDRESS</span>
            <input type="text" class="form-control" name="customer_address" value="{{$data['customer_address']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">DATE</span>
            <input type="text" class="form-control" name="customer_date" value="{{$data['customer_date']}}">
        </div>
        <div class="input-group mb-3" hidden>
            <span class="input-group-text" id="basic-addon1">Time</span>
            <input type="text" class="form-control" name="customer_time" value="{{$data['customer_time']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">TOTAL</span>
            <input type="text" class="form-control" name="customer_total" value="{{$data['customer_total']}}">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="customer_image" value="{{$data['customer_image']}}">
        </div>

        <button type="submit" class="btn btn-primary" style="float: right">Save changes</button>
    </form>
    </div>

    @include('user_dashboard.customer.customer_js')

@endsection
