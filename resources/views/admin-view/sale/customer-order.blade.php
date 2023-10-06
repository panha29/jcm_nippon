@php
    $html_tag_data = [];
    $title = 'Customer Order';
    $description= 'Ecommerce Customer List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" /> --}}
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

@section('css')
{{-- <link rel="stylesheet" href="/css/vendor/select2.min.css"/> --}}
<link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
{{-- <link rel="stylesheet" href="/css/vendor/select2.css"/>
<link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/> --}}
<link rel="stylesheet" href="/css/vendor/tagify.css"/>
@endsection

@section('js_vendor')

<script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/select2/select2.full.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
@endsection

@section('js_page')
<script src="/js/forms/controls.select2.js"></script>

    {{-- <script src="/js/pages/storefront.categories.js"></script> --}}
    <script src="/js/forms/layouts.js"></script>
    <script src="/js/forms/controls.datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
@endsection
@section('content')
<style>
    * {
    /* -webkit-user-select: none; */
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

    <div class="box">
        <div class="background-color">
            {{-- <h1 style="color: red">hi</h1> --}}
        </div>
        <div class="">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-auto mb-3 mb-md-0 me-auto">
                        <div class="w-auto sw-md-30">
                            <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                                <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                                <span class="text-small align-middle">Home</span>
                            </a>
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                        </div>
                    </div>
                    <!-- Title End -->


                </div>
            </div>
            <!-- Title and Top Buttons End -->


            <!-- Floating Label Start -->
            <section class="scroll-section" id="floatingLabel">
                <form method="Post" action="Sale/Product" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            @include('admin-view.sale.customer-input-form')
                        </div>

                        <div class="col-9">
                            <div class="card mb-3">
                                <div class="card-body">
                                    @include('admin-view.sale.product_form')
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    @include('admin-view.sale.total-pd-price')
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    @include('admin-view.sale.upload-img')
                                </div>
                            </div>
                            <br>
                            <br>
                            <div style="float: right">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                        {{-- <div class="col-2">
                            @include('admin-view.sale.pos-user-input')
                        </div> --}}
                    </div>

                    {{-- <br> --}}
                    {{-- <div style="float: right">
                        <a class="btn btn-primary" onclick="pdcalculate()" id="saveprice">Save</a>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div> --}}
                </form>
            </section>
        </div>
    </div>


  <!-- Floating Label End -->
  @include('admin-view.sale.js')
  @include('admin-view.sale.input_field_value_0')

@endsection


