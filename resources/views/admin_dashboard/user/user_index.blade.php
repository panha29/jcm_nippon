@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Users Management';
    $description= '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    @include('admin_dashboard.categories.css')
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
            <div class="col-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <table id="user" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Verify</th>
                                    <th>Status</th>
                                    <th style="text-align: center">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td>
                                            {{$item->email}}
                                        </td>
                                        <td></td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $item->id))
                                                <span class="text-success">Online</span>
                                            @else
                                                <span class="text-secondary">Offline</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <div>
                                                <a class="btn btn-outline-primary" id="unbanned" name="unbanned" >Unbanned</a>
                                                <a class="btn btn-outline-danger" id="unbanned" name="banned" > Banned</a>

                                            </div>
                                        </td>
                                        <td style="text-align: center">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                                Delete
                                            </button>
                                            @include('admin_dashboard.user.delete_user_modal')
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
