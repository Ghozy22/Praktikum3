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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/contact-us', function () {
    return view('contact-us',[
        "title" => "Contact-us"
    ]);
});

Route::get('/about-us', function () {
    return view('about-us',[
        "title" => "About-us"
    ]);
});

Route::get('/news', function () {
    return view('news',[
        "title" => "News"
    ]);
});

Route::get('/product', function () {
    return view('product',[
        "title" => "Product"
    ]);
});

Route::get('/program', function () {
    return view('program',[
        "title" => "Program"
    ]);
});