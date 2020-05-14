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

//BLOG ZELIM

Route::get('/blog', function () {
    $blog = DB::table('blog')->orderBy('id','desc')->paginate(6);

    return view('blog', ['blog' => $blog]);
});

Route::get('/blog-post', function () {
    return view('blog-post');
});



//EINDE BLOG ZELIM

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/bmi', function () {
    return view('bmi');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/test', 'PostController@show');

Route::get('/store_image', 'StoreImageController@index');
Route::post('/store_image/insert_image', 'StoreImageController@insert_image');
Route::get('/store_image/fetch_image/{id}', 'StoreImageController@fetch_image');

Route::get('/recipes', function () {
    $foto = DB::table('foto')->get();
    return view('recipes', ['foto' => $foto]);
});

Route::get('recipes-post', function () {
    return view('recipes-post');
});


Route::post('/blog', 'BlogController@store');
Route::get('/blog/{post}', 'BlogController@create');
Route::get('/blog/{post}', 'BlogController@show');

Route::post('/recipes', 'FotoController@store');
Route::get('/recipes/{post}', 'FotoController@create');
Route::get('/recipes/{post}', 'FotoController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    });
    Route::get('/users', function() {
        return view('admin.users');
    });
    Route::get('/recipesd', function() {
        return view('admin.recipes');
    });
});
