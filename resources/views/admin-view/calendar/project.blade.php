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

@section('js_page')
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="/js/forms/controls.datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/customers.list.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="/js/dateRange.js"></script>
@endsection

@section('content')

@include('admin-view.calendar.calendar-css')

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
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_calendar()" />
                    <span class="search-magnifier-icon">
                        <i data-acorn-icon="search"></i>
                    </span>
                    <span class="search-delete-icon d-none">
                    <i data-acorn-icon="close"></i>
                    </span>
                </div>
            </div>
            <!-- Search End -->
            <div class="col">
                <a href="Project/History" class="btn btn-success">HISTORY</a>

                <a href="Project/Den" class="btn btn-primary">គម្រោង ដិន</a>

                <a href="Project/De" class="btn btn-primary">គម្រោង ដេរ</a>
            </div>
            <div class="col" style="text-align: right">
                <div class="d-inline-block">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addprogress">
                        Create
                    </button>

                    <!-- Modal -->
                   @include('admin-view.calendar.project_form')
                    <!-- Length End -->

                </div>
            </div>
        </div>
        <!-- Controls End -->

        <!-- Calendar List Start -->
        <div class="card">
            <div class="card-body">
                <table id="filter_pj" class="stripe" style="width:100%">
                    <div class="row mb-2">
                        <div class="col-md-2 custom_width" style="width:10.666%;!important">
                            <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                                <input class="form-control" placeholder="Start" id="minpj" autocomplete="off" />
                                <span class="search-magnifier-icon">
                                    <i data-acorn-icon="search"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 custom_width" style="width:10.666%;!important">
                            <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                                <input class="form-control" placeholder="End" id="maxpj" autocomplete="off" />
                                <span class="search-magnifier-icon">
                                    <i data-acorn-icon="search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th class="project-th">No</th>
                            <th class="project-th">មេជាង</th>
                            <th class="project-th">កូនជាង</th>
                            <th class="project-th">ជាងដិន</th>
                            <th class="project-th">ថ្ងៃចាប់ផ្តើមដិន</th>
                            <th class="project-th">ថ្ងៃបញ្ចប់ដិន</th>
                            <th class="project-th">អតិថិជន</th>
                            <th class="project-th">Project</th>
                            <th class="project-th">ចំនួន</th>
                            <th class="project-th">ថ្ងៃកម្ម៉ង</th>
                            <th class="project-th">ថ្ងៃកាត់</th>
                            <th class="project-th">ថ្ងៃមកល</th>
                            <th class="project-th">ថ្ងៃមកយក</th>
                            <th class="project-th">ថ្ងៃបញ្ចប់</th>
                            <th class="project-th">ថ្ងៃពន្យារ</th>
                            <th class="project-th">សំគាល់</th>
                            <th class="project-th">បញ្ហាផ្សេងៗ</th>
                            <th class="project-th">Progress</th>
                            <th class="project-th">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                        @foreach ($project as $item)

                            <tr>
                                <td style="text-align: center; width:20px">{{$loop->iteration}}</td>
                            <td class="pjlabelkh pjlabelkh-height" style="font-size: 14px !important; width:100px !important"><a href="{{$item->id}}" draggable="false" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">{{$item->head_tailor}}</a></td>
                            <td class="pjlabelkh pjlabelkh-height">
                                <div class="scrollbar" id="style-1">
                                    <div class="force-overflow" style="text-align: center">{{$item->tailor}}</div>
                                </div>
                            </td>
                            <td class="pjlabelkh pjlabelkh-height">{{$item->den_tailor}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->den_start_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->den_end_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height">{{$item->pj_customer_name}}</td>
                            <td class="pjlabelkh pjlabelkh-height">
                                <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">{{$item->project}}</div>
                                </div>
                            </td>
                            <td class="pjlabelkh pjlabelkh-height">{{$item->quantity}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->order_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->process_start_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->testing_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->pickup_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->end_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date">{{$item->delay_date}}</td>
                            <td class="pjlabelkh pjlabelkh-height td-date" style="text-align:left; font-size: 12px !important" >
                                <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">{{$item->note}}</div>
                                </div>
                            </td>
                            <td class="pjlabelkh pjlabelkh-height" style="text-align:left; font-size: 12px !important" >
                                <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">{{$item->problem}}</div>
                                </div>
                            </td>
                                <td>
                                    {{-- <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{$item->progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$item->progress}}%">{{$item->progress}}%</div>
                                    </div> --}}

                                    <label> {{$item->progress}}% <progress max="100" value="{{$item->progress}}" style="--p:{{$item->progress}}%">{{$item->progress}}%</progress></label>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                                        <a type="button" href="{{$item->id}}" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a class="dropdown-item" href="edit_project{{$item->id}}" data-bs-toggle="modal" data-bs-target="#pj{{$item->id}}">
                                                <span class="align-middle d-inline-block">Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="delete{{$item->id}}" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                                <span class="align-middle d-inline-block">លុប</span>
                                            </a>
                                            <form method="POST" action="/Admin/Calendar/Edit/Project/{{$item->id}}/True" id="form" enctype="multipart/form-data">
                                                @csrf
                                                @include('admin-view.calendar.project_den_form_btn')
                                                <button class="dropdown-item" type="submit">
                                                    <span class="align-middle d-inline-block" >មិនទាន់ដិន</span>
                                                </button>
                                            </form>

                                            <form method="POST" action="/Admin/Calendar/Edit/Project/{{$item->id}}/True" id="form" enctype="multipart/form-data">
                                                @csrf
                                                @include('admin-view.calendar.project_de_form_btn')
                                                <button class="dropdown-item" type="submit">
                                                    <span class="align-middle d-inline-block" >មិនទាន់ដេរ</span>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                                @include('admin-view.calendar.delete_project_modal')

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
@endsection
