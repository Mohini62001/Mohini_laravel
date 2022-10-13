<?php

use Illuminate\Support\Facades\Route;

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
    return view('Admin.index');
});

Route::get('/home', function () {
    return view('Admin.index');
});

Route::get('/login', function () {
    return view('Admin.login');
});

Route::get('/register', function () {
    return view('Admin.register');
});

Route::get('/add_category', function () {
    return view('Admin.add_category');
});

Route::get('/edit_category', function () {
    return view('Admin.edit_category');
});

Route::get('/manage_category', function () {
    return view('Admin.manage_category');
});

Route::get('/add_product', function () {
    return view('Admin.add_product');
});

Route::get('/edit_product', function () {
    return view('Admin.edit_product');
});

Route::get('/manage_product', function () {
    return view('Admin.manage_product');
});

Route::get('/change_password', function () {
    return view('Admin.change_password');
});
