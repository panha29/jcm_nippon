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
 // Route::redirect('/','/Dashboard');
//  Route::get('/Dashboard',[UserLoginController::class,'user_website']);
    Route::get('/Dashboard', function() {
        Artisan::call('cache:clear');
        $product = ProductModel::all();
        $nav = CategoryModel::all();
        return view('user_dashboard.websiteV2.website_index',compact('product','nav'));
    });
 Route::get('/Products/{category_tag}',[UserLoginController::class,'user_category_tagv2']);
 Route::get('/Products',[UserLoginController::class,'user_all_product']);
 Route::get('/Painting-Services',[UserLoginController::class,'user_servicev2']);
 Route::get('/News',[UserLoginController::class,'user_newsv2']);
 Route::get('/Career',[UserLoginController::class,'user_career']);
 Route::get('/Project-Reference',[UserLoginController::class,'user_project_referencev2']);
 Route::get('/Contact-Us',[UserLoginController::class,'user_contact_us']);
 Route::get('/About-Us',[UserLoginController::class,'user_about_us']);
 Route::get('/Color-Palette',[UserLoginController::class,'user_color_palette']);
 Route::get('/Color-Pricing',[ColorPricingController::class,'user_color_pricing']);
 Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');


 Route::get('/Checkin/{id}',[UserLoginController::class,'staff_signin']);
 Route::get('/Detail/{id}',[UserLoginController::class,'staff_detail']);
 Route::get('/Name',[UserLoginController::class,'account_setting'])->name('account_setting');
 Route::get('/Name/{id}',[UserLoginController::class,'delete_user']);

 Route::get('/Mobile',[UserLoginController::class,'eprice']);
 Route::get('/Mobile/ColorPalette',[UserLoginController::class,'colorpalette']);
 Route::get('/Mobile/Price-List',[UserLoginController::class,'pricelist']);
});

Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');
// Route::get('/Home',[AdminLoginController::class,'webv2'])->name('Home');
Route::get('/Products/{category_tag}',[AdminLoginController::class,'category_tagv2']);
Route::get('/Products',[AdminLoginController::class,'all_product']);
Route::get('/Painting-Services',[AdminLoginController::class,'servicev2']);
Route::get('/News',[AdminLoginController::class,'newsv2']);
Route::get('/Career',[AdminLoginController::class,'career']);
Route::get('/Project-Reference',[AdminLoginController::class,'project_referencev2']);
Route::get('/Contact-Us',[AdminLoginController::class,'contact_us']);
Route::get('/About-Us',[AdminLoginController::class,'about_us']);
Route::redirect('/', '/Home', 301);
Route::view('/Verify','websiteV2.verify');

Route::get('/Home', function() {
    Artisan::call('cache:clear');
    $product = ProductModel::all();
    $nav = CategoryModel::all();
    return view('websiteV2.website_index',compact('product','nav'));
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    $product = ProductModel::all();
    $nav = CategoryModel::all();
    return view('websiteV2.website_index',compact('product','nav'));
});
