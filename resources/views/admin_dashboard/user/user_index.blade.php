@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Users Management';
    $description= '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    @include('admin_view.product.css')
    <link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/quill.snow.css"/>
    <link rel="stylesheet" href="/css/map.min.css" />
    <style>
         #map {
            width: 100%;
            height: 50vh;
        }
        .input-style{
            height: 45px;
            width: 30%;
            padding: 15px;
            font-size: 25px;
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
        function filter_user()
    {
        var input, filter, table, tr, td, i, tbody;
        input = document.getElementById("user_filter");
        filter = input.value.toUpperCase();
        tbody = document.getElementById("user");
        tr = tbody.getElementsByTagName("tr");
        for (var i = 0; i < tr.length; i++) {
            var tds = tr[i].getElementsByTagName("td");
            var flag = false;
        for(var j = 0; j < tds.length; j++){
            var td = tds[j];
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                flag = true;
            }
            }
            if(flag){
                tr[i].style.display = "";
            }
            else {
                tr[i].style.display = "none";
            }
        }
    }


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
     @include('admin_view.user.js')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    @include('layouts.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row">

            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="lqd-contact-form ">
                            <div class="mobile-view-search">
                                <span class="lqd-form-control-wrap text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                    <input type="text" onkeyup="filter_user()" size="40" id="user_filter" autocomplete="off" class="input-style" aria-required="true" aria-invalid="false">
                                </span>
                            </div>
                        </div>
                        <div class="mb-2" style="float: right">
                            @include('admin_view.user.add_user_modal')
                        </div>
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Duty</th>
                                    <th>Email</th>
                                    <th>Verify</th>
                                    <th>Password</th>
                                    <th>Active</th>
                                    <th style="text-align: center">Last Seen Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="user">
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td>
                                            {{$item->duty}}
                                        </td>
                                        <td>
                                            {{$item->email}}
                                        </td>
                                        <td></td>
                                        <td>{{$item->password_confirmation}}</td>
                                        <td style="text-align: center">
                                            @if(Cache::has('user-is-online-' . $item->id))
                                                <span class="text-success"><b>Online</b></span>
                                            @else
                                                <span class="text-secondary"><b>Offline</b></span>
                                            @endif
                                        </td>
                                        <td>
                                            {{$item->updated_at}}
                                        </td>

                                        <td style="text-align: center">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                                Delete
                                            </button>
                                            @include('admin_view.user.delete_user_modal')
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
    {{-- <div id="map"></div> --}}
@endsection
