@php
    $html_tag_data = [];
    $title = 'Booking List';
    $description= 'Ecommerce Booking List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')

<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/select2.full.min.js"></script>

@endsection

@section('js_page')


<script src="/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/datatables/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="/js/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="/js/dateRange.js"></script>
@endsection

@section('content')
<style>
    .dataTables_filter{
    display: none !important;
}
    body{
        background-color: #e7e7e7;
    }
    th{
        text-align: center !important;
    }
    tr{
        vertical-align: middle;
    }
</style>
@include('admin-view.calendar.css')
<div class="">
    <div class="page-title-container">
        <div class="row">
            <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                    <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Home</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                </div>
            </div>

            <div class="col-3 d-flex align-items-end justify-content-end">
                <section class="scroll-section" id="default">
                </section>
            </div>
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Controls Start -->
    <div class="row mb-2">
        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                <input class="form-control" placeholder="Search" id="myInput" onkeyup="filter_calendar()" autocomplete="off" />
                <span class="search-magnifier-icon">
                    <i data-acorn-icon="search"></i>
                </span>
                <span class="search-delete-icon d-none">
                <i data-acorn-icon="close"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- Controls End -->

    <!-- Calendar List Start -->
    <div class="card">
        <div class="card-body">
            <table id="filter_table" class="display" style="width:100%">
                <div class="row mb-1">
                    <div class="col-md-1 custom_width">
                        <div class="d-inline-block float-md-start me-1 mb-2 search-input-container shadow" style="background-color: #e7e7e7">
                            <input class="form-control" placeholder="Start" id="min" autocomplete="off" />
                            <span class="search-magnifier-icon">
                                <i data-acorn-icon="search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1 custom_width">
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
                        <th>ID</th>
                        <th style="text-align:left !important;" class="labelkh">ឈ្មោះ</th>
                        {{-- <th style="text-align:left !important;">Title</th> --}}
                        <th class="labelkh">ថ្ងៃផ្សេងៗ</th>
                        <th class="labelkh col-2">ថ្ងៃកម្ម៉ង</th>
                        <th class="labelkh col-2">ថ្ងៃមកល</th>
                        <th class="labelkh col-2">ថ្ងៃមកយក</th>
                        <th class="labelkh">គោលបំណង</th>
                        <th class="labelkh" hidden>ក្រណាត់?</th>
                        <th class="labelkh" hidden>ម៉ូតបុរាណ</th>
                        <th class="labelkh" hidden>ម៉ូតសម័យ</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($bkdate as $item)
                        <tr>
                            <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                            <td><a href="{{$item->id}}" class="labelkh" draggable="false" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">{{$item->name}}</a>
                            </td>
                            {{-- <td class="labelkh">{{$item->title}}</td> --}}
                            <td>{{$item->date}} <br>  {{$item->time}} </td>
                            <td class="col-2" style="text-align: center">{{$item->order_date}} <br>  {{$item->order_time}} </td>
                            <td class="col-2" style="text-align: center">{{$item->testing_date}} <br> {{$item->testing_time}} </td>
                            <td class="col-2" style="text-align: center">{{$item->arriving_date}} <br>  {{$item->arriving_time}} </td>
                            <td class="labelkh">{{$item->purpose}}</td>
                            <td hidden>{{$item->items}}</td>
                            <td hidden>{{$item->traditionaldress}}</td>
                            <td hidden>{{$item->moderndress}}</td>
                            <td class="">
                                <div class="dropdown">
                                    <a type="button" href="{{$item->id}}" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                                    <div class="dropdown-menu">
                                        <a href="edit/calendar/{{$item->id}}" class="dropdown-item" draggable="false"  data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}">
                                            Edit
                                        </a>
                                        <a href="delete/booking/{{$item->id}}" class="dropdown-item" draggable="false"  data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                            @include('admin-view/calendar/edit_form_modal')
                            @include('admin-view/calendar/delete_booking_modal')
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
                                        <p class="mb-5 labelkh">អតិថិជនមានក្រណាត់ដែលឬទេ? {{$item->items}}, មានម៉ូតបុរាណចំនួន {{$item->traditionaldress}}, មានម៉ូតសម័យចំនួន {{$item->moderndress}}</p>

                                        <div class="" style="display: inline-flex;">
                                            <img src="{{ url('public/Image/'.$item->bookingimg1) }}" class="bkingimg"  onerror="this.style.display = 'none'">
                                            <img src="{{ url('public/Image/'.$item->bookingimg2) }}" class="bkingimg"  onerror="this.style.display = 'none'">
                                        </div>
                                        <div class="" style="display: inline-flex;">
                                            <img src="{{ url('public/Image/'.$item->bookingimg3) }}" class="bkingimg"  onerror="this.style.display = 'none'">
                                            <img src="{{ url('public/Image/'.$item->bookingimg4) }}" class="bkingimg"  onerror="this.style.display = 'none'">
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
