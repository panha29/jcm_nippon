<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Models\backup_order;
use App\Models\CustomerDetailModel;
use App\Models\CustomerModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Hamcrest\Number\OrderingComparison;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function save(Request $request){
        $order = new Order();

        if($request->file('image1')){
            $file= $request->file('image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image1']= $filename;
        }
        if($request->file('image2')){
            $file= $request->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image2']= $filename;
        }
        if($request->file('image3')){
            $file= $request->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image3']= $filename;
        }
        if($request->file('image4')){
            $file= $request->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image4']= $filename;
        }

        $order -> product1 = $request -> product1;
        $order -> product2 = $request -> product2;
        $order -> product3 = $request -> product3;
        $order -> product4 = $request -> product4;
        $order -> product5 = $request -> product5;
        $order -> product6 = $request -> product6;
        $order -> product7 = $request -> product7;
        $order -> product8 = $request -> product8;
        $order -> product9 = $request -> product9;
        $order -> product10 = $request -> product10;
        $order -> product11 = $request -> product11;
        $order -> product12 = $request -> product12;
        $order -> product13 = $request -> product13;
        $order -> product14 = $request -> product14;
        $order -> product15 = $request -> product15;
        $order -> qtyproduct1 = $request -> qtyproduct1;
        $order -> qtyproduct2 = $request -> qtyproduct2;
        $order -> qtyproduct3 = $request -> qtyproduct3;
        $order -> qtyproduct4 = $request -> qtyproduct4;
        $order -> qtyproduct5 = $request -> qtyproduct5;
        $order -> qtyproduct6 = $request -> qtyproduct6;
        $order -> qtyproduct7 = $request -> qtyproduct7;
        $order -> qtyproduct8 = $request -> qtyproduct8;
        $order -> qtyproduct9 = $request -> qtyproduct9;
        $order -> qtyproduct10 = $request -> qtyproduct10;
        $order -> qtyproduct11 = $request -> qtyproduct11;
        $order -> qtyproduct12 = $request -> qtyproduct12;
        $order -> qtyproduct13 = $request -> qtyproduct13;
        $order -> qtyproduct14 = $request -> qtyproduct14;
        $order -> qtyproduct15 = $request -> qtyproduct15;
        $order -> price_product1 = $request -> price_product1;
        $order -> price_product2 = $request -> price_product2;
        $order -> price_product3 = $request -> price_product3;
        $order -> price_product4 = $request -> price_product4;
        $order -> price_product5 = $request -> price_product5;
        $order -> price_product6 = $request -> price_product6;
        $order -> price_product7 = $request -> price_product7;
        $order -> price_product8 = $request -> price_product8;
        $order -> price_product9 = $request -> price_product9;
        $order -> price_product10 = $request -> price_product10;
        $order -> price_product11 = $request -> price_product11;
        $order -> price_product12 = $request -> price_product12;
        $order -> price_product13 = $request -> price_product13;
        $order -> price_product14 = $request -> price_product14;
        $order -> price_product15 = $request -> price_product15;
        $order -> pd_discount1 = $request -> pd_discount1;
        $order -> pd_discount2 = $request -> pd_discount2;
        $order -> pd_discount3 = $request -> pd_discount3;
        $order -> pd_discount4 = $request -> pd_discount4;
        $order -> pd_discount5 = $request -> pd_discount5;
        $order -> pd_discount6 = $request -> pd_discount6;
        $order -> pd_discount7 = $request -> pd_discount7;
        $order -> pd_discount8 = $request -> pd_discount8;
        $order -> pd_discount9 = $request -> pd_discount9;
        $order -> pd_discount10 = $request -> pd_discount10;
        $order -> pd_discount11 = $request -> pd_discount11;
        $order -> pd_discount12 = $request -> pd_discount12;
        $order -> pd_discount13 = $request -> pd_discount13;
        $order -> pd_discount14 = $request -> pd_discount14;
        $order -> pd_discount15 = $request -> pd_discount15;
        $order -> total_price1 = $request -> total_price1;
        $order -> total_price2 = $request -> total_price2;
        $order -> total_price3 = $request -> total_price3;
        $order -> total_price4 = $request -> total_price4;
        $order -> total_price5 = $request -> total_price5;
        $order -> total_price6 = $request -> total_price6;
        $order -> total_price7 = $request -> total_price7;
        $order -> total_price8 = $request -> total_price8;
        $order -> total_price9 = $request -> total_price9;
        $order -> total_price10 = $request -> total_price10;
        $order -> total_price11 = $request -> total_price11;
        $order -> total_price12 = $request -> total_price12;
        $order -> total_price13 = $request -> total_price13;
        $order -> total_price14 = $request -> total_price14;
        $order -> total_price15 = $request -> total_price15;
        $order -> order_customer = $request -> order_customer;
        $order -> order_phone = $request -> order_phone;
        $order -> arrivelocation = $request -> arrivelocation;
        $order -> shipto = $request -> shipto;
        $order -> date = $request -> date;
        $order -> deliverytime = $request -> deliverytime;
        $order -> totalprice = $request -> totalprice;
        $order -> discount = $request -> discount;
        $order -> deposit = $request -> deposit;
        $order -> balance = $request -> balance;
        $order -> address = $request -> address;
        $order -> attendto = $request -> attendto;
        $order -> term = $request -> term;
        $order -> issued_by = $request -> issued_by;
        $order -> order_date = $request -> order_date;
        $order -> seller = $request -> seller;
        $order -> invoice = $request -> invoice;
        $order -> issued_date = $request -> issued_date;
        $order -> issued_payment_via = $request -> issued_payment_via;
        $order -> issued_paid = $request -> issued_paid;
        $order -> replicate() -> setTable('backup_order')->save();
        $order -> save();
        $orderId = $order->id;
        return redirect(route('generate_invoice', ['id' => $orderId]));
    }

    function issued_invoice(Request $request){
        $order = Order::find($request->id);

        if($request->file('image1')){
            $file= $request->file('image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image1']= $filename;
        }
        if($request->file('image2')){
            $file= $request->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image2']= $filename;
        }
        if($request->file('image3')){
            $file= $request->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image3']= $filename;
        }
        if($request->file('image4')){
            $file= $request->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $order['image4']= $filename;
        }

        $order -> product1 = $request -> product1;
        $order -> product2 = $request -> product2;
        $order -> product3 = $request -> product3;
        $order -> product4 = $request -> product4;
        $order -> product5 = $request -> product5;
        $order -> product6 = $request -> product6;
        $order -> product7 = $request -> product7;
        $order -> product8 = $request -> product8;
        $order -> product9 = $request -> product9;
        $order -> product10 = $request -> product10;
        $order -> product11 = $request -> product11;
        $order -> product12 = $request -> product12;
        $order -> product13 = $request -> product13;
        $order -> product14 = $request -> product14;
        $order -> product15 = $request -> product15;
        $order -> qtyproduct1 = $request -> qtyproduct1;
        $order -> qtyproduct2 = $request -> qtyproduct2;
        $order -> qtyproduct3 = $request -> qtyproduct3;
        $order -> qtyproduct4 = $request -> qtyproduct4;
        $order -> qtyproduct5 = $request -> qtyproduct5;
        $order -> qtyproduct6 = $request -> qtyproduct6;
        $order -> qtyproduct7 = $request -> qtyproduct7;
        $order -> qtyproduct8 = $request -> qtyproduct8;
        $order -> qtyproduct9 = $request -> qtyproduct9;
        $order -> qtyproduct10 = $request -> qtyproduct10;
        $order -> qtyproduct11 = $request -> qtyproduct11;
        $order -> qtyproduct12 = $request -> qtyproduct12;
        $order -> qtyproduct13 = $request -> qtyproduct13;
        $order -> qtyproduct14 = $request -> qtyproduct14;
        $order -> qtyproduct15 = $request -> qtyproduct15;
        $order -> price_product1 = $request -> price_product1;
        $order -> price_product2 = $request -> price_product2;
        $order -> price_product3 = $request -> price_product3;
        $order -> price_product4 = $request -> price_product4;
        $order -> price_product5 = $request -> price_product5;
        $order -> price_product6 = $request -> price_product6;
        $order -> price_product7 = $request -> price_product7;
        $order -> price_product8 = $request -> price_product8;
        $order -> price_product9 = $request -> price_product9;
        $order -> price_product10 = $request -> price_product10;
        $order -> price_product11 = $request -> price_product11;
        $order -> price_product12 = $request -> price_product12;
        $order -> price_product13 = $request -> price_product13;
        $order -> price_product14 = $request -> price_product14;
        $order -> price_product15 = $request -> price_product15;
        $order -> pd_discount1 = $request -> pd_discount1;
        $order -> pd_discount2 = $request -> pd_discount2;
        $order -> pd_discount3 = $request -> pd_discount3;
        $order -> pd_discount4 = $request -> pd_discount4;
        $order -> pd_discount5 = $request -> pd_discount5;
        $order -> pd_discount6 = $request -> pd_discount6;
        $order -> pd_discount7 = $request -> pd_discount7;
        $order -> pd_discount8 = $request -> pd_discount8;
        $order -> pd_discount9 = $request -> pd_discount9;
        $order -> pd_discount10 = $request -> pd_discount10;
        $order -> pd_discount11 = $request -> pd_discount11;
        $order -> pd_discount12 = $request -> pd_discount12;
        $order -> pd_discount13 = $request -> pd_discount13;
        $order -> pd_discount14 = $request -> pd_discount14;
        $order -> pd_discount15 = $request -> pd_discount15;
        $order -> total_price1 = $request -> total_price1;
        $order -> total_price2 = $request -> total_price2;
        $order -> total_price3 = $request -> total_price3;
        $order -> total_price4 = $request -> total_price4;
        $order -> total_price5 = $request -> total_price5;
        $order -> total_price6 = $request -> total_price6;
        $order -> total_price7 = $request -> total_price7;
        $order -> total_price8 = $request -> total_price8;
        $order -> total_price9 = $request -> total_price9;
        $order -> total_price10 = $request -> total_price10;
        $order -> total_price11 = $request -> total_price11;
        $order -> total_price12 = $request -> total_price12;
        $order -> total_price13 = $request -> total_price13;
        $order -> total_price14 = $request -> total_price14;
        $order -> total_price15 = $request -> total_price15;
        $order -> order_customer = $request -> order_customer;
        $order -> order_phone = $request -> order_phone;
        $order -> arrivelocation = $request -> arrivelocation;
        $order -> shipto = $request -> shipto;
        $order -> date = $request -> date;
        $order -> deliverytime = $request -> deliverytime;
        $order -> totalprice = $request -> totalprice;
        $order -> discount = $request -> discount;
        $order -> deposit = $request -> deposit;
        $order -> balance = $request -> balance;
        $order -> address = $request -> address;
        $order -> attendto = $request -> attendto;
        $order -> term = $request -> term;
        $order -> issued_by = $request -> issued_by;
        $order -> order_date = $request -> order_date;
        $order -> seller = $request -> seller;
        $order -> invoice = $request -> invoice;
        $order -> issued_date = $request -> issued_date;
        $order -> issued_payment_via = $request -> issued_payment_via;
        $order -> issued_paid = $request -> issued_paid;
        $order -> save();
        $orderId = $order->id;
        return redirect(route('generate_receipt', ['id' => $orderId]));
    }

    public function index(){
        $item= Order::latest()->get();
        // $item = DB::table('orders')->where('issued_paid', NULL)->latest()->get();
        $customer= CustomerDetailModel::all();
        return view('admin-view.orders.list', compact('item','customer'));
    }

    public function issued_index(){
        $item= Order::latest()->get();
        $customer= CustomerDetailModel::all();
        $data = DB::table('orders')->get();
        return view('admin-view.issue_invoice.issued_index', compact('item','customer','data'));
    }

    public function get_issue_invoice($id){
        $data = Order::find($id);
        return view('admin-view.issue_invoice.issued_data_form', compact('data'));

    }

    public function outstanding_index(){
        // $item= Order::latest()->get();
        $item = DB::table('orders')->where('issued_paid', NULL)->latest()->get();
        $customer= CustomerDetailModel::all();
        return view('admin-view.orders.outstanding-balance', compact('item','customer'));
    }

    public function cashcollection_index(){
        // $item = Order::onlyTrashed()->latest()->get();
        // $item = Order::latest()->where('issued_paid','PAID')->get();
        $item = Order::latest()->get();
        $customer= CustomerDetailModel::all();
        return view('admin-view.orders.cash-collection', compact('item','customer'));
    }

    function generate_invoice($id){
        $item = DB::table('orders')->find($id);
        return view('admin-view.print.print-form',compact('item'));
    }

    function issued_generate_invoice($id){
        $data = Order::find($id);
        return view('admin-view.issue_invoice.issued_submit_form',compact('data'));
    }

    public function deleteorder($id){
        Order::where('id', $id)->forceDelete();
        backup_order::where('id', $id)->forceDelete();
        return redirect('Admin/Orders/List');
    }

    public function sumprice(){
        $item = DB::table('orders')->sum('totalprice');
        $order = Order::count();
        $product = Product::count();
        $user = User::count();
        $pd = DB::table('orders')->latest()->get();
        $data = DB::table('products')->get();
        $customer = CustomerDetailModel::latest()->get();
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $monthly = DB::table('orders')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('balance');
        $date = Carbon::now();
        $monthName = $date->format('F');
        return view('admin-view.dashboard',compact('item','order','product','pd','data','user','customer','monthly','monthName'));
    }


    public function salereport(){
        // $data = order::latest()->get();
        $data = order::latest()->get();

        return view('admin-view.orders.sale-report',compact('data'));
    }
    public function testing(){
        $data = order::all();
        return view('admin-view.orders.export',compact('data'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'kesorboutique.xlsx');
    }

    public function getreceipt(){
        $data = order::latest()->get();
        return view('admin-view.orders.receipt',compact('data'));
    }

    public function customer_index(){
        $item = DB::table('orders')->groupBy('order_customer')->get();
        return view('admin-view.orders.customer-history',compact('item'));
    }

    // public function issue_index(){
    //     $item = order::latest()->get();
    //     $count = DB::table('orders')->groupBy('order_customer')->get();
    //     return view('admin-view.orders.issue_index',compact('item','count'));
    // }
}
