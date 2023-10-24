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

Route::view('/','website.website_index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('Color%Scheme', '/login');



Route::group(['prefix' => 'Admin',  'middleware' => 'isadmin'], function()
{
    Route::redirect('/','/Dashboard');
    Route::view('/Dashboard','admin_dashboard/index');

    Route::group(['prefix'=>'Product'],function(){
        Route::get('List',[AdminLoginController::class,'product_list']);
        Route::post('List/AddProduct',[AdminLoginController::class,'product_save']);
        Route::get('Categorie',[AdminLoginController::class,'category_index']);
        Route::post('Categorie/AddCategories',[AdminLoginController::class,'category_save']);
    });

    Route::group(['prefix'=>'News-&-Media'],function(){
        // Route::get('News');
    });
});



Route::group(['prefix' => 'User',  'middleware' => 'auth'], function()
{
    // Route::redirect('/','/Dashboard');
    Route::get('/Dashboard',[UserLoginController::class,'user_website']);

});
