<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\categorie_controller;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\gallery_controller;
use App\Http\Controllers\productadv_controller;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\dashboard_controller;
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

//Frontend

Route::view('/index','Frontend.index-2');
Route::view('/reviews','Frontend.testimonial');

Route::view('/shop-single','Frontend.shop-single');
Route::view('/team','Frontend.team-2');
Route::view('/service','Frontend.service-3');
Route::view('/service-single','Frontend.service-single');
Route::view('/error','Frontend.error');
Route::view('/gallery_site','Frontend.gallery');

/*------------------------Product adv Frontend-------------------------*/
Route::get('/shop',[productadv_controller::class,'show']); 

/*------------------------contact-------------------------*/
Route::get('/contact',[contact_controller::class,'create']); //view
Route::post('/contact',[contact_controller::class,'store']); //insert
Route::get('/contact/{id}',[contact_controller::class,'destroy']); //delete

Route::view('/case','Frontend.case-4');
Route::view('/case-single','Frontend.case-single');
Route::view('/about','Frontend.about');

/*------------------------customer-------------------------*/
Route::get('/flogin',[customer_controller::class,'flogin'])->middleware('beforelogin');
Route::post('/fuserlogin',[customer_controller::class,'fuserlogin']);
Route::get('/flogout',[customer_controller::class,'flogout']);

Route::get('/fregister',[customer_controller::class,'create'])->middleware('beforelogin');
Route::post('/fregister',[customer_controller::class,'store']);

Route::get('/myaccount',[customer_controller::class,'myaccount'])->middleware('afterlogin');
Route::get('/edit/{id}',[customer_controller::class,'edit'])->middleware('afterlogin');
Route::post('/edit/{id}',[customer_controller::class,'update']);

//Backend


Route::group(['middleware'=>['adminAuth']], function(){

Route::get('/', function () {
    return view('Backend.Admin.register');
});

Route::get('/admin', function () {
    return view('Backend.Admin.index');
});

Route::get('/dashboard', function () {
    return view('Backend.Admin.dashboard');
});

Route::get('/profile', function () {
    return view('Backend.Admin.profile');
});

Route::get('/admin-forgetpass', function () {
    return view('Backend.Admin.forgot-password');
});


Route::get('/admin-changepass', function () {
    return view('Backend.Admin.change-password');
});

Route::get('/admin-changepass2', function () {
    return view('Backend.Admin.change-password2');
});

Route::get('/admin-calendar', function () {
    return view('Backend.Admin.calendar');
});

Route::get('/editprofile', function () {
    return view('Backend.Admin.edit-profile');
});

Route::get('/admin-404', function () {
    return view('Backend.Admin.error-404');
});


Route::get('/admin-setting', function () {
    return view('Backend.Admin.settings');
});


Route::get('/admin-gallery', function () {
    return view('Backend.Admin.gallery');
});

Route::get('/admin-local', function () {
    return view('Backend.Admin.localization');
});

Route::get('/admin-lock', function () {
    return view('Backend.Admin.lock-screen');
});

Route::get('/admin-notification', function () {
    return view('Backend.Admin.notifications-settings');
});

Route::get('/admin-theme', function () {
    return view('Backend.Admin.theme-settings');
});



/*------------------------Category-------------------------*/
Route::get('/addcategory',[categorie_controller::class,'create']); //view
Route::post('/addcategory',[categorie_controller::class,'store']); //insert
Route::get('/addcategory/{id}',[categorie_controller::class,'destroy']); //delete
Route::get('/admin-managecategory',[categorie_controller::class,'index']); 


/*------------------------Product Adv-------------------------*/
Route::get('/addproduct',[productadv_controller::class,'create']); //view
Route::post('/addproduct',[productadv_controller::class,'store']); //insert
Route::get('/addproduct/{id}',[productadv_controller::class,'destroy']); //delete
Route::get('/admin-manageproduct',[productadv_controller::class,'index']); 

Route::get('/editpro/{id}',[productadv_controller::class,'editpro']);//edit
Route::post('/editpro/{id}',[productadv_controller::class,'update']);//update


/*------------------------Contact-------------------------*/
Route::get('/admin-managecontact',[contact_controller::class,'index']); 
                        

/*------------------------Customer-------------------------*/
Route::get('/admin-managecustomer',[customer_controller::class,'index']); 

});

/*------------------------Admin-------------------------*/
Route::get('/login',[admin_controller::class,'login']);
Route::post('/userlogin',[admin_controller::class,'userlogin']);
Route::get('/logout',[admin_controller::class,'logout']);

Route::get('/register',[admin_controller::class,'create']);
Route::post('/register',[admin_controller::class,'store']);

?>