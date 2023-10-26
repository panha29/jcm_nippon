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

    function product_list_edit($id){
        $item = ProductModel::find ($id);
        $cate = CategoryModel::get();
        $data = ProductModel::latest()->get();
        return view('admin_dashboard.product.product_edit',compact('item','cate','data'));
    }

    public function category_index(){
        $data = DB::table('categories')->latest()->get();
        return view('admin_dashboard.product.categories_index',compact('data'));
    }

    public function category_destroy($id){
        CategoryModel::where('id',$id)->forceDelete();
        return redirect('Admin/Product/Categorie');
    }
    public function product_destroy($id){
        ProductModel::where('id',$id)->forceDelete();
        return redirect('Admin/Product/List');
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

    public function product_edit(Request $request){
        $data = ProductModel::find($request->id);
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
    function news_list(){
        $data = DB::table('news')->latest()->get();
        return view('admin_dashboard.news&media.news_index',compact('data'));
    }
    function event_list(){
        $data = DB::table('event')->latest()->get();
        return view('admin_dashboard.news&media.event_index',compact('data'));
    }
    function career_list(){
        $data = DB::table('career')->latest()->get();
        return view('admin_dashboard.news&media.career_index',compact('data'));
    }
    function media_list(){
        $data = DB::table('media')->latest()->get();
        return view('admin_dashboard.news&media.media_index',compact('data'));
    }

    function user_list(){
        $data = DB::table('users')->latest()->get();
        return view('admin_dashboard.user.user_index',compact('data'));
    }

    function nav_cate(){
        $nav = CategoryModel::all();
        return view('_layout.web-nav',compact('nav'));
    }

    function web_dashboard(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.website_index',compact('nav','product'));
    }
}
