
@php
    $html_tag_data = [];
    $title = 'Order Report';
    $description= 'Ecommerce Sale Report'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
{{-- <link rel="stylesheet" href="/css/datatables/buttons/2.2.3/css/buttons.dataTables.min.css"> --}}
<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="/css/semantic/dataTables-semanticui.min.css">
<link rel="stylesheet" href="/css/semantic/semantic.min.css">
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
.center{
    margin-left: auto;
    margin-right: auto;
    display: block;
}

tr{
    height: 50px;
}
/* input{
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
} */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
    background: none !important;
    border: none !important;

}
.tdtext{
    text-align: center;
}
</style>

@section('content')
<div class="card">
    <div class="card-body">
        {{-- <a href="users/export/" class="btn btn-success" style="float: right" draggable="false">Export</a> --}}

        <table id="filter_table" class="ui celled table" style="width:100%">
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
            <br>
            <thead>
                <tr style="text-align: center">
                    <th>Invoice</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                    <th>Total Price</th>
                    <th>Deposit</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <?php if ($item->product1 != "") { ?>
                    <tr class="tdtext">
                        <td>#{{$item->invoice}}</td>
                        <td style="width:120px">{{$item->order_customer}}</td>
                        <td style="width:120px">{{$item->address}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->order_phone}}</td>
                        <td>{{$item->product1}}</td>
                        <td>{{number_format($item->price_product1,2)}}</td>
                        <td>{{$item->qtyproduct1}}</td>
                        <td>{{number_format($item->pd_discount1,2)}}</td>
                        <td>{{number_format($item->total_price1,2)}}</td>
                        <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                        <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                    </tr>
                    <?php } ?>
                    <?php if ($item->product2 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product2}}</td>
                            <td>{{number_format($item->price_product2,2)}}</td>
                            <td>{{$item->qtyproduct2}}</td>
                            <td>{{number_format($item->pd_discount2,2)}}</td>
                            <td>{{number_format($item->total_price2,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product3 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product3}}</td>
                            <td>{{number_format($item->price_product3,2)}}</td>
                            <td>{{$item->qtyproduct3}}</td>
                            <td>{{number_format($item->pd_discount3,2)}}</td>
                            <td>{{number_format($item->total_price3,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product4 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product4}}</td>
                            <td>{{number_format($item->price_product4,2)}}</td>
                            <td>{{$item->qtyproduct4}}</td>
                            <td>{{number_format($item->pd_discount4,2)}}</td>
                            <td>{{number_format($item->total_price4,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product5 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product5}}</td>
                            <td>{{number_format($item->price_product5,2)}}</td>
                            <td>{{$item->qtyproduct5}}</td>
                            <td>{{number_format($item->pd_discount5,2)}}</td>
                            <td>{{number_format($item->total_price5,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product6 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product6}}</td>
                            <td>{{number_format($item->price_product6,2)}}</td>
                            <td>{{$item->qtyproduct6}}</td>
                            <td>{{number_format($item->pd_discount6,2)}}</td>
                            <td>{{number_format($item->total_price6,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product7 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product7}}</td>
                            <td>{{number_format($item->price_product7,2)}}</td>
                            <td>{{$item->qtyproduct7}}</td>
                            <td>{{number_format($item->pd_discount7,2)}}</td>
                            <td>{{number_format($item->total_price7,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product8 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product8}}</td>
                            <td>{{number_format($item->price_product8,2)}}</td>
                            <td>{{$item->qtyproduct8}}</td>
                            <td>{{number_format($item->pd_discount8,2)}}</td>
                            <td>{{number_format($item->total_price8,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product9 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product9}}</td>
                            <td>{{number_format($item->price_product9,2)}}</td>
                            <td>{{$item->qtyproduct9}}</td>
                            <td>{{number_format($item->pd_discount9,2)}}</td>
                            <td>{{number_format($item->total_price9,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product10 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product10}}</td>
                            <td>{{number_format($item->price_product10,2)}}</td>
                            <td>{{$item->qtyproduct10}}</td>
                            <td>{{number_format($item->pd_discount10,2)}}</td>
                            <td>{{number_format($item->total_price10,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product11 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product11}}</td>
                            <td>{{number_format($item->price_product11,2)}}</td>
                            <td>{{$item->qtyproduct11}}</td>
                            <td>{{number_format($item->pd_discount11,2)}}</td>
                            <td>{{number_format($item->total_price11,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product12 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product12}}</td>
                            <td>{{number_format($item->price_product12,2)}}</td>
                            <td>{{$item->qtyproduct12}}</td>
                            <td>{{number_format($item->pd_discount12,2)}}</td>
                            <td>{{number_format($item->total_price12,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product13 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product13}}</td>
                            <td>{{number_format($item->price_product13,2)}}</td>
                            <td>{{$item->qtyproduct13}}</td>
                            <td>{{number_format($item->pd_discount13,2)}}</td>
                            <td>{{number_format($item->total_price13,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product14 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product14}}</td>
                            <td>{{number_format($item->price_product14,2)}}</td>
                            <td>{{$item->qtyproduct14}}</td>
                            <td>{{number_format($item->pd_discount14,2)}}</td>
                            <td>{{number_format($item->total_price14,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>
                    <?php if ($item->product15 != "") { ?>
                        <tr class="tdtext">
                            <td>#{{$item->invoice}}</td>
                            <td style="width:120px">{{$item->order_customer}}</td>
                            <td style="width:120px">{{$item->address}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->order_phone}}</td>
                            <td>{{$item->product15}}</td>
                            <td>{{number_format($item->price_product15,2)}}</td>
                            <td>{{$item->qtyproduct15}}</td>
                            <td>{{number_format($item->pd_discount15,2)}}</td>
                            <td>{{number_format($item->total_price15,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->deposit,2)}}</td>
                            <td style="background-color: cornsilk; font-weight:700">{{number_format($item->balance,2)}}</td>
                        </tr>
                    <?php } ?>

                    <tr>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                        <td colspan="1" style="background-color:#ededed; border:0"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
