<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\DealerModel;
use App\Models\ProductModel;
use App\Models\ProjectReferenceModel;
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

    function contact_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.contact_us.index',compact('nav','product'));
    }

    function about_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.about_us.index',compact('nav','product'));
    }

    function painting_services(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.painting_services.index',compact('nav','product'));
    }
    function professional_painting(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.professional_painting.index',compact('nav','product'));
    }
    function project_reference(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        $pr = ProjectReferenceModel::all();
        return view('website.project_reference.index',compact('nav','product','pr'));
    }

    function location(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('website.dealer.index',compact('nav','product'));
    }

    public function project_reference_save(Request $request){
        $data = new ProjectReferenceModel();
        if($request->file('project_reference_image1')){
            $file= $request->file('project_reference_image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/project_reference/company_project_reference'), $filename);
            $data['project_reference_image1']= $filename;
        }
        if($request->file('project_reference_image2')){
            $file= $request->file('project_reference_image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/project_reference/company_project_reference'), $filename);
            $data['project_reference_image2']= $filename;
        }
        if($request->file('project_reference_image3')){
            $file= $request->file('project_reference_image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/project_reference/company_project_reference'), $filename);
            $data['project_reference_image3']= $filename;
        }
        if($request->file('project_reference_image4')){
            $file= $request->file('project_reference_image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/project_reference/company_project_reference'), $filename);
            $data['project_reference_image4']= $filename;
        }
        $data -> project_reference_name = $request -> project_reference_name;
        $data -> project_reference_startDate = $request -> project_reference_startDate;
        $data -> project_reference_endDate = $request -> project_reference_endDate;
        $data -> project_reference_exterior = $request -> project_reference_exterior;
        $data -> project_reference_interior = $request -> project_reference_interior;
        $data -> project_reference_area = $request -> project_reference_area;

        $data -> save();
        return redirect('/Admin/Project-Reference/List');
    }
    public function project_reference_destroy($id){
        ProjectReferenceModel::where('id',$id)->forceDelete();
        return redirect('/Admin/Project-Reference/List');
    }
    function project_reference_index(){
        $data = ProjectReferenceModel::latest()->get();
        return view('admin_dashboard.project_reference.project-reference-index',compact('data'));
    }

    public function dealer_save(Request $request){
        $data = new DealerModel();
        $data -> dealer_name = $request -> dealer_name;
        $data -> dealer_location = $request -> dealer_location;
        $data -> dealer_phone = $request -> dealer_phone;
        $data -> save();
        return redirect('/Admin/Dealer/List');
    }
    public function dealer_destroy($id){
        DealerModel::where('id',$id)->forceDelete();
        return redirect('/Admin/Dealer/List');
    }
    function dealer_index(){
        $data = DealerModel::latest()->get();
        return view('admin_dashboard.dealer.index',compact('data'));
    }
}
