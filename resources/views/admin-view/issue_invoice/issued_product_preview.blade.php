<div style="scale:0.8; margin-top:-110px">
    <div class="center_page body">
        <div style="height:10in">
            <header>
                <span><img alt="" src="{{URL::asset('img/logo.png')}}" style="width:200px; height:auto"></span>
                    <br>
                <h1>Invoice</h1>
                @include('admin-view.issue_invoice.issue_form.info')
            </header>
            <article>
                <table class="inventory" style="border-radius: 15px">
                    <thead>
                        <tr>
                            <th style="width:50px"><span>No</span></th>
                            <th style="width:" class="font"><span>ITEMS</span></th>
                            <th style="width:50px" class="font"><span>QTY</span></th>
                            <th style="width:100px" class="font"><span>UNIT PRICE</span></th>
                            {{-- <th class="font"><span>UNIT DISC</span></th> --}}
                            <th style="width:100px" class="font"><span>TOTAL</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data->product1 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product1}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct1}}</span></td>
                                <td style="" class="labelkh1">{{number_format($data->price_product1,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount1}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price1,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product2 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product2}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct2}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product2,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount2}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price2,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product3 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product3}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct3}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product3,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount3}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price3,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product4 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product4}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct4}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product4,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount4}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price4,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>
                        <?php if ($data->product5 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product5}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct5}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product5,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount5}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price5,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>
                        <?php if ($data->product6 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product6}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct6}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product6,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount6}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price6,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>
                        <?php if ($data->product7 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product7}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct7}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product7,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount7}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price7,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product8 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product8}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct8}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product8,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount8}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price8,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product9 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product9}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct9}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product9,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount9}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price9,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product10 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product10}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct10}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product10,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount10}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price10,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product11 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product11}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct11}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product1,21)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount11}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price11,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product12 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product12}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct12}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product12,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount12}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price12,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product13 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product13}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct13}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product13,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount13}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price13,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>

                        <?php if ($data->product14 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product14}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct14}}</td>
                                <td style="" class="labelkh1">{{number_format($data->price_product14,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount14}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price14,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>
                        <?php if ($data->product15 != "") { ?>
                            <tr>
                                <td style="" class="labelkh1"></td>
                                <td style="" class="labelkh1">{{$data->product15}}</td>
                                <td style="text-align:center" class="labelkh1">{{$data->qtyproduct15}}</span></td>
                                <td style="" class="labelkh1">{{number_format($data->price_product15,2)}} <span class="text-small">$</span></td>
                                {{-- <td style="" class="labelkh1">{{$data->pd_discount0}}%</span></td> --}}
                                <td style="" class="labelkh1">{{number_format($data->total_price15,2)}} <span class="text-small">$</span></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                {{-- <a class="add">+</a> --}}
                <table class="balance">
                    <tr>
                        <th class="labelkh1"><span>សរុប/Total</span></th>
                        <td><span>{{number_format($data->totalprice,2)}}</span><span data-prefix> $</span></td>
                    </tr>
                    <tr>
                        <th class="labelkh1"><span>Discount</span></th>
                        <td><span>{{number_format($data->discount,2)}}</span><span data-prefix> $</span></td>
                    </tr>
                    <tr>
                        <th class="labelkh1"><span>កក់មុន/Deposit</span></th>
                        <td><span contenteditable="true">{{number_format($data->deposit,2)}}</span><span data-prefix>&nbsp;$</span></td>
                    </tr>
                    <tr>
                        <th class="labelkh1"><span>នៅខ្វះ/Balance</span></th>
                        <td><span contenteditable="true">{{number_format($data->balance,2)}}</span><span data-prefix>&nbsp;$</span></td>
                    </tr>
                </table>
                <br>

            </article>
            <div class="container" style="height: 225px !important; position:relative">
                @include('admin-view.issue_invoice.issue_form.data-image')
                <br>
            </div>
        </div>
        <div class="container">
            @include('admin-view.issue_invoice.issue_form.signature')
        </div>
    </div>
</div>
