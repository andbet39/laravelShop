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

Route::get('/admin/product/new', 'ProductController@newProduct');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
Route::post('/admin/product/save', 'ProductController@add');

Route::get('/', 'MainController@index');

// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::auth();

Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');


Route::post('/checkout', 'OrderController@checkout');

Route::get('order/{orderId}', 'OrderController@viewOrder');
Route::get('order', 'OrderController@index');
Route::get('download/{orderId}/{filename}', 'OrderController@download');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
