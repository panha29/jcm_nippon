<?php

namespace App\Http\Controllers;
use App\Models\CareerModel;
use App\Models\CategoryModel;
use App\Models\ColorPaletteModel;
use App\Models\ColorPricingModel;
use App\Models\DealerModel;
use App\Models\NewsModel;
use App\Models\ProductModel;
use App\Models\ProjectReferenceModel;
use App\Models\MediaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    function product_list(){
        $data = DB::table('product')->latest()->get();
        $cate = CategoryModel::get();
        return view('admin_dashboard.product.product_index',compact('data','cate'));
    }

    function add_user(Request $request){
        $data = new User();
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> duty = $request -> duty;
        $data -> member = $request -> member;
        $data -> password = $request -> password;
        $data -> password_confirmation = $request -> password_confirmation;
        $data -> password = $request -> password;
        $data -> save();
        return redirect('/Admin/User/List');
    }

    public function user_destroy($id){
        User::where('id',$id)->forceDelete();
        return redirect('/Admin/User/List');
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
        $data -> category_tag = $request -> category_tag;
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
        $data -> product_tag = $request -> product_tag;
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
        $data -> product_tag = $request -> product_tag;
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
    function career_list($id){
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
        return view('websiteV2.contact.contact_us',compact('nav','product'));
    }

    function about_us(){
        $nav = CategoryModel::all();
        $product = ProductModel::all();
        return view('websiteV2.about.about_us',compact('nav','product'));
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
    function news(){
        $nav = CategoryModel::all();
        $data = NewsModel::all();
        $imp = NewsModel::where('news_important', 'yes')->get();
        $media = MediaModel::latest()->get();
        return view('website.news.index',compact('nav','data','imp','media'));
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
    function category_tag($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        return view('website.product.index',compact('nav','product'));
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

    function project_reference_list_edit($id){
        $item = ProjectReferenceModel::find ($id);
        // $cate = CategoryModel::get();
        // $data = ProductModel::latest()->get();
        return view('admin_dashboard.project_reference.project-reference-edit-form',compact('item'));
    }

    public function project_reference_edit(Request $request){
        $data = ProjectReferenceModel::find($request->id);

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

    public function colorpalette_save(Request $request){
        $data = new ColorPaletteModel();
        if($request->file('colorpalette_image')){
            $file= $request->file('colorpalette_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_palette/company_color_palette'), $filename);
            $data['colorpalette_image']= $filename;
        }
        $data -> colorpalette_category = $request -> colorpalette_category;
        $data -> colorpalette_name = $request -> colorpalette_name;
        $data -> colorpalette_rgb = $request -> colorpalette_rgb;
        $data -> colorpalette_batch = $request -> colorpalette_batch;
        $data -> save();
        return redirect('/Admin/ColorPalette/List');
    }

    public function colorpalette_destroy($id){
        ColorPaletteModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPalette/List');
    }

    function colorpalett_index(){
        $data = ColorPaletteModel::latest()->get();
        return view('admin_dashboard.color_palette.index',compact('data'));
    }


    function dealer_index(){
        $data = DealerModel::latest()->get();
        return view('admin_dashboard.dealer.index',compact('data'));
    }

    public function news_save(Request $request){
        $data = new NewsModel();
        if($request->file('news_image')){
            $file= $request->file('news_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/company_news'), $filename);
            $data['news_image']= $filename;
        }
        $data -> news_title = $request -> news_title;
        $data -> news_date = $request -> news_date;
        $data -> news_detail = $request -> news_detail;
        $data -> news_important = $request -> news_important;
        $data -> save();
        return redirect('/Admin/News-&-Media/News');
    }

    public function news_edit(Request $request){
        $data = NewsModel::find($request->id);
        if($request->file('news_image')){
            $file= $request->file('news_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/company_news'), $filename);
            $data['news_image']= $filename;
        }
        $data -> news_title = $request -> news_title;
        $data -> news_date = $request -> news_date;
        $data -> news_detail = $request -> news_detail;
        $data -> news_important = $request -> news_important;
        $data -> save();
        return redirect('/Admin/News-&-Media/News');
    }

    public function news_destroy($id){
        NewsModel::where('id',$id)->forceDelete();
        return redirect('/Admin/News-&-Media/News');
    }

    function news_index(){
        $data = NewsModel::latest()->get();
        return view('admin_dashboard.news&media.news_index',compact('data',));
    }

    function news_index_edit($id){
        $item = NewsModel::find ($id);
        $data = NewsModel::latest()->get();
        return view('admin_dashboard.news&media.news_edit_index',compact('item','data'));
    }

    public function media_save(Request $request){
        $data = new MediaModel();
        if($request->file('media_image')){
            $file= $request->file('media_image');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('img/company_media'), $filename);
            $data['media_image']= $filename;
        }
        $data -> media_title = $request -> media_title;
        $data -> media_date = $request -> media_date;
        $data -> media_detail = $request -> media_detail;
        $data -> media_important = $request -> media_important;
        $data -> save();
        return redirect('/Admin/News-&-Media/Media');
    }

    public function media_edit(Request $request){
        $data = MediaModel::find($request->id);
        if($request->file('media_image')){
            $file= $request->file('media_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/company_media'), $filename);
            $data['media_image']= $filename;
        }
        $data -> media_title = $request -> media_title;
        $data -> media_date = $request -> media_date;
        $data -> media_detail = $request -> media_detail;
        $data -> media_important = $request -> media_important;
        $data -> save();
        return redirect('/Admin/News-&-Media/Media');
    }

    public function career_save(Request $request){
        $data = new CareerModel();
        $data -> career_title = $request -> career_title;
        $data -> career_location = $request -> career_location;
        $data -> career_position = $request -> career_position;
        $data -> career_date = $request -> career_date;
        $data -> career_detail = $request -> career_detail;
        $data -> career_image = $request -> career_image;
        $data -> career_gender = $request -> career_gender;
        $data -> career_hiring = $request -> career_hiring;
        $data -> career_report_to = $request -> career_report_to;
        $data -> save();
        return redirect('/Admin/News-&-Media/Career');
    }

    public function career_edit(Request $request){
        $data = CareerModel::find($request->id);
        $data -> career_title = $request -> career_title;
        $data -> career_position = $request -> career_position;
        $data -> career_date = $request -> career_date;
        $data -> career_detail = $request -> career_detail;
        $data -> career_image = $request -> career_image;
        $data -> career_gender = $request -> career_gender;
        $data -> career_hiring = $request -> career_hiring;
        $data -> career_report_to = $request -> career_report_to;
        $data -> save();
        return redirect('/Admin/News-&-Media/Media');
    }

    public function media_destroy($id){
        MediaModel::where('id',$id)->forceDelete();
        return redirect('/Admin/News-&-Media/Media');
    }

    function media_index(){
        $data = MediaModel::latest()->get();
        return view('admin_dashboard.news&media.media_index',compact('data'));
    }



    function webv2(){
        $product = ProductModel::all();
        $nav = CategoryModel::all();
        return view('websiteV2.website_index',compact('product','nav'));
    }
    function navv2(){
        $nav = CategoryModel::all();
        return view('_layoutV2.web-nav',compact('nav'));
    }

    function servicev2(){
        $nav = CategoryModel::all();
        return view('websiteV2.painting-service.service',compact('nav'));
    }
    function newsv2(){
        $nav = CategoryModel::all();
        $news = NewsModel::latest()->get();
        $media = MediaModel::latest()->get();
        return view('websiteV2.news.news',compact('nav','news','media'));
    }

    function career(){
        $nav = CategoryModel::all();
        $career = CareerModel::latest()->get();
        return view('websiteV2.career.career',compact('nav','career'));
    }

    function get_career_id($id){
        $nav = CategoryModel::all();
        // $career = CareerModel::latest()->get();
        $career_id = CareerModel::where('career_title', ($id))->get();
        return view('websiteV2.career.career_index',compact('nav','career_id'));
    }

    function user_get_career_id($id){
        $nav = CategoryModel::all();
        // $career = CareerModel::latest()->get();
        $career_id = CareerModel::where('career_title', ($id))->get();
        return view('user_dashboard.websiteV2.career.career_index',compact('nav','career_id'));
    }

    function project_referencev2(){
        $nav = CategoryModel::all();
        $pjref = ProjectReferenceModel::all();
        return view('websiteV2.project-reference.project-reference',compact('nav','pjref'));
    }


    function category_tagv2($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $product_title = ProductModel::where('product_tag', ($id))->pluck('product_category')->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.product',compact('nav','product','pdcate','allpd','product_title'));
    }

    function all_product($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.all_product',compact('nav','product','pdcate','allpd'));
    }

    function nav_interior($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.nav_product.interior.nav_interior',compact('nav','product','pdcate','allpd'));
    }

    function nav_exterior($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.nav_product.exterior.nav_exterior',compact('nav','product','pdcate','allpd'));
    }

    function nav_coating($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.nav_product.coating.nav_coating',compact('nav','product','pdcate','allpd'));
    }

    function nav_sealer_primer($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.nav_product.sealer_primer.nav_sealer_primer',compact('nav','product','pdcate','allpd'));
    }

    function nav_wood_metal($id = null){
        $nav = CategoryModel::all();
        $product = ProductModel::where('product_tag', ($id))->latest()->get();
        $pdcate = ProductModel::where('product_tag', ($id))->first();
        $allpd = ProductModel::latest()->get();
        return view('websiteV2.product.nav_product.wood_metal.nav_wood_metal',compact('nav','product','pdcate','allpd'));
    }

    function loginui(){
        $nav = CategoryModel::all();
        return view('websiteV2.layout_full',compact('nav'));
    }

    public function colorpricing_save(Request $request){
        $data = new ColorPricingModel();
        if($request->file('product_pricing_image')){
            $file= $request->file('product_pricing_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['product_pricing_image']= $filename;
        }
        $data -> product_pricing_price = $request -> product_pricing_price;
        $data -> product_pricing_name = $request -> product_pricing_name;
        $data -> product_pricing_category = $request -> product_pricing_category;
        $data -> product_pricing_batch = $request -> product_pricing_batch;
        $data -> product_pricing_quantity = $request -> product_pricing_quantity;
        $data -> save();
        return redirect('/Admin/ColorPricing/List');
    }

    function color_pricing_list(){
        $data = DB::table('product_pricing')->latest()->get();
        return view('admin_dashboard.color_pricing.index',compact('data'));
    }

    function my_maps(){
        return view('websiteV2.my_maps');
    }
}
