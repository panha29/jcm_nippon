@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Product';
    $description= 'An empty page with a fluid vertical layout.';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    {{-- @include('admin_dashboard.product.css') --}}
    <link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/quill.snow.css"/>
    <style>
        div.dataTables_wrapper {
        margin: 0 auto;
    }
    tr {
        height: 50px;
    }
    .dataTables_length, .dataTables_filter{
        display: none;
    }
    .input-search input[type=text] {
        min-height: 44px;
        border: 0px transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #efefef;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin-bottom: 15px
    }

    .input-search input[type=text]::after {

        border: 0px transparent;

        background-color: #efefef;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        border: none !important;
        background-color: none !important;
        background: none !important;
        background: none !important;
        background: none !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5em 0em !important;
        box-sizing: none !important;
        border: none !important;

    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
       /* display: none; */
    }

    .page-item:first-child .page-link, .page-item:last-child .page-link{
        width: auto;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
    outline: none;
    background-color: none !important;
    background: none !important;
    background: none !important;
    background: none !important;
    background: none !important;
    background: none !important;
    background: none !important;
    box-shadow: none !important;
    }
    </style>
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/quill.min.js"></script>
    <script src="/js/vendor/quill.active.js"></script>
@endsection

@section('js_page')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="/js/pages/vertical.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/forms/controls.editor.js"></script>
    @include('admin_dashboard.project_reference.project-reference-js')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->
        @include('admin_dashboard.project_reference.project-reference-form-modal')

        <!-- Content Start -->
      <div class="row mb-3">
            <div class="col">

            </div>
            <div class="col">
                <div style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        Add Project
                    </button>
               </div>
            </div>
      </div>
        <div class="card mb-2">
            <div class="card-body">
                <table id="project" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Exterior & Interior</th>
                            <th>Image</th>
                            <th>Start</th>
                            <th>End</th>
                            <th></th>
                        </tr>
                    </thead>
                    {{-- <div class="input-search" style="float: right">
                        <span class="lqd-form-control-wrap text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                            <input type="text" id="project_filter" autocomplete="off" aria-required="true" aria-invalid="false">
                        </span>
                    </div> --}}
                    <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                        <input class="form-control" placeholder="Search" id="myInput" autocomplete="off"/>
                        <span class="search-magnifier-icon">
                            <i data-acorn-icon="search"></i>
                        </span>
                    </div>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td style="text-align: center;">
                                    {{$loop->iteration}}
                                </td>
                                <td class="col-1">
                                    {{$item->project_reference_name}}
                                </td>
                                <td class="col-1">
                                    {{$item->project_reference_area}}
                                </td>
                                <td class="col-2">
                                    Exterior:{{$item->project_reference_exterior}}
                                    <br>
                                    Interior:{{$item->project_reference_interior}}
                                </td>

                                <td style="text-align: center" class="col-3">
                                    <img src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image1) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                    <img src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image2) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                    <img src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image3) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                </td>
                                <td>
                                    {{$item->project_reference_startDate}}
                                </td>
                                <td>
                                    {{$item->project_reference_endDate}}
                                </td>
                                <td>
                                    <a href="/Admin/Project-Reference/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">
                                        <span class="pen-icon">
                                            <i data-acorn-icon="pen"></i>
                                        </span>
                                    </a>
                                    <a href="/Admin/Project-Reference/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">
                                        <span class="bin-icon">
                                            <i data-acorn-icon="bin"></i>
                                        </span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Content End -->
    </div>

@endsection
