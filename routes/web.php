<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\SupplierController;

// frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CommonController;
use App\Http\Controllers\frontend\BlogController;


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
Route::group(['middleware'=>'auth'],function(){
    // dashboard
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    // logout
    //Logout
    Route::get('admin/logout',[LoginController::class,'logout'])->name('logout');

    // product
    // Route::get('create/product', [ProductController::class, 'create'])->name('create.product');
    // Route::post('store/product', [ProductController::class, 'store'])->name('store.product');
    // Route::get('index/product',  [ProductController::class, 'index'])->name('index.product');
    // Route::get('view/product{id}',[ProductController::class, 'view'])->name('view.product');
    // Route::post('delete/product',[ProductController::class, 'destroy'])->name('delete.product');
    // Route::get('edit/product{id}',[ProductController::class, 'edit'])->name('edit.product');
    // Route::post('update/product{id}', [ProductController::class, 'update'])->name('update.product');
    // Route::post('update/product{id}', [ProductController::class, 'update'])->name('update.product');

    // supplier 
    Route::get('create/supplier', [SupplierController::class, 'create'])->name('create.supplier');
    Route::post('store/supplier', [SupplierController::class, 'store'])->name('store.supplier');
    Route::get('index/supplier',  [SupplierController::class, 'index'])->name('index.supplier');
    Route::get('view/supplier{id}',[SupplierController::class, 'view'])->name('view.supplier');
    Route::post('delete/supplier',[SupplierController::class, 'destroy'])->name('delete.supplier');
    Route::get('edit/supplier{id}',[SupplierController::class, 'edit'])->name('edit.supplier');
    Route::post('update/supplier{id}', [SupplierController::class, 'update'])->name('update.supplier');

});




Route::group(['middleware'=>'guest'],function(){
    //Login
    Route::get('/admin',[LoginController::class,'showlogin'])->name('admin');
    Route::post('admin/login',[LoginController::class,'loginprocess'])->name('login');


    //frontend
    Route::get('/', [HomeController::class, 'home'])->name('/');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/services', [CommonController::class, 'services'])->name('services');
    Route::get('/portfolio', [CommonController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/page', [CommonController::class, 'page'])->name('page');
    Route::get('/album', [CommonController::class, 'album'])->name('album');
    Route::get('/gallery', [CommonController::class, 'gallery'])->name('gallery');
    Route::get('/blog', [BlogController::class, 'blogs'])->name('blog');
    Route::get('/single-blog', [BlogController::class, 'blog'])->name('single.blog');
    
});