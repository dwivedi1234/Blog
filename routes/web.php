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


// front 
Route::get('/', 'Front\HomeController@index')->name('index');
Route::get('/test/login', 'Front\HomeController@testloginform');
Route::post('/test/login', 'Front\HomeController@testlogin')->name('testlogin');


Route::get('/blog/{slug}', 'Front\HomeController@blogDetails')->name('blogDetails');
Route::get('category/{slug}','Front\HomeController@categoryBlog')->name('categoryBlog');
Route::get('search','Front\HomeController@search')->name('search');
Route::get('page/{name}','Front\HomeController@page')->name('page');


Route::post('comment/store/{blog_id}','Front\CommentController@store')->name('commentStore');
Route::get('allcomment','Front\CommentController@index')->name('allcomment');



// admin routes


Route::group(['prefix'=>'admin'], function(){
    
    // auth login and register 
    Auth::routes();


    Route::get('/home','HomeController@index')->name('home');
    
    // category 
    Route::resource('category', 'CategoryController')->middleware('auth');
    Route::post('category/update', 'CategoryController@categoryUpdate')->name('categoryUpdate')->middleware('auth');
    // Blog
    Route::resource('blog','BlogController')->middleware('auth');
    // comment route
  
    // Route::get('admin','CommentController@store')->name('admin');
    
    

});





