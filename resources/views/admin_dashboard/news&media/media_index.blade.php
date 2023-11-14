@php
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"fluid" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
    $title = 'Media';
    $description= '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('admin_dashboard.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    @include('admin_dashboard.news&media.css')
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/quill.min.js"></script>
    <script src="/js/vendor/quill.active.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>

@endsection

@section('js_page')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="/js/pages/vertical.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/plugins/players.js"></script>

    <script>
       new DataTable('#event', {
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
                        <h3 style="text-align: center" class="mb-3">Add Media</h3>
                        <form action="/Admin/News-&-Media/Media/AddMedia" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="media_title" style="width: 100px;">Media Title</span>
                                <input type="text" class="form-control" placeholder="" aria-label="media_title" aria-describedby="media_title" name="media_title" autocomplete="off" id="media_title" >
                            </div>

                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="media_date" style="width: 100px;">Date</span>
                                <input type="text" class="form-control" placeholder="" aria-label="media_date" aria-describedby="media_date" name="media_date" autocomplete="off" id="media_date">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="media_detail" style="width: 100px;">Detail</span>
                                <input type="text" class="form-control" placeholder="" aria-label="media_detail" aria-describedby="media_detail" name="media_detail" autocomplete="off" id="media_detail">
                            </div>
                            <div class="input-group mb-3" >
                                <span class="input-group-text" id="media_important" style="width: 100px;">Important</span>
                                <select name="media_important" id="media_important" class="form-control">
                                    <option value="" selected disabled>Choose</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="media_image" id="input-file1" onchange="loadFile1(event)">
                            </div>
                            <div class="">
                                <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
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
                        <table id="event" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Detail</th>
                                    <th>Image</th>
                                    <th>Date</th>
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
                                            {{$item->media_title}}
                                        </td>

                                        <td>
                                            {{$item->media_detail}}
                                        </td>
                                        <td>
                                            <video class="player"  style="background-color: white;width:100%; ">
                                                <source src="{{asset('img/company_media/'.$item->media_image)}}" type="video/mp4" style="" />
                                            </video>
                                        </td>
                                        <td>
                                            {{$item->media_date}}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <a href="/Admin/News-&-Media/Media/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">
                                                <i data-acorn-icon="pen"></i>
                                            </a>
                                            <a href="/Admin/News-&-Media/Media/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">
                                                <i data-acorn-icon="bin"></i>
                                            </a>
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
