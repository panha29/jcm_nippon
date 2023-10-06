
@php
    $html_tag_data = [];
    $title = 'Issued Invoice';
    $description= 'Ecommerce Issued Invoice Page';
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])


@section('css')
<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>


@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/select2.full.min.js"></script>



@endsection

@section('js_page')
<script src="/js/forms/controls.datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/datatables/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="/js/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>


@endsection

@section('content')
@include('admin-view.orders.order_css')

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
    <form method="POST" action="Post/Issue" id="form" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" class="form-control" placeholder="INVOICE" name="invoice" id="invoice" value="{{$item['invoice']}}">
            <label>INVOICE No</label>
        </div>
        <div class="form-floating mb-3 progress-modal">
            <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
            <input type="hidden" class="form-control" name="date" value="{{$item['date']}}">
            <input type="hidden" class="form-control" name="order_customer" value="{{$item['order_customer']}}">
            <input type="hidden" class="form-control" name="order_phone" value="{{$item['order_phone']}}">
            <input type="hidden" class="form-control" name="arrivelocation" value="{{$item['arrivelocation']}}">
            <input type="hidden" class="form-control" name="deliverytime" value="{{$item['deliverytime']}}">
            <input type="hidden" class="form-control" name="shipto" value="{{$item['shipto']}}">
            <input type="hidden" class="form-control" name="attendto" value="{{$item['attendto']}}">
            <input type="hidden" class="form-control" name="address" value="{{$item['address']}}">
            <input type="hidden" class="form-control" name="term" value="{{$item['term']}}">
            <input type="hidden" class="form-control" name="seller" value="{{$item['seller']}}">
            <input type="hidden" class="form-control" name="order_date" value="{{$item['order_date']}}">
            <input type="hidden" class="form-control" name="product1" value="{{$item['product1']}}">
            <input type="hidden" class="form-control" name="product2" value="{{$item['product2']}}">
            <input type="hidden" class="form-control" name="product3" value="{{$item['product3']}}">
            <input type="hidden" class="form-control" name="product4" value="{{$item['product4']}}">
            <input type="hidden" class="form-control" name="product5" value="{{$item['product5']}}">
            <input type="hidden" class="form-control" name="product6" value="{{$item['product6']}}">
            <input type="hidden" class="form-control" name="product7" value="{{$item['product7']}}">

            <input type="hidden" class="form-control" name="qtyproduct1" value="{{$item['qtyproduct1']}}">
            <input type="hidden" class="form-control" name="qtyproduct2" value="{{$item['qtyproduct2']}}">
            <input type="hidden" class="form-control" name="qtyproduct3" value="{{$item['qtyproduct3']}}">
            <input type="hidden" class="form-control" name="qtyproduct4" value="{{$item['qtyproduct4']}}">
            <input type="hidden" class="form-control" name="qtyproduct5" value="{{$item['qtyproduct5']}}">
            <input type="hidden" class="form-control" name="qtyproduct6" value="{{$item['qtyproduct6']}}">
            <input type="hidden" class="form-control" name="qtyproduct7" value="{{$item['qtyproduct7']}}">

            <input type="hidden" class="form-control" name="price_product1" value="{{$item['price_product1']}}">
            <input type="hidden" class="form-control" name="price_product2" value="{{$item['price_product2']}}">
            <input type="hidden" class="form-control" name="price_product3" value="{{$item['price_product3']}}">
            <input type="hidden" class="form-control" name="price_product4" value="{{$item['price_product4']}}">
            <input type="hidden" class="form-control" name="price_product5" value="{{$item['price_product5']}}">
            <input type="hidden" class="form-control" name="price_product6" value="{{$item['price_product6']}}">
            <input type="hidden" class="form-control" name="price_product7" value="{{$item['price_product7']}}">

            <input type="hidden" class="form-control" name="pd_discount1" value="{{$item['pd_discount1']}}">
            <input type="hidden" class="form-control" name="pd_discount2" value="{{$item['pd_discount2']}}">
            <input type="hidden" class="form-control" name="pd_discount3" value="{{$item['pd_discount3']}}">
            <input type="hidden" class="form-control" name="pd_discount4" value="{{$item['pd_discount4']}}">
            <input type="hidden" class="form-control" name="pd_discount5" value="{{$item['pd_discount5']}}">
            <input type="hidden" class="form-control" name="pd_discount6" value="{{$item['pd_discount6']}}">
            <input type="hidden" class="form-control" name="pd_discount7" value="{{$item['pd_discount7']}}">

            <input type="hidden" class="form-control" name="total_price1" value="{{$item['total_price1']}}">
            <input type="hidden" class="form-control" name="total_price2" value="{{$item['total_price2']}}">
            <input type="hidden" class="form-control" name="total_price3" value="{{$item['total_price3']}}">
            <input type="hidden" class="form-control" name="total_price4" value="{{$item['total_price4']}}">
            <input type="hidden" class="form-control" name="total_price5" value="{{$item['total_price5']}}">
            <input type="hidden" class="form-control" name="total_price6" value="{{$item['total_price6']}}">
            <input type="hidden" class="form-control" name="total_price7" value="{{$item['total_price7']}}">
            <input type="hidden" class="form-control" name="discount" value="{{$item['discount']}}">
            <input type="hidden" class="form-control" name="totalprice" value="{{$item['totalprice']}}">
            <input type="hidden" class="form-control" name="deposit" value="{{$item['deposit']}}">
            <input type="hidden" class="form-control" name="balance" value="{{$item['balance']}}">
            <input type="hidden" class="form-control" name="image1" value="{{$item['image1']}}">
            <input type="hidden" class="form-control" name="image2" value="{{$item['image2']}}">
            <input type="hidden" class="form-control" name="image3" value="{{$item['image3']}}">
            <input type="hidden" class="form-control" name="image4" value="{{$item['image4']}}">
            <input type="hidden" class="form-control" name="issued_paid" value="PAID">

            <input autocomplete="off" class="form-control" placeholder="ISSUED BY" name="issued_by" id="issued_by" value="{{$item['issued_by']}}">
            <label>ISSUED BY</label>
        </div>

        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" class="form-control" placeholder="PAYMENT VIA" name="issued_payment_via" id="issued_payment_via">
            <label>PAYMENT VIA</label>
        </div>

        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepicker" name="issued_date" placeholder="ISSUED DATE" data-provide="datepicker" autocomplete="off" id="issued_date"/>
            <label>ISSUED DATE</label>
        </div>
        <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>



@include('admin-view.orders.js')


@endsection
