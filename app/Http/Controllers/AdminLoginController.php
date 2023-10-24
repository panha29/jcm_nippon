<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use CategoriesMigration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    function product_list(){
        $data = DB::table('product')->latest()->get();
        $cate = CategoryModel::get();
        return view('admin_dashboard.product.product_index',compact('data','cate'));
    }
    public function category_index(){
        $data = DB::table('categories')->latest()->get();
        return view('admin_dashboard.categories.categories_index',compact('data'));
    }

    public function category_save(Request $request){
        $data = new CategoryModel();
        $data -> category_name = $request -> category_name;
        $data -> category_date = $request -> category_date;
        $data -> save();
        return redirect('/Admin/Product/Categorie');
    }

    public function product_save(Request $request){
        $data = new ProductModel();
        if($request->file('product_image')){
            $file= $request->file('product_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/product/company_product'), $filename);
            $data['product_image']= $filename;
        }
        $data -> product_name = $request -> product_name;
        $data -> product_date = $request -> product_date;
        $data -> product_category = $request -> product_category;
        $data -> product_detail = $request -> product_detail;
        $data -> save();
        return redirect('/Admin/Product/List');
    }
}
