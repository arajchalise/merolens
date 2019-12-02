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


Route::get('/clients', 'ClientsController@index');

Route::get('/products', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/{id}/destroy', 'ProductController@destroy');
Route::get('/product', 'ProductController@store');
Route::get('/orders', 'OrdersController@index');
//Route::get('/roles', 'RolesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
