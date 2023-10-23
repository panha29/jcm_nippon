@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Categories Index';
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
    <script src="/js/pages/vertical.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
       new DataTable('#example', {
        fixedColumns: {
        heightMatch: 'none'
    },
        paging: false,
    });
    </script>

    <script>
        $(document).ready(function(){
            $(document).on('click','.add_category',function(e){
                e.preventDefault();
                var data = {
                    'category_name':$('.category_name').val(),
                    'category_date':$('.category_date').val(),
                }
                // console.log(data)
                $.ajax({
                    type: "POST",
                    url: "/Admin/Product/Categorie/AddCategorie",
                    data: data,
                    dataType: "json",
                    success: function(response){
                        console.log(response);
                    }

                });
            });
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
                    <div class="card-body">
                        <h3 style="text-align: center" class="mb-3">Add Categories</h3>
                        <form action="/Admin/Product/Categorie/AddCategorie" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="category_name">Categorie Name</span>
                                <input type="text" class="form-control category_name" placeholder="" aria-label="category_name" aria-describedby="category_name" name="category_name" id="category_name">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="category_name" style="width: 128px;">Date</span>
                                <input type="text" class="form-control category_date" placeholder="" aria-label="category_date" aria-describedby="category_date" name="category_date" id="category_date">
                            </div>
                            <div style="float: right">
                                <button type="button" class="btn-primary btn add_category">Save</button>
                                <button type="reset" class="btn-danger btn">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection
