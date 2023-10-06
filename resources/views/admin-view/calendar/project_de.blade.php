

@php
    $html_tag_data = [];
    $title = 'Project List';
    $description= 'Ecommerce Project List Page'
    @endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">

@endsection

@section('js_vendor')
@endsection
{{-- <script>
    @foreach ($project as $item )
    function totalprogress{{$item->id}}() {
       var txt1 = document.getElementById("progress_den{{$item->id}}").value/2;
       var txt2 = document.getElementById("progress_de{{$item->id}}").value/2;
       var txt3 = document.getElementById("progress{{$item->id}}").value;
       var txt4 = +txt1 + +txt2 + +txt3;
      document.getElementById("total_progress{{$item->id}}").value = txt4;
    }
    @endforeach
</script> --}}
<script>
    @foreach ($project as $item )
    function totalprogress{{$item->id}}() {
       var txt2 = document.getElementById("progress_de{{$item->id}}").value/2;
       var txt3 = document.getElementById("progress{{$item->id}}").value;
       var txt4 =+ +txt2 + +txt3;
      document.getElementById("total_progress{{$item->id}}").value = txt4;
    }
    @endforeach
</script>
@section('js_page')
<script src="/js/vendor/dateRangeV2/jquery-3.7.0.js"></script>
    <script src="/js/vendor/dateRangeV2/jquery-ui.js"></script>
    <script src="/js/forms/controls.datepicker.js"></script>
    <script src="/js/vendor/dateRangeV2/bootstrap-datepicker.min.js"></script>
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/customers.list.js"></script>
    <script src="/js/vendor/dateRangeV2/popper-1.12.9.min.js"></script>
    <script src="/js/vendor/dateRangeV2/moment-2.29.2.min.js"></script>
    <script src="/js/vendor/dateRangeV2/jquery.dataTables.min.js"></script>
    <script src="/js/vendor/dateRangeV2/dateTime-1.5.1.js"></script>
    <script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="/js/dateRangeProject.js"></script>
@endsection

@section('content')

@include('admin-view.calendar.calendar-css')
<style>
.project-den-th{
    width: 3% !important;
    text-align: left !important;
}
#project_table_export{
    background-color: #fff !important;
    border-bottom: 0px !important;
}

#project_table_wrapper .dt-buttons{
    display: none;
}
</style>
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

                <!-- Top Buttons Start -->
                <div class="col-3 d-flex align-items-end justify-content-end">
                    <!-- Default Start -->
                    <section class="scroll-section" id="default">

                    </section>
                   <!-- Default End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            {{-- <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_calendar()" autocomplete="off"/>
                    <span class="search-magnifier-icon">
                        <i data-acorn-icon="search"></i>
                    </span>
                    <span class="search-delete-icon d-none">
                    <i data-acorn-icon="close"></i>
                    </span>
                </div>
            </div> --}}
            <!-- Search End -->
            {{-- <div class="col">
                <button onclick="history.back()" class="btn btn-success">BACK</button>
                <a href="De/History" class="btn btn-success" draggable="false">History</a>
            </div> --}}

        </div>
        <!-- Controls End -->
        <table id="project_table_export" class="stripe" style="width:100%">
            <thead hidden>
                <tr>
                    <th class="project-den-th" style="text-align: center !important;">No</th>
                    <th class="project-den-th">មេជាង</th>
                    <th class="project-den-th">ជាងដេរ</th>
                    <th class="project-den-th">ថ្ងៃចាប់ផ្តើមដេរ</th>
                    <th class="project-den-th">ថ្ងៃបញ្ចប់ដេរ</th>
                    <th class="project-den-th">អតិថិជន</th>
                    <th class="project-den-th">Project</th>
                    <th class="project-den-th">ចំនួន</th>
                    <th class="project-den-th">Progress</th>
                </tr>
            </thead>
            <tbody id="tbody" hidden>
                @foreach ($project as $item)
                    <tr >
                        <td style="text-align: center">{{$loop->iteration}}</td>
                        <td class="pjlabelkh pjlabelkh-height" style="font-size: 14px !important"><a href="{{$item->id}}" draggable="false" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">{{$item->head_tailor}}</a></td>
                        <td class="pjlabelkh pjlabelkh-height">{{$item->tailor}}</td>
                        <td class="pjlabelkh pjlabelkh-height">{{$item->start_date}}</td>
                        <td class="pjlabelkh pjlabelkh-height">{{$item->end_date}}</td>
                        <td class="pjlabelkh pjlabelkh-height">{{$item->pj_customer_name}}</td>
                        <td class="pjlabelkh pjlabelkh-height">{{$item->project}}</td>
                        <td style="text-align: center">{{$item->quantity}}</td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#pjde{{$item->id}}">
                                <label for="progress_de"><progress max="100" value="{{$item->progress_de}}" style="--p:{{$item->progress_de}}%">{{$item->progress_de}}%</progress></label>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Calendar List Start -->
        <div class="card">
            <div class="card-body">
                <table id="project_table" class="stripe" style="width:100%">
                    <div class="row mb-2">
                        <div class="col-md-2 custom_width" style="width:10.666%;!important">
                            <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                                <input class="form-control" placeholder="Start" id="min" autocomplete="off" />
                                <span class="search-magnifier-icon">
                                    <i data-acorn-icon="search"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 custom_width" style="width:10.666%;!important">
                            <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                                <input class="form-control" placeholder="End" id="max" autocomplete="off" />
                                <span class="search-magnifier-icon">
                                    <i data-acorn-icon="search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th class="project-den-th" style="text-align: center !important;">No</th>
                            <th class="project-den-th">មេជាង</th>
                            <th class="project-den-th">ជាងដេរ</th>
                            <th class="project-den-th">ថ្ងៃចាប់ផ្តើមដេរ</th>
                            <th class="project-den-th">ថ្ងៃបញ្ចប់ដេរ</th>
                            <th class="project-den-th">អតិថិជន</th>
                            <th class="project-den-th">Project</th>
                            <th class="project-den-th">ចំនួន</th>
                            <th class="project-den-th">Progress</th>
                            <th class="project-den-th">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                        @foreach ($project as $item)
                        @php

                            if ( $item->progress == '100'):
                                $color = '#c6c9c6';

                            else:
                                $color = 'white';
                            endif;


                        @endphp
                            <tr style="background-color: {{$color}}" class="hidetr">
                                <td style="text-align: center">{{$loop->iteration}}</td>
                                <td class="pjlabelkh pjlabelkh-height" style="font-size: 14px !important"><a href="{{$item->id}}" draggable="false" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">{{$item->head_tailor}}</a></td>
                                <td class="pjlabelkh pjlabelkh-height">{{$item->tailor}}</td>
                                <td class="pjlabelkh pjlabelkh-height">{{$item->start_date}}</td>
                                <td class="pjlabelkh pjlabelkh-height">{{$item->end_date}}</td>
                                <td class="pjlabelkh pjlabelkh-height">{{$item->pj_customer_name}}</td>
                                <td class="pjlabelkh pjlabelkh-height">{{$item->project}}</td>
                                <td style="text-align: center">{{$item->quantity}}</td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#pjde{{$item->id}}">
                                        <label> {{$item->progress_de}}% <progress max="100" value="{{$item->progress_de}}" style="--p:{{$item->progress_de}}%">{{$item->progress_de}}%</progress></label>
                                    </a>
                                    @include('admin-view.calendar.project_de_progress')
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                        <a type="button" href="{{$item->id}}" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a class="dropdown-item" href="edit_project{{$item->id}}" data-bs-toggle="modal" data-bs-target="#pj{{$item->id}}">
                                                <span class="align-middle d-inline-block">Edit</span>
                                            </a>


                                            <a class="dropdown-item" href="delete{{$item->id}}" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                                <span class="align-middle d-inline-block">Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                @include('admin-view.calendar.delete_project_de_modal')
                                @include('admin-view.calendar.edit_project_modal')

                            </tr>

                            <!-- Modal -->
                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-5">{{$item->purpose}}</p>
                                        <div class="" style="display: inline-flex;">
                                            <img src="{{ url('public/Image/'.$item->pj_image1) }}" class="projectimg"  onerror="this.style.display = 'none'">
                                            <img src="{{ url('public/Image/'.$item->pj_image2) }}" class="projectimg"  onerror="this.style.display = 'none'">
                                        </div>
                                        <div class="" style="display: inline-flex;">
                                            <img src="{{ url('public/Image/'.$item->pj_image3) }}" class="projectimg"  onerror="this.style.display = 'none'">
                                            <img src="{{ url('public/Image/'.$item->pj_image4) }}" class="projectimg"  onerror="this.style.display = 'none'">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('admin-view.calendar.js-css')
<script>
    function progressde(){
        var progress1 = document.getElementById("progress_de").value;
        var progress2 = document.getElementById("progress").value;
        var total_progress = +progress2 + (+progress1 / 2);
        document.getElementById("total_progress").value = total_progress;
    }
  </script>
@endsection
