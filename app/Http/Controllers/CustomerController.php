<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetailModel;
use App\Models\CustomerModel;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request){
        $data = new CustomerModel();
        $data->customer_name = $request->customer_name;
        $data->customer_phone = $request->customer_phone;
        $data -> save();

        $detail = new CustomerDetailModel();
        $detail->customer_name = $request->customer_name;
        $detail->customer_phone = $request->customer_phone;
        $detail->customer_shipto = $request->customer_shipto;
        $detail->customer_address = $request->customer_address;
        $detail->customer_arrivelocation = $request->customer_arrivelocation;
        $detail->save();
        return redirect('/Admin/Customers/Index');
    }


    public function update(Request $request){
        $data = CustomerDetailModel::find($request->id);
        $data->customer_name = $request->customer_name;
        $data->customer_phone = $request->customer_phone;
        $data->customer_shipto = $request->customer_shipto;
        $data->customer_address = $request->customer_address;
        $data->customer_arrivelocation = $request->customer_arrivelocation;
        $data -> save();
        return redirect('/Admin/Customers/Index');
    }

    public function index(){
        $data = CustomerDetailModel::latest()->paginate(15);
        return view('admin-view.customers.list', compact('data'));
    }

    // public function delete($id){
    //     CustomerDetailModel::destroy($id);
    //     return redirect('Admin/Customers/Index');
    // }

    public function delete(Request $request){
        $id = $request->id;
        CustomerDetailModel::where('id', $id)->delete();
        return response()->json(['status'=>'200']);
      }

    function edit($id){
        $data = CustomerDetailModel::find($id);
        return view('admin-view.customers.edit-form',compact('data'));
    }

    function retrieve(){
        $data = CustomerDetailModel::all();
        $product = Product::all();
        return view('admin-view.sale.customer-order',compact('data','product'));
    }
}
