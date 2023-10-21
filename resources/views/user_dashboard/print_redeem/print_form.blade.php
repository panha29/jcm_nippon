<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>

	</head>
    @include('user_dashboard/print_redeem/print_css')
    @include('user_dashboard/print_redeem/print_js')
<style>
.font{
		font-family: 'Nokora', sans-serif;
        font-size: 10px;
        vertical-align: bottom;
	}
th ,tr, td{
    border-color:  black!important;
}
</style>
<body>
    <div class="cs-invoice_btns cs-hide_print">
        <a href="javascript:window.print()" class="cs-invoice_btn cs-color1 print print-btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24"></circle></svg>
            <span>Print</span>
        </a>
        <a href="/Admin/Customers/customer_statement_view/{{$item->customer_name}}" class="cs-invoice_btn cs-color1 print print-btn" style="margin-top: 50px">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M5.828 7l2.536 2.536L6.95 10.95 2 6l4.95-4.95 1.414 1.414L5.828 5H13a8 8 0 1 1 0 16H4v-2h9a6 6 0 1 0 0-12H5.828z"/> </g> </svg>
            <span>Back</span>
        </a>
    </div>
    <header>
        <span><img alt="" src="{{URL::asset('img/logo/homefix-logo.png')}}" style="width:200px; height:auto"></span>
            <br>
        <h1>reciept</h1>
        @include('user_dashboard/print_redeem/print_info')
    </header>
    <article>
        <table class="inventory" style="border-radius: 15px">
            <thead>
                <tr>
                    <th style="width:20px"><span>No</span></th>
                    <th class="font"><span>TYPE</span></th>
                    <th class="font"><span>REDEEM NO</span></th>
                    <th class="font"><span>BALANCE</span></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td style="text-align: center" class="labelkh1"></td>
                    <td style="text-align: center" class="labelkh1">{{$item->redeem_type}}</td>
                    <td style="text-align: center" class="labelkh1" style="font-size:10px">{{$item->redeem_no}}</td>
                    <td style="text-align: center" class="labelkh1">{{number_format($item->redeem_balance,2)}}$</td>
                </tr>

            </tbody>
        </table>
        <br>
    </article>
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

