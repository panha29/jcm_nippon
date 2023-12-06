@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Edit Project Reference';
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
        <div class="card">
            <div class="card-body">
                <form action="/Admin/Product-Reference/List/EditProject-Reference" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="id" value="{{$item['id']}}" hidden>
                        <span class="input-group-text" id="project_reference_name" style="width: 100px;">Name</span>
                        <input value="{{$item['project_reference_name']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_name" aria-describedby="project_reference_name" name="project_reference_name" autocomplete="off" id="project_reference_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="project_reference_area" style="width: 100px;">Area</span>
                        <input value="{{$item['project_reference_area']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_area" aria-describedby="project_reference_area" name="project_reference_area" autocomplete="off" id="project_reference_area">
                    </div>
                    <div class="input-group mb-3" >
                        <span class="input-group-text" id="project_reference_exterior" style="width: 100px;">Exterior</span>
                        <input value="{{$item['project_reference_exterior']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_exterior" aria-describedby="project_reference_exterior" name="project_reference_exterior" autocomplete="off" id="project_reference_exterior">
                    </div>
                    <div class="input-group mb-3" >
                        <span class="input-group-text" id="project_reference_interior" style="width: 100px;">Interior</span>
                        <input value="{{$item['project_reference_interior']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_interior" aria-describedby="project_reference_interior" name="project_reference_interior" autocomplete="off" id="project_reference_interior">
                    </div>
                    <div class="input-group mb-3" >
                        <span class="input-group-text" id="project_reference_startDate" style="width: 100px;">Start Date</span>
                        <input value="{{$item['project_reference_startDate']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_startDate" aria-describedby="project_reference_startDate" name="project_reference_startDate" autocomplete="off" id="project_reference_startDate">
                    </div>
                    <div class="input-group mb-3" >
                        <span class="input-group-text" id="project_reference_endDate" style="width: 100px;">End Date</span>
                        <input value="{{$item['project_reference_endDate']}}" type="text" class="form-control" placeholder="" aria-label="project_reference_endDate" aria-describedby="project_reference_endDate" name="project_reference_endDate" autocomplete="off" id="project_reference_endDate">
                    </div>
                    <div class="input-group mb-3">
                        <input value="{{$item['project_reference_image1']}}" type="file" class="form-control" name="project_reference_image1" id="input-file1" onchange="loadFile1(event)">
                    </div>
                    <div class="input-group mb-3">
                        <input value="{{$item['project_reference_image2']}}" type="file" class="form-control" name="project_reference_image2" id="input-file2" onchange="loadFile2(event)">
                    </div>
                    <div class="input-group mb-3">
                        <input value="{{$item['project_reference_image3']}}" type="file" class="form-control" name="project_reference_image3" id="input-file3" onchange="loadFile3(event)">
                    </div>
                    <div class="input-group mb-3" hidden>
                        <input value="{{$item['project_reference_image4']}}" type="file" class="form-control" name="project_reference_image4" id="input-file4" onchange="loadFile4(event)">
                    </div>
                    <div style="display: inline-flex">
                    <div class="" style="">
                        <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
                    </div>
                    <div class="" style="padding-left:15px">
                        <img src="" id="pdimage2" class="rounded-md bg-cover-center d-block">
                    </div>
                    <div class="" style="padding-left:15px">
                        <img src="" id="pdimage3" class="rounded-md bg-cover-center d-block">
                    </div>
                    <div class="" style="padding-left:15px">
                        <img src="" id="pdimage4" class="rounded-md bg-cover-center d-block">
                    </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn-danger btn">Reset</button>
                        <button type="submit" class="btn-primary btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
