<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/index','CustomerController@index')->name('Customer.index');
Route::post('/create','CustomerController@store')->name('Customer.store');
Route::get('/customers/{id}', 'CustomerController@show')->name('customers.show');
Route::put('/customers/{id}', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{id}', 'CustomerController@destroy')->name('customers.destroy');


