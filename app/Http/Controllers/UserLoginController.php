<?php

namespace App\Http\Controllers;
use App\Models\CareerModel;
use App\Models\CategoryModel;
use App\Models\ColorPaletteModel;
use App\Models\DealerModel;
use App\Models\NewsModel;
use App\Models\ProductModel;
use App\Models\ProjectReferenceModel;
use App\Models\MediaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

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
        // $color = DB::table('colorpalette')->get();
        $nav = CategoryModel::all();
        $color = Cache::remember('colorpalette', $seconds = 86400, function () {
            return DB::table('colorpalette')->get();
        });
        return view('user_dashboard.websiteV2.color_palette.color_palette',compact('nav','color'));
    }
    function user_contact_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.websiteV2.contact.contact_us',compact('nav','product'));
    }
}
