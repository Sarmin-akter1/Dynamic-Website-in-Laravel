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
})->name('home');
Route::get('contact',function (){
    return view('contact');
})->name('contact');
Route::post('contact','App\Http\Controllers\contactController@store')->name('contact-us');
Route::get('testimonials', function (){
    return view('testimonials');
})->name('testimonial');
Route::get('about',function (){
    return view('about');
})->name('about');

//create blog post
Route::get('create-blog','App\Http\Controllers\blogController@index')->name('blogPost');
Route::post('createBlog','App\Http\Controllers\blogController@store')->name('blog-Post');
//create dynamic blog page,upload blog
Route::get('blog','App\Http\Controllers\blogController@create')->name('blog');
//create dynamic blog all post view
Route:: get('allPost', 'App\Http\Controllers\blogController@allPost')->name('viewPost');
Route:: get('deletePosts/{id}', 'App\Http\Controllers\blogController@destroy')->name('deletePost');
Route::get('viewYourPost/{id}','App\Http\Controllers\blogController@show')->name('viewYourPost');

//register

Route::get('register','App\Http\Controllers\registerControllers@index')->name('register');
Route::post('user-register','App\Http\Controllers\registerControllers@store')->name('userRegister');
Route::get('dashboard-page',function (){
    return view('dashbord');
})->name('dashbord');
//login
Route::get('login','App\Http\Controllers\registerControllers@create')->name('login');
Route::post('userr-login','App\Http\Controllers\registerControllers@userLogin')->name('Userlogin');


Route::get('user','App\Http\Controllers\registerControllers@userLogin')->name('dashboard');
//logout
Route::get('logout','App\Http\Controllers\registerControllers@logout')->name('logout');
//resourec controller
use App\Http\Controllers\resourceControllr;
Route::resource('insights',resourceControllr::class);

//admin panel
Route::get('AdminLogin','App\Http\Controllers\adminController@index')->name('adminLogin');
Route::post('AdminLogin','App\Http\Controllers\adminController@store')->name('admin-Login');
