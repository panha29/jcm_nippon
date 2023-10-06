@php
    $html_tag_data = [];
    $title = 'Product List';
    $description= 'Ecommerce Product List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/tagify.css"/>
    <link rel="stylesheet" href="/css/vendor/dropzone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/imask.js"></script>
    <script src="/js/vendor/quill.min.js"></script>
    <script src="/js/vendor/quill.active.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
    <script src="/js/vendor/dropzone.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/products.list.js"></script>
    <script src="/js/cs/dropzone.templates.js"></script>
    <script src="/js/pages/products.detail.js"></script>
@endsection
<style>
    .center-img{
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
</style>
@section('content')
<h2 class="small-title">Edit Product</h2>

        <div class="card mb-5 col" >
            <div class="card-body">
                <form action="/Products/List/edit-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">
                        <input type="text" class="form-control" name="name" value="{{$data['name']}}"/>
                        <label>Customer Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="code" value="{{$data['code']}}"/>
                        <label>Code</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="type" value="{{$data['type']}}"/>
                        <label>Type</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" name="price" value="{{$data['price']}}"/>
                        <label>Price</label>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="image" id="input-file1" onchange="loadFile1(event)">
                            <label class="input-group-text">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3" >
                        <img src="" id="pdoutput" class="rounded-md bg-cover-center center-img">
                    </div>
                    <button class="btn btn-primary" type="submit" style="float: right">Submit</button>

                </form>
            </div>
        </div>
    <script>
        var loadFile1 = function(event) {
        var pdoutput = document.getElementById('pdoutput');
            pdoutput.height = 300;
            pdoutput.width = 300;
            pdoutput.src = URL.createObjectURL(event.target.files[0]);
            pdoutput.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
