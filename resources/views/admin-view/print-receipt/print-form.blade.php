<html>
	<head>
		<meta charset="utf-8">
		<title>Receipt</title>

	</head>
@include('admin-view.print/css')
@include('admin-view.print/js')
<style>
.font{
		font-family: 'Nokora', sans-serif;
	}
th ,tr, td{
    border-color:  black!important;
}
.paid{
    font-size: 119px;
    position: absolute;
    margin-left: 98px;
    margin-top: 421px;
    color: rgba(0, 0, 0, 0.5);
    transform: rotate(-10deg);
    letter-spacing: 8px;
}

</style>

<body>
    @include('admin-view.print/signature')
        <h1 class="paid">PAID</h1>
			<div class="cs-invoice_btns cs-hide_print">
				<a href="javascript:window.print()" class="cs-invoice_btn cs-color1 print print-btn">
				  <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24"></circle></svg>
				  <span>Print</span>
				</a>
                <a href="/Admin/Orders/List" class="cs-invoice_btn cs-color1 print print-btn" style="margin-top: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M5.828 7l2.536 2.536L6.95 10.95 2 6l4.95-4.95 1.414 1.414L5.828 5H13a8 8 0 1 1 0 16H4v-2h9a6 6 0 1 0 0-12H5.828z"/> </g> </svg>
                    <span>Back</span>
                </a>
			</div>
				<header>
					<span><img alt="" src="{{URL::asset('img/logo.png')}}" style="width:200px; height:auto"></span>
						<br>
					<h1>Receipt</h1>
					@include('admin-view.print/info')
				</header>
				<article>
					<table class="inventory" style="border-radius: 15px">
						<thead>
							<tr>
								<th style="width:50px"><span>No</span></th>
								<th style="width:350px" class="font"><span>ITEMS</span></th>
								<th style="width:50px" class="font"><span>QTY</span></th>
								<th class="font"><span>UNIT PRICE</span></th>
								{{-- <th class="font"><span>UNIT DISC</span></th> --}}
								<th class="font"><span>TOTAL</span></th>
							</tr>
						</thead>
						<tbody>
                            <?php if ($item->product1 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product1}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct1}}</span></td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product1}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount1}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price1,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

							<?php if ($item->product2 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product2}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct2}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product2}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount2}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price2,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

							<?php if ($item->product3 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product3}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct3}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product3}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount3}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price3,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

							<?php if ($item->product4 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product4}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct4}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product4}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount4}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price4,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>
							<?php if ($item->product5 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product5}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct5}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product5}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount5}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price5,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>
							<?php if ($item->product6 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product6}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct6}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product6}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount6}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price6,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>
							<?php if ($item->product7 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product7}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct7}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product7}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount7}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price7,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product8 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product8}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct8}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product8}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount8}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price8,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product9 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product9}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct9}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product9}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount9}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price9,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product10 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product10}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct10}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product10}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount10}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price10,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product11 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product11}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct11}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product11}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount11}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price11,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product12 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product12}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct12}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product12}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount12}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price12,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product13 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product13}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct13}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product13}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount13}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price13,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>

                            <?php if ($item->product14 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product14}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct14}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product14}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount14}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price14,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>
                            <?php if ($item->product15 != "") { ?>
								<tr>
									<td style="text-align: center" class="labelkh1"></td>
									<td style="text-align: center" class="labelkh1">{{$item->product15}}</td>
									<td style="text-align: center" class="labelkh1">{{$item->qtyproduct15}}</span></td>
									<td style="text-align: center" class="labelkh1">{{$item->price_product15}} <span class="text-small">$</span></td>
									{{-- <td style="text-align: center" class="labelkh1">{{$item->pd_discount0}}%</span></td> --}}
									<td style="text-align: center" class="labelkh1">{{number_format($item->total_price15,2)}} <span class="text-small">$</span></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					{{-- <a class="add">+</a> --}}
					<table class="balance">
						<tr>
							<th class="labelkh1"><span>សរុប/Total</span></th>
							<td><span>{{number_format($item->totalprice,2)}}</span><span data-prefix> $</span></td>
						</tr>
						<tr>
							<th class="labelkh1"><span>Discount</span></th>
							<td><span>{{number_format($item->discount,2)}}</span><span data-prefix> $</span></td>
						</tr>
						<tr>
							<th class="labelkh1"><span>កក់មុន/Deposit</span></th>
							<td><span contenteditable="true">{{number_format($item->deposit,2)}}</span><span data-prefix>&nbsp;$</span></td>
						</tr>
						<tr>
							<th class="labelkh1"><span>នៅខ្វះ/Balance</span></th>
							<td><span contenteditable="true">{{number_format($item->balance,2)}}</span><span data-prefix>&nbsp;$</span></td>
						</tr>
					</table>
					<br>
				</article>

                <div class="page-break"></div>
				<div class="container" style="height: 225px !important; position:relative">
                    @include('admin-view.print/data-image')
				<br>
                </div>
				<script>
					var table = document.getElementsByTagName('table')[0],
				  rows = table.getElementsByTagName('tr'),
				  text = 'textContent' in document ? 'textContent' : 'innerText';

				for (var i = 1, len = rows.length; i < len; i++) {
				  rows[i].children[0][text] = i + rows[i].children[0][text];
				}
				</script>
	</body>
</html>
