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
Route::post('/client', 'ClientsController@store')->name('clientStore');
Route::get('/clients/login', 'ClientsController@clientsLogin')->name('clientsLogin');
Route::post('client/login', 'ClientsController@login')->name('clientLogin');
Route::get('/clients/register', 'ClientsController@clientsRegister')->name('clientsRegister');
Route::get('clientLogout', 'ClientsController@logout')->name('clientLogout');


//product controller
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/{id}/destroy', 'ProductController@destroy');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('editProduct');
Route::get('/product', 'ProductController@create')->name('createProduct');
Route::post('/addToCart', 'ProductController@addToCart')->name('addToCart');
Route::get('/product/{product}/productImageStore', 'ProductController@productImageStore')->name('stroreImages');
Route::post('/product', 'ProductController@store')->name('storeProduct');
Route::post('/editProduct', 'ProductController@update')->name('updateProduct');
Route::get('/showCart', 'ProductController@showCart')->name('showCart');
Route::get('/removeCart/{id}', 'ProductController@removeCart');
Route::get('/getStock/{id}',  'ProductController@getStock');
Route::post('/updateCart', 'ProductController@updateCart')->name('updateCart');

// Route::get('/roles', 'RolesController@store');

//orders controller
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/order/{order}', 'OrdersController@show');
//Route::get('/order', 'OrdersController@makeOrder');
Route::get('/billing', 'ClientsController@billing')->name('billing');
Route::get('/dispatchedOrder', 'OrdersController@dispatchedOrder')->name('dispatchedOrder');
Route::get('/order/{id}/dispatch', 'OrdersController@dispatch');
Route::get('/checkout', 'ClientsController@checkout')->name('checkout');
Route::get('/hold', 'OrdersController@hold')->name('hold');
Route::get('/holdedOrder', 'OrdersController@holdedOrder')->name('holdedOrder');
Route::post('/makeOrder', 'OrdersController@makeOrder')->name('makeOrder');

//users controller
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/verifyUser/{user}', 'UsersController@verifyUser');


//Review Controller
Route::post('/storeReview', 'ReviewController@store')->name('storeReview');

// autocomplete
Route::get('/auto/{query}', 'AutoCompleteController@index');
Route::post('/autocomplete', 'AutoCompleteController@fetch')->name('autocomplete');

// Photo
Route::get('removePic/{id}', 'PhotoController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
