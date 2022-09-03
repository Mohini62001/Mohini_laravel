<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\booking_controller;
use App\Http\Controllers\caradv_controller;
use App\Http\Controllers\cartype_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\customer_controller;
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

Route::get('/', function () {
    return view('welcome');
});

///////////////////////Frontend////////////////////////

Route::get('/signup',[customer_controller::class,'create']);
Route::post('/signup',[customer_controller::class,'store']);

Route::get('/customerlogin',[customer_controller::class,'customercreate']);
Route::post('/customerlogin',[customer_controller::class,'customerlogin']);

Route::view('/index','Frontend.index');
Route::view('/error','Frontend.404');
Route::view('/about','Frontend.about');
Route::view('/contact','Frontend.contact');
Route::view('/mycar','Frontend.mycar');
Route::view('/advcar','Frontend.advcar');
Route::view('/profilesetting','Frontend.profilesetting');
Route::view('/cardetail','Frontend.cardetail');
Route::view('/cart','Frontend.cart');
Route::view('/checkout','Frontend.checkout');
Route::view('/userpayment','Frontend.userpayment');

/*---------------contact---------------*/

Route::get('/contact',[contact_controller::class,'create']);
Route::post('/contact',[contact_controller::class,'store']);

/////////////////////Backend//////////////////////////////////

Route::view('/login','Backend.Admin.login');
Route::view('/register','Backend.Admin.register');
Route::view('/admin','Backend.Admin.dashboard');
Route::view('/addcaradv','Backend.Admin.addcaradv');
Route::view('/editprofile','Backend.Admin.editprofile');
Route::view('/managecaradv','Backend.Admin.managecaradv');
Route::view('/managecustomer','Backend.Admin.managecustomer');
Route::view('/profile','Backend.Admin.profile');
Route::view('/addcartype','Backend.Admin.addcartype');
Route::view('/managecartype','Backend.Admin.managecartype');
Route::view('/managebooking','Backend.Admin.managebooking');

/*--------------addcartype-----*/

Route::get('/addcartype',[cartype_controller::class,'create']);
Route::post('/addcartype',[cartype_controller::class,'store']);
Route::get('/managecartype',[cartype_controller::class,'index']);
Route::get('/addcartype/{id}',[cartype_controller::class,'destroy']);



/*------------------managecontact-------------*/

Route::get('/managecontact',[contact_controller::class,'index']);
Route::get('/contact/{id}',[contact_controller::class,'destroy']);
