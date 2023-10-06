<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\issuedinvoice;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\backup_order;
use App\Models\CustomerModel;
use App\Models\CustomerDetailModel;

class IssueController extends Controller
{
    public function index(){
        $item= Order::latest()->get();
        // $item = DB::table('orders')->where('issued_paid', NULL)->latest()->get();
        $customer= CustomerDetailModel::all();
        return view('admin-view.issue_invoice.issued_invoice_list', compact('item','customer'));
    }



    public function release_invoice(){
        $data = Order::orderBy('updated_at','DESC')->take(1)->get();
        return view('admin-view.orders.confirm_issue', compact('data'));
    }

    public function confirm_issue($id){
        $data = Order::find($id);
        return view('admin-view.Orders/confirm_issue',compact('data'));
       }

    public function confirm_invoice($id){
        Order::find($id)->delete();
        return redirect('Admin/Orders/Cashcollection');
    }

    public function destroy_invoice($id){
        Order::where('id', $id)->forceDelete();
        backup_order::where('id', $id)->forceDelete();
        return redirect('Admin/Orders/List');
    }

    public function find_issue_id($id){
        $item = Order::find($id);
        return view('admin-view.orders.issue_update_form',compact('item'));
    }


    function generate_issue_invoice($id){
        $item = DB::table('orders')->find($id);
        // return view('admin-view.issue_invoice.form_input.print-form',compact('item'));
        return view('admin-view.issue_invoice.issued_form',compact('item'));


    }
    // function generate_issue_invoice(){
    //     return view('admin-view.issue_invoice.issued_form');

    // }

}
