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

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/bmi', function () {
    return view('bmi');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/test', 'PostController@show');