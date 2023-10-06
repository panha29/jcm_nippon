@php
    $html_tag_data = [];
    $title = 'Customer List';
    $description= 'Ecommerce Customer List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/vendor/datatables.min.css"/>

@endsection

@section('js_vendor')
    <script src="/js/vendor/bootstrap-submenu.js"></script>
    <script src="/js/vendor/datatables.min.js"></script>
    <script src="/js/vendor/mousetrap.min.js"></script>
@endsection

@section('js_page')
    @include('admin-view/customers/js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/customers.list.js"></script>
    {{-- <script src="/js/dateRange.js"></script> --}}
    <script src="/js/cs/datatable.extend.js"></script>
    <script src="/js/plugins/datatable.editableboxed.js"></script>
@endsection

@section('content')

@include('admin-view/customers/css')
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

                <!-- Top Buttons Start -->
                <div class="col-3 d-flex align-items-end justify-content-end">
                    <!-- Default Start -->
                    <section class="scroll-section" id="default">

                    </section>
                   <!-- Default End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_name()" autocomplete="off"/>
                    <span class="search-magnifier-icon"><i data-acorn-icon="search"></i></span>
                    <span class="search-delete-icon d-none"><i data-acorn-icon="close"></i></span>
                </div>
            </div>
            <div class="col" style="text-align:right">
                <!-- Add New Button Start -->
                <button type="button" class="btn btn-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable"data-bs-toggle="modal" data-bs-target="#addnew">
                    <i data-acorn-icon="plus"></i>
                    <span>Add New</span>
                </button>
                <!-- Add New Button End -->
                <!-- Add Edit Modal Start -->
                    <div class="modal modal-right fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle">Add New</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="List/add-customer" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Name" name="customer_name"/>
                                            <label>Customer Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Phone" name="customer_phone"/>
                                            <label>Phone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="address" name="customer_address"/>
                                            <label>អាស័យដ្ធាន</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="arrivelocation" name="customer_arrivelocation"/>
                                            <label>ទីតាំងអ្នកទទួល</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="shipto" name="customer_shipto"/>
                                            <label>ឈ្មោះអ្នកទទួល</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Add Edit Modal End -->
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="testing" class="cell-border" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th class="">Phone</th>
                            <th class="labelkh">អាស័យដ្ធាន</th>
                            <th class="labelkh">ទីតាំងអ្នកទទួល</th>
                            <th class="labelkh">ឈ្មោះអ្នកទទួល</th>
                            <th class="labelkh">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @if (!empty($data) && $data->count())
                            @foreach ($data as $item)
                                <tr>
                                    <td class="labelkh">{{$loop->iteration}}</td>
                                    <td class="labelkh"><b>{{$item->customer_name}}</b></td>
                                    <td class="labelkh">{{$item->customer_phone}}</td>
                                    <td class="labelkh">{{$item->customer_address}}</td>
                                    <td class="labelkh">{{$item->customer_arrivelocation}}</td>
                                    <td class="labelkh">{{$item->customer_shipto}}</td>
                                    <td class="">
                                        <a type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable"data-bs-toggle="modal" data-bs-target="#editmodal{{$item->id}}">
                                            <span>Edit</span>
                                        </a>
                                        <a href="javascript:void(0);" class="delete btn btn-warning" data-id="{{ $item->id }}">Delete</a>
                                    </td>
                                </tr>
                                @include('admin-view/customers/edit_form_modal')
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
