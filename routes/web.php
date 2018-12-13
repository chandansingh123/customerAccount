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

Auth::routes();
Route::group(['middleware' =>['auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/create','CustomerController@create')->name('customer.create');
	Route::get('/show/{id}','CustomerController@show')->name('customer.show');
	Route::get('/edit/{id}','CustomerController@edit')->name('customer.edit');
	Route::post('/store','CustomerController@store')->name('customer.store');
	Route::put('/update/{id}','CustomerController@update')->name('customer.update');
	Route::delete('/delete/{id}','CustomerController@destroy')->name('customer.delete');
});