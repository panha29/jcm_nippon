@php
    // $html_tag_data = [];
    $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];

    $title = 'Customer Statement';
    $description= 'Ecommerce Customer Statement Page';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/export/buttons.datatables.min.css">
    <link rel="stylesheet" href="/css/export/jquery.datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
@endsection

@section('js_vendor')

@endsection

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
@section('js_page')

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <script>
    //     $(document).ready(function() {
    //     $('#customer').DataTable( {
    //         pageLength: 50,
    //         ordering: false,
    //         dom: 'Bfrtip',
    //         lengthMenu: [[50, 70, 100,], [50, 70, 100]],
    //         // buttons: [
    //         //     // 'copy', 'excel', 'print'
    //         //     {
    //         //         extend: 'excelHtml5',
    //         //         title: 'Homefix',
    //         //         text: '<i data-acorn-icon="arrow-end-bottom" data-acorn-size="18"></i>',
    //         //         className: 'btn btn-primary',
    //         //         init: function(api, node, config) {
    //         //         $(node).removeClass('dt-button')
    //         //         }
    //         //     }
    //         // ],
    //         responsive: true
    //     } );
    // } );
    // </script>
    <script>
        var table = $('#customer').DataTable({
            pageLength: 50,
            ordering: false,
            // dom: 'Bfrtip',
            "bLengthChange" : false,
            lengthMenu: [[50, 70, 100,], [50, 70, 100]],
            responsive: true
        });

        var exportbtn = new $.fn.dataTable.Buttons(table, {

            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Homefix',
                    text: 'Export',
                    // text: '<i data-acorn-icon="arrow-end-bottom" data-acorn-size="18"></i>',
                    className: 'btn btn-success',
                    init: function(api, node, config) {
                    $(node).removeClass('dt-button')
                    }
                }
            ],

        }).container().appendTo($('#exportbtn'));

    </script>

@endsection

@section('content')
<style>

