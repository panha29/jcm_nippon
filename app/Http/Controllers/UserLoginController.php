<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CareerModel;
use App\Models\ProjectReferenceModel;
use App\Models\NewsModel;
use App\Models\MediaModel;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    function user_website(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.websiteV2.website_index',compact('nav','product'));
    }

    function user_career(){
        $nav = CategoryModel::all();
        $career = CareerModel::latest()->get();
        return view('user_dashboard.websiteV2.career.career',compact('nav','career'));
    }

    function user_project_referencev2(){
        $nav = CategoryModel::all();
        $pjref = ProjectReferenceModel::all();
        return view('user_dashboard.websiteV2.project-reference.project-reference',compact('nav','pjref'));
    }


    function user_category_tagv2($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.product',compact('nav','product','pdcate','allpd'));
    }

    function user_all_product($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.all_product',compact('nav','product','pdcate','allpd'));
    }

    function user_servicev2(){
        $nav = CategoryModel::all();
        return view('user_dashboard.websiteV2.painting-service.service',compact('nav'));
    }

    function user_about_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.websiteV2.about.about_us',compact('nav','product'));
    }

    function user_newsv2(){
        $nav = CategoryModel::all();
        $news = NewsModel::latest()->get();
        $media = MediaModel::latest()->get();
        return view('user_dashboard.websiteV2.news.news',compact('nav','news','media'));
    }

    function user_color_palette(){
        $nav = CategoryModel::all();
        return view('user_dashboard.websiteV2.color_palette.color_palette',compact('nav'));
    }
}
