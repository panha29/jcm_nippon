@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Career';
    $description= '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    @include('admin_dashboard.news&media.css')
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
        new DataTable('#career', {
         fixedColumns: {
         heightMatch: 'none'
     },
         paging: true,
         info: false,
         drawCallback: function() {
             new AcornIcons().replace();
         },
     });
     </script>
    <script src="/js/forms/controls.editor.js"></script>
    <script>
        var loadFile1 = function(event) {
        var pdimage1 = document.getElementById('pdimage1');
            pdimage1.height = 150;
            pdimage1.width = 150;
            pdimage1.src = URL.createObjectURL(event.target.files[0]);
            pdimage1.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    @include('admin_dashboard.news&media.js')
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

        <!-- Content Start -->
        <div class="row">
            <div class="col-4">
                <div class="card mb-2">
                    <div class="card-body" id="saveform_error">
                        <h3 style="text-align: center" class="mb-3">Add Career</h3>
                        <form action="/Admin/News-&-Media/Career/AddCareer" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="career_title" style="width: 100px;">Career Title</span>
                                <input type="text" class="form-control" placeholder="" aria-label="career_title" aria-describedby="career_title" name="career_title" autocomplete="off" id="career_title" >
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="career_location" style="width: 100px;">Location</span>
                                <input type="text" class="form-control" placeholder="" aria-label="career_location" aria-describedby="career_location" name="career_location" autocomplete="off" id="career_location" >
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="career_position" style="width: 100px;">Position</span>
                                <input type="text" class="form-control" placeholder="" aria-label="career_position" aria-describedby="career_position" name="career_position" autocomplete="off" id="career_position" >
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="career_date" style="width: 100px;">Date</span>
                                <input type="text" class="form-control" placeholder="" aria-label="career_date" aria-describedby="career_date" name="career_date" autocomplete="off" id="career_date" value="<?php echo date("d/m/Y");?>">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="career_detail" style="width: 100px;">Detail</span>
                                <input type="text" class="form-control" placeholder="" aria-label="career_detail" aria-describedby="career_detail" name="career_detail" autocomplete="off" id="career_detail">
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="career_image" id="input-file1" onchange="loadFile1(event)">
                            </div>
                            <div class="">
                                <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
                            </div>
                            <div style="float: right">
                                <button type="submit" class="btn-primary btn">Save</button>
                                <button type="reset" class="btn-danger btn">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <table id="career" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Position</th>
                                    <th>Detail</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->career_title}}
                                        </td>
                                        <td>
                                            {{$item->career_position}}
                                        </td>
                                        <td>
                                            {{$item->career_detail}}
                                        </td>
                                        <td>
                                            <img src="{{ url('img/product/company_product/'.$item->career_image) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                        </td>
                                        <td>
                                            {{$item->career_date}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
    </div>

@endsection
