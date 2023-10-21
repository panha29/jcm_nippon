@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];

    $title = 'Edit Customer List';
    $description= 'Ecommerce Edit Customer List Page';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
@section('content')
<style>
    .addcs{
        font-family: 'Khmer', cursive;
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


    <form action="edit-customer" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text addcs">ឈ្មោះ</span>
            <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">

            <input type="text" class="form-control" name="customer_name" value="{{$data['customer_name']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">INVOICE</span>
            <input type="text" class="form-control" name="customer_invoice" value="{{$data['customer_invoice']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">EMAIL</span>
            <input type="text" class="form-control" name="customer_email" value="{{$data['customer_email']}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text addcs">ភេទ</span>
                    <input type="text" class="form-control" name="customer_gender" value="{{$data['customer_gender']}}">
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text addcs addcs">ភ្ញៀវពិសេស</span>
                        <select class="form-select" name="customer_vip">
                            <option selected value="{{$data['customer_vip']}}">{{$data['customer_vip']}}</option>
                            <option value="VIP">YES</option>
                            <option value="No">NO</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text addcs">លេខទូរស័ព្ទ</span>
            <input type="text" class="form-control" name="customer_phone" value="{{$data['customer_phone']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text addcs">អាស័យដ្ធាន</span>
            <input type="text" class="form-control" name="customer_address" value="{{$data['customer_address']}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text addcs">កាលបរិចេ្ឆទ</span>
            <input type="text" class="form-control" name="customer_date"value="<?php echo date('Y/m/d'); ?>">
        </div>

        <div class="input-group mb-3" hidden>
            <span class="input-group-text addcs">Time</span>
            <input type="text" class="form-control" name="customer_time" value="<?php echo date('h:i'); ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text addcs">ចំនួនទឹកប្រាក់</span>
            <input type="number" class="form-control" name="customer_total" step='0.01'>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="customer_image" value="{{$data['customer_image']}}">
        </div>

        <button type="submit" class="btn btn-primary" style="float: right">Save changes</button>
    </form>
    </div>

    @include('admin_dashboard.customer.customer_js')

@endsection
