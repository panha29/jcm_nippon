
@php
$html_tag_data = [];
$title = 'Customer History';
$description= 'Ecommerce Customer History'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')

@endsection

@section('js_page')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

@endsection
<style>
.center{
    margin-left: auto;
    margin-right: auto;
    display: block;
}

tr{
    height: 50px;
}
input{
    font-size: 1em;
    height: auto;
    min-height: var(--input-height);
    color: var(--body);
    box-shadow: initial !important;
    background-color: var(--foreground);
    border-color: var(--separator);
    border-radius: var(--border-radius-md);
    filter: none;
    transition: border-color 0.15s ease-in-out;
}
#example1_filter{
    display: none;
}

</style>

@section('content')
<div class="container">
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
    <div class="card">
        <div class="card-body">
            <table id="customer_list" class="ui celled table">
                {{-- <div class="row" >
                    <div class="col-md-3">
                        <label class="form-label">START:</label>
                        <input type="text" id="min" name="min" class="form-control">
                    </div>
                    <div  class="col-md-3">
                        <label class="form-label">END:</label>
                        <input type="text" id="max" name="max" class="form-control">
                    </div>
                </div> --}}
                <br>
                <thead>
                    <tr style="text-align: center">
                        <th >#</th>
                        <th>Name</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item as $data)
                    <tr style="border: 1px solid lightgray;">
                        <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                        <td class="col-1" style="text-align: center;"><a href="Statement/{{$data->order_customer}}" class="labelkh">{{$data->order_customer}}</a></td>
                        <td class="col-1" style="text-align: center">{{$data->order_phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection