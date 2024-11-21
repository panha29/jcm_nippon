<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ColorPricingController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\LogoutController;
use App\Models\ColorPaletteModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes(
    [
        'verify' => true
    ]
);

Route::group(['prefix' => 'Admin',  'middleware' => 'isadmin'], function()
{
    Route::redirect('/','/Dashboard');
    Route::view('/Dashboard','admin_dashboard/index');

    Route::group(['prefix'=>'Product'],function(){
        Route::get('List',[AdminLoginController::class,'product_list']);
        Route::get('List/{id}/Edit',[AdminLoginController::class,'product_list_edit']);
        Route::post('List/AddProduct',[AdminLoginController::class,'product_save']);
        Route::post('List/EditProduct',[AdminLoginController::class,'product_edit']);
        Route::get('Categorie',[AdminLoginController::class,'category_index']);
        Route::post('Categorie/AddCategories',[AdminLoginController::class,'category_save']);
        Route::get('Categorie/{id}/Delete',[AdminLoginController::class,'category_destroy']);
        Route::get('List/{id}/Delete',[AdminLoginController::class,'product_destroy']);
    });

    Route::group(['prefix'=>'ColorPricing'],function(){
        Route::post('List/ImportMa',[ColorPricingController::class,'import_ma']);
        Route::post('List/ImportMpm',[ColorPricingController::class,'import_mpm']);
        Route::post('List/ImportWg',[ColorPricingController::class,'import_wg']);
        Route::post('List/ImportWb',[ColorPricingController::class,'import_wb']);
        Route::post('List/ImportNsew',[ColorPricingController::class,'import_nsew']);

        Route::post('List/AddMatex',[ColorPricingController::class,'matex_save']);
        Route::post('List/AddMatexPremium',[ColorPricingController::class,'matexpremium_save']);
        Route::post('List/AddSuperEasyWash',[ColorPricingController::class,'supereasywash_save']);
        Route::post('List/AddWeatherBond',[ColorPricingController::class,'weatherbond_save']);
        Route::post('List/AddWeatherGard',[ColorPricingController::class,'weathergard_save']);

        Route::get('Matex/{id}/Delete',[ColorPricingController::class,'ma_destroy']);
        Route::get('Premium-Matex/{id}/Delete',[ColorPricingController::class,'mpm_destroy']);
        Route::get('WeatherGard/{id}/Delete',[ColorPricingController::class,'wg_destroy']);
        Route::get('WeatherBond/{id}/Delete',[ColorPricingController::class,'wb_destroy']);
        Route::get('SuperEasyWash/{id}/Delete',[ColorPricingController::class,'nsew_destroy']);

        Route::get('Matex',[ColorPricingController::class,'colorprice_ma']);
        Route::get('Premium-Matex',[ColorPricingController::class,'colorprice_mpm']);
        Route::get('WeatherGard',[ColorPricingController::class,'colorprice_wg']);
        Route::get('WeatherBond',[ColorPricingController::class,'colorprice_wb']);
        Route::get('SuperEasyWash',[ColorPricingController::class,'colorprice_nsew']);
    });

    Route::group(['prefix'=>'News-&-Media'],function(){
        Route::get('News',[AdminLoginController::class,'News_list']);
        Route::post('News/AddNews',[AdminLoginController::class,'news_save']);
        Route::get('News/{id}/Edit',[AdminLoginController::class,'news_index_edit']);
        Route::post('News/EditNews',[AdminLoginController::class,'news_edit']);
        Route::get('News/{id}/Delete',[AdminLoginController::class,'news_destroy']);

        Route::post('Media/AddMedia',[AdminLoginController::class,'media_save']);
        Route::get('Media/{id}/Edit',[AdminLoginController::class,'media_index_edit']);
        Route::post('Media/EditMedia',[AdminLoginController::class,'media_edit']);
        Route::get('Media/{id}/Delete',[AdminLoginController::class,'media_destroy']);

        Route::get('Event',[AdminLoginController::class,'Event_list']);
        Route::get('Media',[AdminLoginController::class,'Media_list']);
        Route::get('Career',[AdminLoginController::class,'Career_list']);
        Route::post('Career/AddCareer',[AdminLoginController::class,'career_save']);
        Route::get('Career/{id}/Edit',[AdminLoginController::class,'career_index_edit']);
    });

    Route::group(['prefix'=>'Project-Reference'],function(){
        Route::post('List/AddProject-Reference',[AdminLoginController::class,'project_reference_save']);
        Route::get('List',[AdminLoginController::class,'project_reference_index']);
        Route::get('List/{id}/Delete',[AdminLoginController::class,'project_reference_destroy']);
        Route::Post('List/EditProject-Reference',[AdminLoginController::class,'project_reference_edit']);
        Route::get('List/{id}/Edit',[AdminLoginController::class,'project_reference_list_edit']);

    });

    Route::group(['prefix'=>'User'],function(){
        Route::get('List',[AdminLoginController::class,'user_list']);
        Route::post('List/Adduser',[AdminLoginController::class,'add_user']);
        Route::get('List/{id}/Delete',[AdminLoginController::class,'user_destroy']);
    });

    Route::group(['prefix'=>'ColorPalette'],function(){
        Route::post('List/AddColor',[AdminLoginController::class,'colorpalette_save']);
        Route::get('List',[AdminLoginController::class,'colorpalett_index']);
    });
    Route::group(['prefix'=>'Location'],function(){
        Route::post('List/AddDealer',[AdminLoginController::class,'dealer_save']);
        Route::get('List',[AdminLoginController::class,'dealer_index']);
        Route::get('List/{id}/Delete',[AdminLoginController::class,'dealer_destroy']);
    });
    Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');


});

Route::group(['prefix' => 'User',  'middleware' => 'auth'], function()
{
    Route::get('/Dashboard', function() {
        Artisan::call('cache:clear');
        $product = ProductModel::all();
        $nav = CategoryModel::all();
        $color = DB::table('colorpalette')->get();
        $Green = DB::table('colorpalette')->where('colorpalette_category','=','Green')->take(8)->get();
        $Red = DB::table('colorpalette')->where('colorpalette_category','=','Red')->take(8)->get();
        $Yellow = DB::table('colorpalette')->where('colorpalette_category','=','Yellow')->take(8)->get();
        $Orange = DB::table('colorpalette')->where('colorpalette_category','=','Orange')->take(8)->get();
        $Blue = DB::table('colorpalette')->where('colorpalette_category','=','Blue')->take(8)->get();
        $Purple = DB::table('colorpalette')->where('colorpalette_category','=','Purple')->take(8)->get();
        $Grey = DB::table('colorpalette')->where('colorpalette_category','=','Grey')->take(8)->get();
        $Neutral = DB::table('colorpalette')->where('colorpalette_category','=','Neutral')->take(8)->get();
        $GreenBlue = DB::table('colorpalette')->where('colorpalette_category','=','GreenBlue')->take(8)->get();
        $OffWhite = DB::table('colorpalette')->where('colorpalette_category','=','OffWhite')->take(8)->get();
        return view('user_dashboard.websiteV2.website_index',compact('product','nav','color','Green','Red','Yellow','Orange','Blue','Purple','Grey','Neutral','GreenBlue','OffWhite'));
    });
    // Route::get('/Products/{category_tag}',[UserLoginController::class,'user_category_tagv2']);

    Route::get('/Painting-Services',[UserLoginController::class,'user_servicev2']);
    Route::get('/News',[UserLoginController::class,'user_newsv2']);
    Route::get('/Career',[UserLoginController::class,'user_career']);
    Route::get('/Project_Reference',[UserLoginController::class,'user_project_referencev2']);
    Route::get('/Contact_Us',[UserLoginController::class,'user_contact_us']);
    Route::get('/About_Us',[UserLoginController::class,'user_about_us']);
    Route::get('/Color_Palette',[UserLoginController::class,'user_color_palette']);
    Route::get('/Color-Pricing',[ColorPricingController::class,'user_color_pricing']);
    Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');


    Route::get('/Checkin/{id}',[UserLoginController::class,'staff_signin']);
    Route::get('/Detail/{id}',[UserLoginController::class,'staff_detail']);
    Route::get('/Name',[UserLoginController::class,'account_setting'])->name('account_setting');
    Route::get('/Name/{id}',[UserLoginController::class,'delete_user']);

    Route::get('/Mobile',[UserLoginController::class,'eprice']);
    Route::get('/Mobile/ColorPalette',[UserLoginController::class,'colorpalette']);
    Route::get('/Mobile/Price-List',[UserLoginController::class,'pricelist']);

    Route::get('/Color-Palette', [AdminLoginController::class,'color_palette']);


    Route::group(['prefix' => 'Products'], function()
    {
        Route::get('/',[UserLoginController::class,'user_all_product']);
        Route::get('/Interior',[UserLoginController::class,'user_nav_interior']);
        Route::get('/Exterior',[UserLoginController::class,'user_nav_exterior']);
        Route::get('/Coating',[UserLoginController::class,'user_nav_coating']);
        Route::get('/Sealer_Primer',[UserLoginController::class,'user_nav_sealer_primer']);
        Route::get('/Wood_Metal',[UserLoginController::class,'user_nav_wood_metal']);
        Route::view('/Nippon_Odourless_Spotless','user_dashboard/websiteV2/product/product_detail/interior/odourless-spotless');
        Route::view('/Nippon_Odourless_SuperEasyWash','user_dashboard/websiteV2/product/product_detail/interior/odourless-supereasywash');
        Route::view('/Nippon_Matex','user_dashboard/websiteV2/product/product_detail/interior/nippon-matex');
        Route::view('/Nippon_Watex','user_dashboard/websiteV2/product/product_detail/interior/nippon-watex');

        Route::view('/Nippon_Weatherbond_Plus','user_dashboard/websiteV2/product/product_detail/exterior/nippon-weatherbondplus');
        Route::view('/Nippon_Weatherbond_8y','user_dashboard/websiteV2/product/product_detail/exterior/nippon-weatherbond-8y');
        Route::view('/Nippon_WeatherGard','user_dashboard/websiteV2/product/product_detail/exterior/nippon-weathergard');
        Route::view('/Nippon_SolaReflect','user_dashboard/websiteV2/product/product_detail/exterior/nippon-solareflect');
        Route::view('/Nippon_MatexPremium','user_dashboard/websiteV2/product/product_detail/exterior/nippon-matexpremium');

        Route::view('/Nippon_Matex_Premium_Sealer','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-matexpremiumsealer');
        Route::view('/Nippon_Matex_Sealer','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-matexsealer');
        Route::view('/Nippon_Vinilex5100','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-vinilex5100');
        Route::view('/Nippon_Vinilex5170','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-vinilex5170');
        Route::view('/Nippon_Vinilex5000','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-vinilex5000');
        Route::view('/Nippon_Odourless_Sealer','user_dashboard/websiteV2/product/product_detail/primer-sealer/nippon-odourlesssealer');

        Route::view('/Nippon_Bodelac9000','user_dashboard/websiteV2/product/product_detail/wood-metal/nippon-bodelac9000');
        Route::view('/Nippon_Gold_Paint2000','user_dashboard/websiteV2/product/product_detail/wood-metal/nippon-goldpaint2000');
        Route::view('/Nippon_Zinc_Phosphate_Primer','user_dashboard/websiteV2/product/product_detail/wood-metal/nippon-zincphosphate');
        Route::view('/Nippon_ECO_Red_Oxide','user_dashboard/websiteV2/product/product_detail/wood-metal/nippon-redoxide');
        Route::view('/Nippon_ECO_Grey_Oxide','user_dashboard/websiteV2/product/product_detail/wood-metal/nippon-greyoxide');

        Route::view('/Nippon_Epoxy_EA4','user_dashboard/websiteV2/product/product_detail/coating/nippon-epoxyea4');
        Route::view('/Nippon_Epoxy_EA9','user_dashboard/websiteV2/product/product_detail/coating/nippon-epoxyea9');
        Route::view('/Nippon_Epoxy_PU','user_dashboard/websiteV2/product/product_detail/coating/nippon-epoxypu');
    });

});

Route::group(['prefix' => 'Products'], function()
{
    Route::get('/',[AdminLoginController::class,'all_product']);
    Route::get('/Interior',[AdminLoginController::class,'nav_interior']);
    Route::get('/Exterior',[AdminLoginController::class,'nav_exterior']);
    Route::get('/Coating',[AdminLoginController::class,'nav_coating']);
    Route::get('/Sealer_Primer',[AdminLoginController::class,'nav_sealer_primer']);
    Route::get('/Wood_Metal',[AdminLoginController::class,'nav_wood_metal']);
    Route::view('/Nippon_Odourless_Spotless','websiteV2/product/product_detail/interior/odourless-spotless');
    Route::view('/Nippon_Odourless_SuperEasyWash','websiteV2/product/product_detail/interior/odourless-supereasywash');
    Route::view('/Nippon_Matex','websiteV2/product/product_detail/interior/nippon-matex');
    Route::view('/Nippon_Watex','websiteV2/product/product_detail/interior/nippon-watex');

    Route::view('/Nippon_Weatherbond_Plus','websiteV2/product/product_detail/exterior/nippon-weatherbondplus');
    Route::view('/Nippon_Weatherbond_8y','websiteV2/product/product_detail/exterior/nippon-weatherbond-8y');
    Route::view('/Nippon_WeatherGard','websiteV2/product/product_detail/exterior/nippon-weathergard');
    Route::view('/Nippon_SolaReflect','websiteV2/product/product_detail/exterior/nippon-solareflect');
    Route::view('/Nippon_MatexPremium','websiteV2/product/product_detail/exterior/nippon-matexpremium');

    Route::view('/Nippon_Matex_Premium_Sealer','websiteV2/product/product_detail/primer-sealer/nippon-matexpremiumsealer');
    Route::view('/Nippon_Matex_Sealer','websiteV2/product/product_detail/primer-sealer/nippon-matexsealer');
    Route::view('/Nippon_Vinilex5100','websiteV2/product/product_detail/primer-sealer/nippon-vinilex5100');
    Route::view('/Nippon_Vinilex5170','websiteV2/product/product_detail/primer-sealer/nippon-vinilex5170');
    Route::view('/Nippon_Vinilex5000','websiteV2/product/product_detail/primer-sealer/nippon-vinilex5000');
    Route::view('/Nippon_Odourless_Sealer','websiteV2/product/product_detail/primer-sealer/nippon-odourlesssealer');

    Route::view('/Nippon_Bodelac9000','websiteV2/product/product_detail/wood-metal/nippon-bodelac9000');
    Route::view('/Nippon_Gold_Paint2000','websiteV2/product/product_detail/wood-metal/nippon-goldpaint2000');
    Route::view('/Nippon_Zinc_Phosphate_Primer','websiteV2/product/product_detail/wood-metal/nippon-zincphosphate');
    Route::view('/Nippon_ECO_Red_Oxide','websiteV2/product/product_detail/wood-metal/nippon-redoxide');
    Route::view('/Nippon_ECO_Grey_Oxide','websiteV2/product/product_detail/wood-metal/nippon-greyoxide');

    Route::view('/Nippon_Epoxy_EA4','websiteV2/product/product_detail/coating/nippon-epoxyea4');
    Route::view('/Nippon_Epoxy_EA9','websiteV2/product/product_detail/coating/nippon-epoxyea9');
    Route::view('/Nippon_Epoxy_PU','websiteV2/product/product_detail/coating/nippon-epoxypu');
});

Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');
Route::get('/Painting-Services',[AdminLoginController::class,'servicev2']);
Route::get('/News',[AdminLoginController::class,'newsv2']);
Route::get('/Career',[AdminLoginController::class,'career']);
Route::get('/Career/{id}',[AdminLoginController::class,'get_career_id']);
Route::get('/Project-Reference',[AdminLoginController::class,'project_referencev2']);
Route::get('/Contact-Us',[AdminLoginController::class,'contact_us']);
Route::get('/About-Us',[AdminLoginController::class,'about_us']);
Route::redirect('/', '/', 301);
Route::view('/Verify','websiteV2.verify');

Route::get('/', function() {
    Artisan::call('cache:clear');
    $product = ProductModel::all();
    $nav = CategoryModel::all();
    $color = DB::table('colorpalette')->get();
    $Green = DB::table('colorpalette')->where('colorpalette_category','=','Green')->take(8)->get();
    $Red = DB::table('colorpalette')->where('colorpalette_category','=','Red')->take(8)->get();
    $Yellow = DB::table('colorpalette')->where('colorpalette_category','=','Yellow')->take(8)->get();
    $Orange = DB::table('colorpalette')->where('colorpalette_category','=','Orange')->take(8)->get();
    $Blue = DB::table('colorpalette')->where('colorpalette_category','=','Blue')->take(8)->get();
    $Purple = DB::table('colorpalette')->where('colorpalette_category','=','Purple')->take(8)->get();
    $Grey = DB::table('colorpalette')->where('colorpalette_category','=','Grey')->take(8)->get();
    $Neutral = DB::table('colorpalette')->where('colorpalette_category','=','Neutral')->take(8)->get();
    $GreenBlue = DB::table('colorpalette')->where('colorpalette_category','=','GreenBlue')->take(8)->get();
    $OffWhite = DB::table('colorpalette')->where('colorpalette_category','=','OffWhite')->take(8)->get();
    return view('websiteV2.website_index',compact('product','nav','color','Green','Red','Yellow','Orange','Blue','Purple','Grey','Neutral','GreenBlue','OffWhite'));
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    $product = ProductModel::all();
    $nav = CategoryModel::all();
    return view('websiteV2.website_index',compact('product','nav'));
});

