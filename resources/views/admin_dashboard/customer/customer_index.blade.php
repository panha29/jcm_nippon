@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];

    $title = 'Customer Invoice List';
    $description= 'Customer Invoice List Page';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/export/buttons.datatables.min.css">
    <link rel="stylesheet" href="/css/export/jquery.datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.semanticui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js_vendor')
@endsection

@section('js_page')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#customer').DataTable( {
            pageLength: 50,
            ordering: false,
            dom: 'Bfrtip',
            lengthMenu: [[50, 70, 100,], [50, 70, 100]],
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
<style>
    .addcs{
        font-family: 'Khmer', cursive;
    }
</style>

@include('admin_dashboard/customer/customer_css')
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
                    <input class="form-control" placeholder="Search" onkeyup="filter_name()" id="myInput" autocomplete="off"/>
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

                    <!-- Export Dropdown Start -->
                    <div class="col-auto mb-3 mb-md-0 me-auto">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#existingcustomer">
                            Add Existing Customer
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createcustomer">
                            Create Customer
                        </button>
                                        <!-- Modal -->
                        <div class="modal fade" id="createcustomer" tabindex="-1" aria-labelledby="new_customer" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="new_customer">Fill Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="create-customer" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">ឈ្មោះ</span>
                                                <input type="text" class="form-control" name="customer_name" required>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">INVOICE</span>
                                                        <input type="text" class="form-control" name="customer_invoice">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text addcs">បញ្ចុះតំលៃ</span>
                                                        <input type="text" class="form-control" name="customer_discount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">EMAIL</span>
                                                <input type="text" class="form-control" name="customer_email">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text addcs">ភេទ</span>
                                                        <select class="form-select" name="customer_gender">
                                                            <option></option>
                                                            <option value="Male" class="addcs">ប្រុស</option>
                                                            <option value="Female" class="addcs">ស្រី</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text addcs">ភ្ញៀវពិសេស</span>
                                                        <select class="form-select" name="customer_vip" required="required">
                                                            <option ></option>
                                                            <option value="VIP">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">លេខទូរស័ព្ទ</span>
                                                <input type="text" class="form-control" name="customer_phone">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">អាស័យដ្ធាន</span>
                                                <input type="text" class="form-control" name="customer_address">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">កាលបរិចេ្ឆទ</span>
                                                <input type="text" class="form-control" name="customer_date" value="<?php echo date('Y/m/d'); ?>">
                                            </div>
                                            <div class="input-group mb-3" hidden>
                                                <span class="input-group-text addcs">Time</span>
                                                <input type="text" class="form-control" name="customer_time" value="<?php echo date('h:i'); ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">ចំនួនទឹកប្រាក់</span>
                                                <input type="text" class="form-control" name="customer_total">
                                            </div>
                                            <div class="input-group mb-3">
                                                {{-- <span class="input-group-text" id="basic-addon1">IMAGE</span> --}}
                                                <input type="file" class="form-control" name="customer_image">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Export Dropdown End -->


                </div>
            </div>
        </div>
        <!-- Controls End -->


        <div class="card mobile-display-on">
            <div class="card-body">
                <table id="customer" class="ui celled table" style="width:100%">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th class="">NAME</th>
                            <th class="">CUSTOMER TYPE</th>
                            <th class="">INVOICE</th>
                            <th class="">SPEND</th>
                            <th class="">PHONE</th>
                            <th class="">REGISTER DATE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($customer as $item)
                        <tr class="" style="background-color: ">
                            <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_name}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_vip}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_invoice}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_total}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->customer_date}}</td>

                            <td class="col-1" style="text-align: center;">
                                {{-- <a draggable="false" class="btn btn-primary" href="update/customer/{{$item->id}}">
                                    <i data-acorn-icon="edit" data-acorn-size="18"></i>
                                </a> --}}
                                <a href="update/customer/{{$item->id}}" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}">
                                    <i data-acorn-icon="edit" data-acorn-size="18"></i>
                                </a>
                                <a draggable="false" class="btn btn-outline-success" href="destroy/customer{{$item->id}}">
                                    <i data-acorn-icon="bin" data-acorn-size="18"></i>
                                </a>
                            </td>
                            @include('admin_dashboard/customer/edit_customer_modal')
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

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
        </div>
    </div>
    @endforeach
    <!-- EndMobile Display OFF -->
    </div>
    @include('admin_dashboard.customer.customer_js')

    @include('admin_dashboard/customer/add_existing_customer')
    {{-- <script>

        document.addEventListener("DOMContentLoaded", function() {

          var $input = document.getElementById("InputDetail"),
              $table = document.getElementById("customer_detail"),
              // Only select the <tr>s inside the <tbody> (double $ -> multiple elements)
              $$tr   = $table.querySelectorAll("tbody tr");

          // Add the normalized name as a property to each tr, so that you don't have
          // to compute that every time when performing a search
          for (var i = 0; i < $$tr.length; i++) {
            $$tr[i].normalizedValue = normalizeStr( $$tr[i].querySelector("td").innerText );
          }
          // When typing or pasting text, perform a search
          $input.addEventListener("input", performSearch);

          function performSearch() {
            var filter = normalizeStr(this.value);
            for (var i = 0; i < $$tr.length; i++) {
              var isMatch = $$tr[i].normalizedValue.includes(filter);
              // Toggle a 'visible' class
              $$tr[i].classList[isMatch ? "add" : "remove"]("visible");
            }
          }

          // Creating a reusable function will allow us to make
          // changes to it only in one place 👍
          function normalizeStr(str) {
            return str.toUpperCase().trim();
          }
        });
        </script> --}}
@endsection
