@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Color Palette';
    $description= 'Color Palette';
    $breadcrumbs = ["/"=>"Color Palette"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
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
       new DataTable('#colorpalettetable', {
        paging: true,
        info: false,
    });
    </script>
    <script src="/js/forms/controls.editor.js"></script>

@endsection

@section('content')
@include('admin_dashboard.color_palette.css')
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
        @include('admin_dashboard.color_palette.color-form-modal')

        <!-- Content Start -->
      <div class="row mb-3">
            <div class="col">

            </div>
            <div class="col">
                <div style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#colorpalette" >
                        Add Color
                    </button>
               </div>
            </div>
      </div>
        <div class="card mb-2">
            <div class="card-body">
                <table id="colorpalettetable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>RGB</th>
                            <th>Batch</th>
                            <th>Image</th>
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
                                    {{$item->colorpalette_category}}
                                </td>
                                <td>
                                    {{$item->colorpalette_name}}
                                </td>
                                <td>
                                   {{$item->colorpalette_rgb}}
                                </td>
                                <td>
                                    {{$item->colorpalette_batch}}
                                </td>
                                <td>
                                    <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">

                                </td>
                                <td>
                                    <a href="/Admin/ColorPalette/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">Delete</a>
                                    <a href="/Admin/ColorPalette/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">Edit</a>
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
