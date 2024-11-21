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
use App\Models\staff_attendant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\table;

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
        $product_title = ProductModel::where('product_tag', ($id))->pluck('product_category')->first();

        return view('user_dashboard.websiteV2.product.product',compact('nav','product','pdcate','allpd','product_title'));
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

    // function user_color_palette(){
    //     // $color = DB::table('colorpalette')->get();
    //     $nav = CategoryModel::all();
    //     $color = Cache::remember('colorpalette', $seconds = 86400, function () {
    //         return DB::table('colorpalette')->get();
    //     });
    //     return view('user_dashboard.websiteV2.color_palette.color_palette',compact('nav','color'));
    // }

    function user_color_palette(){
        $nav = CategoryModel::all();
        $color = DB::table('colorpalette')->get();
        $GreenUser = DB::table('colorpalette')->where('colorpalette_category','=','Green')->get();
        $RedUser = DB::table('colorpalette')->where('colorpalette_category','=','Red')->get();
        $YellowUser = DB::table('colorpalette')->where('colorpalette_category','=','Yellow')->get();
        $OrangeUser = DB::table('colorpalette')->where('colorpalette_category','=','Orange')->get();
        $BlueUser = DB::table('colorpalette')->where('colorpalette_category','=','Blue')->get();
        $PurpleUser = DB::table('colorpalette')->where('colorpalette_category','=','Purple')->get();
        $GreyUser = DB::table('colorpalette')->where('colorpalette_category','=','Grey')->get();
        $NeutralUser = DB::table('colorpalette')->where('colorpalette_category','=','Neutral')->get();
        $GreenBlueUser = DB::table('colorpalette')->where('colorpalette_category','=','GreenBlue')->get();
        $OffWhiteUser = DB::table('colorpalette')->where('colorpalette_category','=','OffWhite')->get();
        return view('user_dashboard.websiteV2.color_palette.color_palette',compact('nav','color','GreenUser','RedUser','YellowUser','OrangeUser','BlueUser','PurpleUser','GreyUser','NeutralUser','GreenBlueUser','OffWhiteUser'));
    }

    function user_contact_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.websiteV2.contact.contact_us',compact('nav','product'));
    }

    function staff_signin($id){
        $staff = DB::table('staff_attendant')->find($id);
        return view('staff_attendant.staff_signin.checkin_button',compact('staff'));
    }

    function staff_detail($id){
        $user = User::find($id);
        return view('staff_attendant.staff_detail.detail',compact('user'));

    }

    function save_attendant(Request $request){
        $staff = new staff_attendant();
        $staff -> staff_name = $request -> staff_name;
        $staff -> staff_phone = $request -> staff_phone;
        $staff -> staff_email = $request -> staff_email;
        $staff -> staff_checkin_date = $request -> staff_checkin_date;
        $staff -> staff_checkin_time = $request -> staff_checkin_time;
        $staff -> staff_location = $request -> staff_location;
        $staff -> save();
    }
    public function account_setting(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.account_setting.account_detail',compact('nav','product'));
    }

    function delete_user($id){
        User::destroy($id);
        return redirect('/logout');
    }

    function eprice(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('user_dashboard.mobile-app.price_list.eprice_category',compact('nav','product'));
    }

    function colorpalette(){
        $nav = CategoryModel::all();
        $color = Cache::remember('colorpalette', $seconds = 86400, function () {
            return DB::table('colorpalette')->get();
        });
        return view('user_dashboard.mobile-app.color_palette.color_palette',compact('nav','color'));
    }

    function pricelist(){
        $nav = CategoryModel::all();
        return view('user_dashboard.mobile-app.price_list.eprice_category',compact('nav'));
    }

    function mockup_color(){
        $color = DB::table('colorpalette')->get();
        return view('websiteV2.color_testing',compact('color'));
    }

    function user_nav_interior($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.nav_product.interior.nav_interior',compact('nav','product','pdcate','allpd'));
    }

    function user_nav_exterior($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.nav_product.exterior.nav_exterior',compact('nav','product','pdcate','allpd'));
    }

    function user_nav_coating($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.nav_product.coating.nav_coating',compact('nav','product','pdcate','allpd'));
    }

    function user_nav_sealer_primer($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.nav_product.sealer_primer.nav_sealer_primer',compact('nav','product','pdcate','allpd'));
    }

    function user_nav_wood_metal($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('user_dashboard.websiteV2.product.nav_product.wood_metal.nav_wood_metal',compact('nav','product','pdcate','allpd'));
    }

}
