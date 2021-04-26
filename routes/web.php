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

use App\Http\Controllers\CartController;

Route::get('/','CartController@index');
Route::get('/admin','CartController@admin')->middleware('Role:admin');
Route::get('/AddCart/{id}','CartController@AddCart');
Route::get('/destroyCart/{id}','CartController@destroyCart');
Auth::routes();
Route::get('/home', 'CartController@index')->name('home');
Route::get('/viewCart','CartController@viewCart');
Route::get('/updateCart/{id}-{count}-{totalPrice}','CartController@updateCart');
Route::get('/search','CartController@searchProduct');
Route::post('/uploadfile', 'CartController@upload');
Route::get('/admin/addProduct','adminController@addProduct');
Route::post('/addCategory', 'adminController@addCategory');



