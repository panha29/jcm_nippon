<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDetailController;
use App\Http\Controllers\RedeemRewardController;
use App\Http\Controllers\UserLoginController;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/

// Route::view('/','website.website_index');

// Route::get('/',[AdminLoginController::class,'web_dashboard']);
Route::get('/',[AdminLoginController::class,'webv2']);
// Route::get('/products',[AdminLoginController::class,'webv2']);
// Route::view('/','websiteV2.website_index');
Auth::routes();


Route::get('/Color%Scheme', [App\Http\Controllers\HomeController::class, 'index'])->name('Color%Scheme');
// Route::redirect('Color%Scheme', '/login');



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
    });

    Route::group(['prefix'=>'User'],function(){
        Route::get('List',[AdminLoginController::class,'user_list']);
    });
    Route::group(['prefix'=>'Location'],function(){
        Route::post('List/AddDealer',[AdminLoginController::class,'dealer_save']);
        Route::get('List',[AdminLoginController::class,'dealer_index']);
        Route::get('List/{id}/Delete',[AdminLoginController::class,'dealer_destroy']);
    });

});
Route::get('/contact-us',[AdminLoginController::class,'contact_us']);
Route::get('/about-us',[AdminLoginController::class,'about_us']);
Route::get('/painting-services',[AdminLoginController::class,'painting_services']);
Route::get('/professional-painting',[AdminLoginController::class,'professional_painting']);
Route::get('/project-reference',[AdminLoginController::class,'project_reference']);
Route::get('/location',[AdminLoginController::class,'location']);
Route::get('/Products/{category_tag}',[AdminLoginController::class,'category_tag']);
Route::get('/home',[AdminLoginController::class,'web_dashboard']);
// Route::get('/news',[AdminLoginController::class,'news']);



Route::group(['prefix' => 'User',  'middleware' => 'auth'], function()
{
    // Route::redirect('/','/Dashboard');
    Route::get('/Dashboard',[UserLoginController::class,'user_website']);

});


Route::get('/Products/{category_tag}',[AdminLoginController::class,'category_tagv2']);
Route::get('Products',[AdminLoginController::class,'all_product']);
Route::get('Painting-Services',[AdminLoginController::class,'servicev2']);
Route::get('News',[AdminLoginController::class,'newsv2']);
Route::get('Career',[AdminLoginController::class,'career']);
Route::get('Project-Reference',[AdminLoginController::class,'project_referencev2']);
