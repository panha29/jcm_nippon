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
    @include('admin_dashboard.product.css')
    <link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/quill.snow.css"/>
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

    <script>
       new DataTable('#project', {

        paging: true,
        info: false,
    });
    </script>
    <script src="/js/forms/controls.editor.js"></script>
    <script>
        var loadFile1 = function(event) {
        var pdimage1 = document.getElementById('pdimage1');
            pdimage1.height =134;
            pdimage1.width =134;
            pdimage1.src = URL.createObjectURL(event.target.files[0]);
            pdimage1.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFile2 = function(event) {
        var pdimage2 = document.getElementById('pdimage2');
            pdimage2.height =134;
            pdimage2.width =134;
            pdimage2.src = URL.createObjectURL(event.target.files[0]);
            pdimage2.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFile3 = function(event) {
        var pdimage3 = document.getElementById('pdimage3');
            pdimage3.height =134;
            pdimage3.width =134;
            pdimage3.src = URL.createObjectURL(event.target.files[0]);
            pdimage3.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFile4 = function(event) {
        var pdimage4 = document.getElementById('pdimage4');
            pdimage4.height =134;
            pdimage4.width =134;
            pdimage4.src = URL.createObjectURL(event.target.files[0]);
            pdimage4.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
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
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td style="text-align: center;">
                                    {{$loop->iteration}}
                                </td>
                                <td class="col-1">
                                    {{$item->project_reference_name}}
                                </td>
                                <td>
                                    {{$item->project_reference_area}}
                                </td>
                                <td>
                                    Exterior:{{$item->project_reference_exterior}}
                                    <br>
                                    Interior:{{$item->project_reference_interior}}
                                </td>

                                <td style="text-align: center">
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
                                    <a href="/Admin/Project-Reference/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">Delete</a>
                                    <a href="/Admin/Product/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">Edit</a>
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
