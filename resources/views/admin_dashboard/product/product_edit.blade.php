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
       new DataTable('#product', {
        fixedColumns: {
        heightMatch: 'none'
    },
        paging: true,
        info: false,
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
                        <h3 style="text-align: center" class="mb-3">Edit Product</h3>
                        <form action="/Admin/Product/List/EditProduct" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="product_name" style="width: 100px;">Name</span>
                                <input type="text" name="id" value="{{$item['id']}}" hidden>
                                <input type="text" class="form-control" placeholder="" aria-label="product_name" aria-describedby="product_name" name="product_name" autocomplete="off" id="product_name" value="{{$item['product_name']}}">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="product_date" style="width: 100px;">Date</span>
                                <input type="text" class="form-control" placeholder="" aria-label="product_date" aria-describedby="product_date" name="product_date" autocomplete="off" id="product_date" value="<?php echo date("d.m.Y");?>">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="product_category" style="width: 100px;">Category</span>
                                <select name="product_category" id="product_category" class="form-control">
                                    <option value="{{$item['product_category']}}" name="product_category">{{$item['product_category']}}</option>
                                    @foreach ($cate as $item)
                                        <option value="{{$item->category_name}}" name="product_category">{{$item->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="product_detail" style="width: 100px;">Detail</span>
                                <input type="text" class="form-control" placeholder="" aria-label="product_detail" aria-describedby="product_detail" name="product_detail" autocomplete="off" id="product_detail" value="{{$item['product_detail']}}">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="product_image" id="input-file1" onchange="loadFile1(event)" value="{{$item['product_image']}}">
                            </div>
                            <div class="">
                                <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
                            </div>
                            <div style="float: right">
                                <button type="reset" class="btn-danger btn">Reset</button>
                                <button type="submit" class="btn-primary btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <table id="product" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Detail</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td style="text-align: center">
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->product_name}}
                                        </td>
                                        <td>
                                            {{$item->product_category}}
                                        </td>
                                        <td>
                                            {{$item->product_detail}}
                                        </td>
                                        <td>
                                            <img src="{{ url('img/product/company_product/'.$item->product_image) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">
                                        </td>
                                        <td>
                                            {{$item->product_date}}
                                        </td>
                                        <td>
                                            <a href="/Admin/Product/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">Delete</a>
                                            <a href="/Admin/Product/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">Edit</a>
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
