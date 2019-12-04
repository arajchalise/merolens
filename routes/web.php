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

Route::get('/', 'WelcomeController@index')->name('welcome');


// clients controller
Route::get('/clients', 'ClientsController@index')->name('clients');
Route::get('/client', 'ClientsController@store');
Route::get('/clients/login', 'ClientsController@clientsLogin')->name('clientsLogin');
Route::get('/clients/register', 'ClientsController@clientsRegister')->name('clientsRegister');


//product controller
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/{id}/destroy', 'ProductController@destroy');
Route::get('/product', 'ProductController@create')->name('createProduct');
Route::get('product/{product}/addToCart', 'ProductController@addToCart')->name('addToCart');
Route::get('/product/{product}/productImageStore', 'ProductController@productImageStore')->name('stroreImages');
Route::get('/product/store', 'ProductController@store')->name('storeProduct');


// Route::get('/roles', 'RolesController@store');

//orders controller
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/order/{order}', 'OrdersController@show');
Route::get('/order', 'OrdersController@makeOrder');
Route::get('/order/{id}/billing', 'OrdersController@billing')->name('billing');
Route::get('/dispatchedOrder', 'OrdersController@dispatchedOrder')->name('dispatchedOrder');


//users controller
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/verifyUser/{user}', 'UsersController@verifyUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
