<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\categorie_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\product_detail_controller;
use App\Http\Controllers\faq_controller;

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

Route::group(['middleware'=>['admin_beforelogin']], function(){

    Route::get('/register',[admin_controller::class,'create']);
    Route::post('/register',[admin_controller::class,'store']);
    
    Route::get('/login',[admin_controller::class,'login']);
    Route::post('/adminlogin',[admin_controller::class,'adminlogin']);
    
        
    });
    
    Route::group(['middleware'=>['admin_afterlogin']], function(){
    
    Route::get('/logout',[admin_controller::class,'logout']);
    
    Route::get('/change_password',[admin_controller::class,'changepasswordcreate']);
    Route::post('/change_password',[admin_controller::class,'changepassword']);
    
    Route::get('/product/add_product',[product_controller::class,'create']);
    Route::post('/product/add_product',[product_controller::class,'store']);
    Route::get('/product/manage_product',[product_controller::class,'index']);
    Route::get('/product/edit_product/{id}',[product_controller::class,'edit']);
    Route::post('/product/edit_product/{id}',[product_controller::class,'update']);
    Route::get('/product/destroy_product/{id}',[product_controller::class,'destroy']); 
    
    Route::get('/category/add_category',[categorie_controller::class,'create']);
    Route::post('/category/add_category',[categorie_controller::class,'add_category']);
    Route::get('/category/manage_category',[categorie_controller::class,'index']);
    Route::get('/category/edit_category/{id}',[categorie_controller::class,'edit']);
    Route::post('/category/edit_category/{id}',[categorie_controller::class,'update']);
    Route::get('/category/destroy_category/{id}',[categorie_controller::class,'destroy']); 
    
    Route::get('/product/add_product_child/{id}',[product_detail_controller::class,'create']);
    Route::post('/product/add_product_child/{id}',[product_detail_controller::class,'store']);
    Route::get('/product/edit_product_child/{id}',[product_detail_controller::class,'edit']);
    Route::get('/product/manage_product_child/{id}',[product_detail_controller::class,'index']);
    Route::post('/product/edit_product_child/{id}',[product_detail_controller::class,'update']);
    Route::get('/product/destroy_product_child/{id}',[product_detail_controller::class,'destroy']);
    
    Route::get('/faq',[faq_controller::class,'create']);
    Route::post('/faq/store',[faq_controller::class,'store']);
    Route::get('/faq/edit/{id}',[faq_controller::class,'edit']);
    Route::post('/faq/edit/{id}',[faq_controller::class,'update']);
    Route::get('/faq/destroy/{id}',[faq_controller::class,'destroy']); 
    
    
    Route::get('/', function () { return view('index');});
    
    Route::get('/home', function () { return view('Admin.index');});
    
    });
