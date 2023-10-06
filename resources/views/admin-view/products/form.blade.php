@php
    $html_tag_data = [];
    $title = 'Product Hand';
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

@section('content')
<div class="card-body">
    <form action="{{url('add')}}" method="POST" enctype="multipart/form-data" id="hand-form">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Name" name="product_name"/>
            <label>Product Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Code" name="code" />
            <label>Code</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" placeholder="Price" name="price"/>
            <label>Price</label>
        </div>
        {{-- <div class="form-floating mb-3">
        <input class="form-control" type="file" placeholder="Price" name="image"/>
        </div> --}}
        <!-- Image Start -->
        <div class="mb-5">
            <h2 class="small-title">Image</h2>
            <div class="card">
                <div class="card-body">
                    <div class="dropzone dropzone-columns row g-2 row-cols-1 row-cols-md-1 border-0 p-0" id="dropzoneProductImage" name="image"></div>
                </div>
            </div>
        </div>
        <!-- Image End -->

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
