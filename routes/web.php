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
Route::get('/AddCart/{id}','CartController@AddCart');
Route::get('/destroyCart/{id}','CartController@destroyCart');
Auth::routes();
Route::get('/home', 'CartController@index')->name('home');
Route::get('/viewCart','CartController@viewCart');
Route::get('/updateCart/{id}-{count}-{totalPrice}','CartController@updateCart');
Route::get('/search','CartController@searchProduct');
Route::get('/search/{name}','CartController@searchCategoryProduct');
Route::post('/uploadfile', 'CartController@upload');
Route::get('/admin','CartController@admin')->middleware('Role:admin');
Route::get('/admin/addProduct','adminController@addProduct')->middleware('Role:admin');
Route::post('/addCategory', 'adminController@addCategory')->middleware('Role:admin');
Route::get('/admin/managerProducts','adminController@managerProducts')->middleware('Role:admin');
Route::get('/admin/deleteProduct/{id}','adminController@deleteProduct')->middleware('Role:admin');
Route::get('/admin/updateProduct/{id}','adminController@updateProduct')->middleware('Role:admin');





