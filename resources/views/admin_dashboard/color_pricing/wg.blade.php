@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Color Pricing';
    $description= 'Color Pricing';
    $breadcrumbs = ["/"=>"Color Pricing"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
       new DataTable('#colorpalettetable', {
        paging: true,
        info: false,
    });
    </script>
@endsection
@section('content')
@include('admin_dashboard.color_palette.css')
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
        @include('admin_dashboard.color_pricing.color-form-modal')

        <div class="row mb-3">
            <div class="col">

            </div>
            <div class="col">
                <div style="float: right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#weathergard" >
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
                            <th>Name</th>
                            <th>Tag</th>
                            <th class="col-1">1L Price</th>
                            <th class="col-1">5L Price</th>
                            <th class="col-1">18L Price</th>
                            <th>Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wg as $item)
                            <tr>
                                <td style="text-align: center;">
                                    {{$loop->iteration}}
                                </td>
                                <td class="col-1">
                                    {{$item->color_name}}
                                </td>
                                <td>
                                    {{$item->color_tag}}
                                </td>
                                <td>
                                    {{$item->color_1l}}
                                </td>
                                <td>
                                    {{$item->color_5l}}
                                </td>
                                <td>
                                    {{$item->color_18l}}
                                </td>
                                <td>
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                </td>
                                <td>
                                    <a href="/Admin/ColorPricing/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">Delete</a>
                                    <a href="/Admin/ColorPricing/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
