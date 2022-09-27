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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/car-list-one', function () {
    return view('car-list-one');
});

Route::get('/car-list-two', function () {
    return view('car-list-two');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/error-404', function () {
    return view('error-404');
});

Route::get('/home-two', function () {
    return view('home-two');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/reservation', function () {
    return view('reservation');
});