.card [class*=card-img-horizontal] {
    border-radius: initial;
    border-top-right-radius: var(--border-radius-lg);
    border-bottom-right-radius: var(--border-radius-lg);
    border-bottom-left-radius: initial;
    border-top-left-radius: initial;
    height: 100%;
}
.modal-header-custom{
    border-bottom: 0 !important;
}
.modal-content-custom {
border-radius: var(--border-radius-lg);
background: var(--foreground);
opacity: 0.1;
display: contents;
}
.modal-header-custom .btn-close {
    padding: 0.5rem 0.5rem;
    margin: -0.5rem -0.5rem -0.5rem auto;
    color: white;
}
    .preview{
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.dt-buttons {
margin-bottom: 5px;
float: right !important;

}
.dataTables_filter{
    display: none;
}
th{
    text-align: center !important;
}
td{
    height: 50px;
}
.redeem{
    text-align: center;
    background-color: orange;
    border-color:orange;
    color:white;
    border: 1px solid;
}
.totalspend{
    text-align:center;
    background-color: #ff4a4a;
    color:white;
}
.totalsum{
    text-align: center;
    background-color: #b13737;
    border-color:#b13737;
    color:white;
}
.modal-open{
    padding: 0 !important;
}
.hidebutton[value=""],
.hidebutton[value="No"]{
  display: none;
}
.khmer{
    font-family: 'Khmer', cursive;
}
</style>
<div class="container mobile-display-on">
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
                    <h1 class="mb-0 pb-0 display-4" id="title" style="width: 400px">{{ $title }}</h1>
                </div>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Controls Start ON-->
    <div class="row mb-2">
        <!-- Search Start -->
        {{-- <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                <input class="form-control" placeholder="Search" onkeyup="filter_name()" id="myInput" autocomplete="off"/>
                <span class="search-magnifier-icon"><i data-acorn-icon="search"></i></span>
                <span class="search-delete-icon d-none"><i data-acorn-icon="close"></i></span>
            </div>
        </div> --}}
        <!-- Search End -->
    </div>
    <!-- Controls End -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="col-8">
                                <h1><b>{{$name}}</b></h1>
                                <div style="width:80%; color:#979494">
                                    <p>{{$gender}}</p>
                                    <p>{{$email}}</p>
                                    <p>{{$phone}}</p>
                                    <div class="row">
                                        <div class="col-4"><p>Customer Type:</p></div>
                                        <div class="col" style="float:left"><p id="special">{{$vip}}</p></div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col">
                            <div style="text-align: end; padding:5px">
                                {{-- <button style="margin-right:5px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createredeem"{{$totalspend <= 200 ? 'disabled' : ''}} id="redeembtn">
                                    Redeem
                                </button> --}}
                                <button style="margin-right:5px" type="button" class="btn btn-primary" data-bs-toggle="modal" id="redeembtn" data-bs-target="#createredeem">
                                    Redeem
                                </button>
                                {{-- <button style="margin-right:5px" type="button" class="btn btn-primary hidebutton" data-bs-toggle="modal" data-bs-target="#createredeem" value="{{$vip}}">
                                    Special Redeem
                                </button> --}}
                                 <a  class="" id="exportbtn">
                                 </a>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table id="customer" class="ui celled table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="">INVOICE</th>
                                    <th class="khmer">បានបញ្ចុះតំលៃ</th>
                                    <th class="khmer" >ឈ្មោះ</th>
                                    <th class="khmer">ទូរស័ព្ទ</th>
                                    <th class="khmer">កាលបរិច្ឆេទ</th>
                                    <th class="khmer">រូបភាព</th>
                                    <th class="khmer">ទឹកប្រាក់ចំណាយ</th>
                                    <th class=""></th>
                                </tr>
                            </thead>
                            <tbody id="tbody-statement">
                                @foreach ($data as $item)
                                    <tr class="" style="background-color: ">
                                        <td class="col-1" style="text-align: center">#{{$item->customer_invoice}}</td>
                                        <td class="col-1" style="text-align: center" id="discounted">{{$item->customer_discount}}</td>
                                        <td class="col-2" style="text-align: center">{{$item->customer_name}}</td>
                                        <td class="col-2" style="text-align: center">{{$item->customer_phone}}</td>
                                        <td class="col-1" style="text-align: center">{{$item->customer_date}}</td>
                                        <td class="col-1" style="text-align: center"><img src="{{ URL::asset('public/Image/'.$item->customer_image) }}" width="50px" height="50px" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}" onerror="this.style.display = 'none'"></td>
                                        <td class="col-1" style="text-align: center; border-right:1px solid rgba(34,36,38,.1)">$ {{number_format($item->customer_total,2)}}</td>
                                        <td class="col-1" style="border:0px"></td>
                                    </tr>
                                    <div class="modal fade" id="modal{{$item->id}}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content-custom">
                                                <div class="modal-header-custom">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="" style="display: inline-flex;">
                                                        <img src="{{ url('public/Image/'.$item->customer_image) }}" style="width: 100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                <tr>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="text-align: center; background-color: #ff4a4a; font-family: 'Khmer', cursive; color:white; font-weight:bold;">ទឹកប្រាក់សរុប</td>
                                    <td style="text-align: center; border-right:1px solid rgba(34,36,38,.1)"><b>$ {{number_format($totalspend,2)}}</b></td>
                                    <td style="border:0px"></td>
                                </tr>
                                <tr>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="text-align: center ; border-right:1px solid rgba(34,36,38,.1); background-color: #ff4a4a; font-family: 'Khmer', cursive; color:white; font-weight:bold;">ទឹកប្រាក់នៅសល់</td>
                                    <td style="text-align: center ; border-right:1px solid rgba(34,36,38,.1);font-weight:bold" id="totalbalance" oninput="manageBtn()"></td>
                                    <td style="border:0px"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center"><b>REDEEM No</b></td>
                                    <td ></td>
                                    <td style="text-align:center"><b>REDEEM TYPE</b></td>
                                    <td style="text-align:center"><b>REDEEM NOTE</b></td>
                                    <td style="text-align:center"><b>REDEEM BY</b></td>
                                    <td style="text-align:center"><b>REDEEM DATE</b></td>
                                    <td style="text-align:center"><b>REDEEM BALANCE</b></td>
                                    <td style="text-align:center"><b>ACTION</b></td>
                                </tr>
                                @foreach ($redeem as $item)
                                <tr>
                                    <td style=""></td>
                                    <td style="text-align:center">{{$item->redeem_no}}</td>
                                    <td style="text-align:center">{{$item->redeem_type}}</td>
                                    <td style="text-align:center">{{$item->redeem_note}}</td>
                                    <td style="text-align:center">{{$item->redeem_by}}</td>
                                    <td style="text-align:center">{{$item->redeem_date}}</td>
                                    <td class="col-1" style="text-align:center">$ {{number_format($item->redeem_balance,2)}}</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                        <i data-acorn-icon="bin" data-acorn-size="18"></i>
                                        </button>
                                        <a draggable="false" class="btn btn-primary print" target="_blank" href="print/{{$item->id}}">
                                            <i data-acorn-icon="print" data-acorn-size="18"></i>
                                        </a>
                                    </td>
                                @include('admin_dashboard.customer.delete_redeem')

                                </tr>
                                @endforeach
                                <tr>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="border:0px"></td>
                                    <td style="text-align: center;background-color: #b13737; border-color:#b13737; color:white" >Total Redeem</td>
                                    <td style="text-align:center" id="totalredeem"><b>$ {{number_format($sumredeem,2)}}</b></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<div id="input_totalbalance" type="text" class="form-control" hidden></div>
@include('admin_dashboard.customer.customer_js')
@include('admin_dashboard.customer.redeem_modal')

<script>
    let special = document.getElementById("special").innerText;
    var balance = {{$totalspend}} - {{$sumredeem}};
    document.getElementById("totalbalance").innerHTML = "$" + " " + balance.toFixed(2).toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("input_totalbalance").innerHTML = balance;
    var btn = document.getElementById("redeembtn");
    if (special == 'VIP') {
        btn.disabled=false;
    } else if ((special == 'No') && (balance < 200)){
        btn.disabled=true;
    }
</script>

<script>
    let discount = {{$discount}};
    var btn = document.getElementById("redeembtn");
    if (discount !=""){
        btn.disabled=true;
    }
</script>

<script>
    $(".deleteRecord").on("click", function(){
        var id = $(this).attr("data-id");
        $.ajax({
          url: "{{ route('delete_redeem') }}",
          data: {"id": id,"_token": "{{ csrf_token() }}"},
          type: 'POST',
          success: function(result){
              location.reload();
          }
        });
      });
      document.getElementById("inp").addEventListener("change", function() {
    let x = parseInt(this.value);
    if (x < 1) this.value = 0;
    if (x > balance) this.value = balance;
    });
</script>
@endsection

