<?php

namespace App\Http\Controllers;

use App\Models\backup_order;
use App\Models\CustomerModel;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class StatementController extends Controller
{
    // public function statement($id){
    //     $getid = DB::table('orders')->find($id);

    //     return view('admin-view.orders.statement',['getid'=>$getid]);
    // }

    // public function statement_index($id){
    //     $sindex = backup_order::where('order_customer',($id))->get();
    // return view('admin-view.orders.statement',compact('sindex'));
    // }

    public function statement_index($id){
            $sindex = DB::table('orders')->where('order_customer',($id))->latest()->get();
            $total = DB::table('orders')->where('order_customer',($id))->sum('balance');
        return view('admin-view.orders.statement',compact('sindex','total'));
        }

    function generate_receipt($id){
        // $item = backup_order::find($id);
        $item = DB::table('orders')->find($id);
        return view('admin-view.print-receipt.print-form',compact('item'));
    }

    function all_customer(){
        $item = DB::table('orders')->groupBy('order_customer')->get();
        return view('admin-view.statement_payment.all_customer_list',compact('item'));
    }

    public function customer_information($id){
        $sindex = DB::table('orders')->where('order_customer',($id))->latest()->get();
        // $sindex = backup_order::onlyTrashed()->where('order_customer',($id))->latest()->get();

        $dataid = DB::table('orders')->where('order_customer',($id))->groupBy('order_customer')->get('order_customer');

        $total = DB::table('orders')->where('order_customer',($id))->sum('balance');
    return view('admin-view.statement_payment.customer_information',compact('sindex','total','dataid'));
    }



    // public function cashcollection_index(){
    //     $item = backup_order::onlyTrashed()->latest()->get();
    //     $customer= CustomerModel::all();
    //     return view('admin-view.orders.cash-collection', compact('item','customer'));
    // }

}
