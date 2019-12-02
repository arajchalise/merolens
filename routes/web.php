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

Route::get('/', function () {
    return view('welcome');
});


// clients controller
Route::get('/clients', 'ClientsController@index');
Route::get('/client', 'ClientsController@store');

//product controller
Route::get('/products', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/{id}/destroy', 'ProductController@destroy');
Route::get('/product', 'ProductController@store');


//Route::get('/roles', 'RolesController@store');

//orders controller
Route::get('/orders', 'OrdersController@index');
Route::get('/order/{order}', 'OrdersController@show');
Route::get('/order', 'OrdersController@makeOrder');

//users controller
Route::get('/users', 'UsersController@index');
Route::get('/verifyUser/{user}', 'UsersController@verifyUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
