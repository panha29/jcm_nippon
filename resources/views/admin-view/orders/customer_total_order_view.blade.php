
@php
$html_tag_data = [];
$title = 'Customer Order View';
$description= 'Ecommerce Customer Order View'
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
/* .dataTables_length{
    float: right !important;
    margin-right: -100% !important;
} */
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
            <table id="customer_list" class="ui celled table" style="border:none">
                <div class="row" >
                    <div class="col-md-3">
                        <label class="form-label">START:</label>
                        <input type="text" id="min" name="min" class="form-control">
                    </div>
                    <div  class="col-md-3">
                        <label class="form-label">END:</label>
                        <input type="text" id="max" name="max" class="form-control">
                    </div>
                    <div class="col" style="text-align: right;">
                        {{-- <h1 style="margin-top:revert !important;">Total Spend: &nbsp;<b>{{$total}}<b> $</h1> --}}
                            <h1 style="margin-top:revert !important;">Total Spend: &nbsp;<b><b> $</h1>
                    </div>
                </div>
                <br>
                <thead>
                    <tr style="text-align: center">
                        <th>ID</th>
                        <th>NAME</th>
                        <th class="order_list_mobile">PHONE</th>
                        <th>DATE</th>
                        <th class="order_list_mobile">DEPOSIT</th>
                        <th>BALANCE</th>
                        <th class="order_list_mobile"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sindex as $item)
                    <tr style="border: 1px solid lightgray;">
                        <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                        <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                        <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                        <td class="col-1" style="text-align: center">{{$item->order_customer}}</td>
                        <td class="col-1" style="text-align: center;">{{$item->balance}}</td>
                        <td class="col-1" style="text-align: center;">
                            <a draggable="false" class="btn btn-primary print" style="display:inline-grid" target="_blank" href="Receipt/{{$item->id}}">Receipt</a>
                            <a draggable="false" class="btn btn-success print" style="display:inline-grid" target="_blank" href="/Orders/Invoice/{{$item->id}}">Invoice</a>
                        </td>
                    </tr>
                    @endforeach
                    {{-- @foreach ($sindex as $item) --}}
                    {{-- <tr style="border: 1px solid lightgray;">
                        <td class="col-1" style="text-align: center">{{$orid}}</td>
                        <td class="col-1" style="text-align: center">{{$name}}</td>
                        <td class="col-1" style="text-align: center;">{{$phone}}</td>
                        <td class="col-1" style="text-align: center">{{$date}}</td>
                        <td class="col-1" style="text-align: center">{{$totalprice}}</td>
                        <td class="col-1" style="text-align: center;">{{$deposit}}</td>
                        <td class="col-1" style="text-align: center;">{{$balance}}</td>
                        <td class="col-1" style="text-align: center;">
                            <a draggable="false" class="btn btn-primary print" style="display:inline-grid" target="_blank" href="Receipt/">Release</a>
                        </td>
                    </tr> --}}
                    {{-- @endforeach --}}

                    {{-- @foreach ($data as $item)
                    <tr style="border: 1px solid lightgray;">
                        <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                        <td class="col-1" style="text-align: left"><a href="Statement/{{$item->order_customer}}" class="labelkh">{{$item->order_customer}}</a></td>
                        <td class="col-1 order_list_mobile" style="text-align: center">{{$item->order_phone}}</td>
                        <td class="col-1" style="text-align: center">{{$item->issued_date}}</td>
                        {{-- <td class="col-1 order_list_mobile" style="text-align: center">{{$item->totalprice}}</td> --}}
                        <td class="col-1 order_list_mobile" style="text-align: center">{{$item->deposit}}</td>
                        <td class="col-1" style="text-align: center"><b>{{$item->balance}}</b></td>
                        <td class="col-1" style="text-align: center"><a href="get%issue/confirm%issue/{{$item->id}}" class="btn btn-warning" draggable="false">CONFIRM</a></td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
