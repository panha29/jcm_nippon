@php
    $html_tag_data = [];
    $title = '';
    $description= '';
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])


@section('css')
<link rel="stylesheet" href="/css/vendor/select2.css"/>
<link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
<link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
<link rel="stylesheet" href="/css/datatables/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/css/datatables/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/select2.full.min.js"></script>
@endsection

@section('js_page')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="/js/moment.min.js"></script>
<script src="/js/datatables/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="/js/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="/js/datatables/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="/js/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="/js/forms/controls.datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/js/dateRange.js"></script>
@endsection

@section('content')

<style>

    .center_page{
        background-color: white;
        /* width: 40%; */
    }
    .datepicker{
        width: 315px;
    }
</style>
    <!-- Title and Top Buttons End -->

    @include('admin-view.issue_invoice.issue_form.css')
    @include('admin-view.issue_invoice.issue_form.js')
    <div class="row">
        <div class="col">
            @include('admin-view.issue_invoice.issued_product_preview')
        </div>
        <div class="col">
            <form action="/Admin/Orders/Post/Issued/Invoice" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Invoice" name="invoice" autocomplete="off" value="{{$data->invoice}}" readonly/>
                            <label class="labelkh1">Invoice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="issued_by" name="issued_by" autocomplete="off" value="{{ Auth::user()->name }}"/>
                            <label class="labelkh1">ISSUED BY</label>
                        </div>
                        <div class="form-floating mb-3" hidden>
                            <input type="text" class="form-control" placeholder="issued_paid" name="issued_paid" autocomplete="off" value="Paid"/>
                            <label class="labelkh1">Paid</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="ទូរស័ព្ទ" id="issued_payment_via" name="issued_payment_via" autocomplete="off" required/>
                            <label class="labelkh1">PAYMENT VIA</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Date" name="issued_date" data-provide="datepicker" autocomplete="off" required/>
                            <label>ISSUED DATE</label>
                        </div>
                    </div>
                </div><br>
                 @include('admin-view.issue_invoice.issue_data_form')
                <div style="float:right">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
            </form>
        </div>
    </div>
<script>
    var table = document.getElementsByTagName('table')[0],
  rows = table.getElementsByTagName('tr'),
  text = 'textContent' in document ? 'textContent' : 'innerText';

for (var i = 1, len = rows.length; i < len; i++) {
  rows[i].children[0][text] = i + rows[i].children[0][text];
}
</script>
@endsection
