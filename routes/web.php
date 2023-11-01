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

Route::get('/',[AdminLoginController::class,'web_dashboard']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('Color%Scheme', '/login');



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
        Route::get('Event',[AdminLoginController::class,'Event_list']);
        Route::get('Media',[AdminLoginController::class,'Media_list']);
        Route::get('Career',[AdminLoginController::class,'Career_list']);

    });

    Route::group(['prefix'=>'User'],function(){
        Route::get('List',[AdminLoginController::class,'user_list']);

    });

});
Route::get('/contact-us',[AdminLoginController::class,'contact_us']);



Route::group(['prefix' => 'User',  'middleware' => 'auth'], function()
{
    // Route::redirect('/','/Dashboard');
    Route::get('/Dashboard',[UserLoginController::class,'user_website']);

});
