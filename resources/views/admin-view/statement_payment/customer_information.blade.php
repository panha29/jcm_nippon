
@php
$html_tag_data = [];
$title = 'Statement';
$description= 'Ecommerce Statement'
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
<script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>

@endsection

@section('content')
@include('admin-view.statement_payment.css')
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

            <table id="filter_table" class="ui celled table" style="border:none">
                <br>
                <thead>

                    <tr style="text-align: center">
                        <th>#</th>
                        <th>Date</th>
                        <th>Invoice No</th>
                        <th>Items</th>
                        <th>QTY</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Total Amount</th>
                        <th>Balance</th>
                        <th hidden>Paid</th>


                    </tr>
                </thead>
                <tbody>

                    {{-- <tr><td colspan="11">អាស័យដ្ឋាន ៖ ជាន់ទី០៦, ផ្ទះលេខ៥១ បណ្តោយផ្លូវ២៧១ សង្កាត់ផ្សារដើមថ្កូវ ខណ្ឌចំកាមន រាជធានីភ្នំពេញ ។</td></tr>
                    <tr><td colspan="11">ទូរស័ព្ទលេខោះ ០១៧ ២៤០ ៩៩៩ / ០៦១ ៨២៨ ៨៩៩</td ></tr>
                    <tr><td colspan="11">ABA Company: 012 828858</td></tr>
                    <tr><td colspan="11">Name: MENG BOPHA</td></tr> --}}



                    @foreach ($sindex as $item)

                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product1 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product1}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct1}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product1}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount1}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price1,2)}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->totalprice,2)}}</td>
                                <td class="col-1" style="text-align: center;"> {{$item->balance}}</td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product2 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product2}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct2}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product2}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount2}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price2,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product3 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product3}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct3}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product3}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount3}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price3,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product4 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product4}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct4}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product4}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount4}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price4,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product4 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product4}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct4}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product4}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount4}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price4,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product5 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product5}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct5}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product5}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount5}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price5,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product6 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product6}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct6}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product6}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount6}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price6,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product7 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product7}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct7}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product7}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount7}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price7,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product8 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product8}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct8}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product8}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount8}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price8,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product9 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product9}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct9}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product9}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount9}}</td>
                                <td class="col-1" style="text-align: center"> {{number_format($item->total_price9,2)}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product10 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product10}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct10}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product10}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount10}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price10}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product11 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product11}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct11}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product11}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount11}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price11}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product12 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product12}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct12}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product12}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount12}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price12}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product13 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product13}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct13}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product13}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount13}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price13}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product14 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product14}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct14}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product14}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount14}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price14}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($item->issued_paid == "") { ?>
                        <?php if ($item->product15 != "") { ?>
                            <tr style="border: 1px solid lightgray;">
                                <td class="col-1" style="text-align: center">{{$loop->iteration}}</td>
                                <td class="col-1" style="text-align: center;">{{$item->date}}</td>
                                <td class="col-1" style="text-align: center">{{$item->invoice}}</td>
                                <td class="col-1" style="text-align: center">{{$item->product15}}</td>
                                <td class="col-1" style="text-align: center">{{$item->qtyproduct15}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->price_product15}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->pd_discount15}}</td>
                                <td class="col-1" style="text-align: center"> {{$item->total_price15}}</td>
                                <td class="col-1" style="text-align: center"> </td>
                                <td class="col-1" style="text-align: center;"> </td>
                                <td class="col-1" style="text-align: center;" hidden>{{$item->issued_paid}}</td>
                            </tr>
                        <?php } ?>
                    <?php } ?>

                    @endforeach

                    <tr style="border: 1px solid lightgray;">
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center;"></td>
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center"></td>
                        <td class="col-1" style="text-align: center"> </td>
                        <td class="col-1" style="text-align: center"><b>TOTAL</b></td>
                        <td class="col-1" style="text-align: center;">{{number_format($total,2)}}</td>
                        <td class="col-1" style="text-align: center" hidden> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

