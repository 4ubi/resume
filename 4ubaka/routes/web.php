<?php

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
//роутинг для резюме
Route::get('/', function () {
    return view('index');
});

Route::get('main', function () {
    return view('index');
});

Route::get('linkme', function () {
    return view('contact');
});

Route::get('examples', function () {
    return view('galarycode');
});
//роутинг для блога
Route::get('blog', function () {
    return view('blog/blog');
});

Route::get('news', function () {
    return view('blog/newsblog');
});

Route::get('idea', function () {
    return view('blog/idea');
});

Route::get('connt', function () {
    return view('blog/connt');
});

//роутинг для сайта с cms

Route::get('cms', function () {
    return view('cms');
});

