<?php

use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\AdminController\SettingAdminController;
use App\Http\Controllers\front\view;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\CategoryController;
use App\Http\Controllers\UserController\ProductDetailController;

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

Route::get('/home', function () {
    return view('front-end.contents.home');
})->name('fe.home');

Route::get('/category',[
    CategoryController::class,'index'
])->name('fe.category');
Route::get('/product-detail',[
    ProductDetailController::class,'index'
])->name('fe.product_detail');
Route::get('/checkout',function(){
    return view('front-end.contents.checkout');
})->name('fe.checkout');
Route::get('/cart',function(){
    return view('front-end.contents.cart');
})->name('fe.cart');
Route::get('/login',function(){
    return view('front-end.contents.login');
})->name('fe.login');
Route::get('/contact-us',function(){
    return view('front-end.contents.contact-us');
})->name('fe.contact-us');


//admin
Route::prefix('/admin')->group(function(){
    Route::get('',[AdminController::class,'formlogin']);
    Route::post('',[AdminController::class,'login'])->name('admin.login');
    Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');

    Route::get('/home',function(){
        return view('back-end.contents.home');
    });
    Route::prefix('/setting')->group(function(){
        Route::get('/',[SettingAdminController::class,'index'])->name('setting.index');
        Route::get('/create',[SettingAdminController::class,'create'])->name('setting.create');
        Route::post('/store',[SettingAdminController::class,'store'])->name('setting.store');
        Route::get('/delete/{id}',[SettingAdminController::class,'delete'])->name('setting.delete');
        Route::get('/edit/{id}',[SettingAdminController::class,'edit'])->name('setting.edit');
        Route::post('/update/{id}',[SettingAdminController::class,'update'])->name('setting.update');





    });
    
    
});
