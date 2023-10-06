<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css">

</head>
<body>
    <div style="height: 500px">
        <a href="users/export/" class="btn btn-success" style="float: right" draggable="false">Export</a>

        <table id="example" class="ui celled table" style="width:100%">
            <br>
            <thead>
                <tr style="text-align: center">
                    <th>Date</th>
                    <th>Invoice</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>Phone</th>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Discount $</th>
                    <th>Total Price</th>
                    <th>Deposit</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <?php if ($item->product1 != "") { ?>
                    <tr>
                        <td class="col-1">{{$item->date}}</td>
                        <td class="col-1">#KSB{{$item->invoice}}</td>
                        <td class="col-1">{{$item->order_customer}}</td>
                        <td class="col-1">{{$item->address}}</td>
                        <td class="col-1">{{$item->order_phone}}</td>
                        <td class="col-1" style="text-align: center">{{$item->product1}}</td>
                        <td class="col-1" style="text-align: center">{{$item->price_product1}} $</td>
                        <td class="col-1" style="text-align: center">{{$item->qtyproduct1}}</td>
                        <td class="col-1" style="text-align: center">{{$item->pd_discount1}}</td>
                        <td class="col-1" style="text-align: center">{{$item->total_price1}}</td>
                        <td class="col-1" style="text-align: center">{{$item->deposit}}</td>
                        <td class="col-1" style="text-align: center">{{$item->balance}}</td>
                    </tr>
                    <?php } ?>

                    <?php if ($item->product2 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->product2}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product2}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct2}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount2}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price2}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product3 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td  class="col-1"style="text-align: center">{{$item->product3}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product3}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct3}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount3}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price3}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product4 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->product4}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product4}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct4}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount4}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price4}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product5 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1"style="text-align: center">{{$item->product5}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product5}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct5}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount5}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price5}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product6 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->product6}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product6}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct6}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount6}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price6}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product7 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->product7}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product7}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct7}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount7}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price7}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>

                    <?php if ($item->product8 != "") { ?>
                        <tr>
                            <td class="col-1">{{$item->date}}</td>
                            <td class="col-1">#KSB{{$item->invoice}}</td>
                            <td class="col-1">{{$item->order_customer}}</td>
                                <td class="col-1">{{$item->address}}</td>
                            <td class="col-1">{{$item->order_phone}}</td>
                            <td class="col-1" style="text-align: center">{{$item->product8}}</td>
                            <td class="col-1" style="text-align: center">{{$item->price_product8}} $</td>
                            <td class="col-1" style="text-align: center">{{$item->qtyproduct8}}</td>
                            <td class="col-1" style="text-align: center">{{$item->pd_discount8}}</td>
                            <td class="col-1" style="text-align: center">{{$item->total_price8}}</td>
                            <td class="col-1" style="text-align: center"><p>0</p></td>
                        <td class="col-1" style="text-align: center"><p>0</p></td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
