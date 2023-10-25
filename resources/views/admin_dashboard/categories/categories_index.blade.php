@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Categories';
    $description= 'An empty page with a fluid vertical layout.';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@include('admin_dashboard.categories.css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="/js/pages/vertical.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
       new DataTable('#category', {
        fixedColumns: {
        heightMatch: 'none'
    },
        paging: true,
        info: false,
    });
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

        <!-- Content Start -->
        <div class="row">
            <div class="col-4">
                <div class="card mb-2">
                    <div class="card-body" id="saveform_error">
                        <h3 style="text-align: center" class="mb-3">Add Categories</h3>
                        <form action="/Admin/Product/Categorie/AddCategories" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="category_name">Categorie Name</span>
                                <input type="text" class="form-control" placeholder="" aria-label="category_name" aria-describedby="category_name" name="category_name" autocomplete="off" id="category_name" >
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="category_date" style="width: 128px;">Date</span>
                                <input type="text" class="form-control" placeholder="" aria-label="category_date" aria-describedby="category_date" name="category_date" autocomplete="off" id="category_date">
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
                        <table id="category" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
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
                                            {{$item->category_name}}
                                        </td>
                                        <td>
                                            {{$item->category_date}}
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
