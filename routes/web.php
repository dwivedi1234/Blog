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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('category', '\App\Http\Controllers\CategoryController')->middleware('auth');


Route::post('category/update', '\App\Http\Controllers\CategoryController@categoryUpdate')->name('categoryUpdate')->middleware('auth');



// Route::get('contact-form','con@form');
// Route::post('contact-form','con@formsubmits');
