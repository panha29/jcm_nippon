<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\UserCalendar;
use App\Http\Controllers\UserProject;
use App\Models\project;
use GuzzleHttp\Middleware;

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

// index routing via Route feature

// Route::get('Admin/Home',[OrderController::class,'sumprice'], function(){
// })->middleware('isadmin');


// Route::get('User/Home',[usersController::class,'welcome'])->middleware('auth');

// Route::redirect('/', '/login');
Route::get('/',[FrontEndController::class,'website']);
// Route::redirect('/');
Auth::routes();

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix'=>'Admin','middleware'=>'isadmin'],function(){
    Route::get('Home',[OrderController::class,'sumprice']);

    Route::prefix('Products')->group(function () {
        Route::redirect('/', '/Products/List');
        Route::get('List',[ProductController::class,'index'])->name('Products/List');
        Route::POST('List/add-product',[ProductController::class,'save']);
        Route::view('Detail', 'products/detail');
        Route::get('delete/product/{id}',[ProductController::class,'delete']);
        Route::get('edit/product/{id}',[ProductController::class,'edit']);
        Route::POST('List/edit-product',[ProductController::class,'update']);
    });
});







