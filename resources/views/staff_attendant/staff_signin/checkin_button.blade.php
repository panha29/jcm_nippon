@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = '';
    $description= '';
    $breadcrumbs = ["/"=>""]
@endphp
@extends('staff_attendant.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/quill.snow.css"/>
    <link rel="stylesheet" href="/css/map.min.css" />
<style>
    #map{
        width: 100%;
        height: 50vh;
    }
</style>
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
       new DataTable('#user', {
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
     @include('staff_attendant.staff_signin.js')

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
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/user-png.png" class="img-fluid" alt="" style="border-radius:15px"/>
                        </div>
                        <a href="#" class="body-link"><h2>{{auth()->user()->name}}</h2></a>

                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="palette" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">ផ្នែក</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">Sale</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="user" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">ភេទ</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate"><b>{{auth()->user()->gender}}</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="email" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Email</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">{{auth()->user()->email}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="phone" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Phone</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">(+855){{auth()->user()->phone}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="staff_name" id="" value="{{auth()->user()->name}}">
                    <input type="text" name="staff_phone" id="" value="{{auth()->user()->phone}}">
                    <input type="text" name="staff_email" id="" value="{{auth()->user()->email}}">
                    <input type="text" name="staff_checkin_date" id="" value="<?php echo date("Y/m/d"); ?>">
                    <input type="text" name="staff_checkin_time" id="" value="<?php echo date("h:i:sa"); ?>">
                    <input type="text" name="staff_location" id="geos" value="">
                    <div id="map" ></div>

                </form>
            </div>
        </div>
        <!-- Content End -->
    </div>

@endsection
