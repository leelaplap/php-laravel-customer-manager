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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('cities')->group(function (){
   Route::get('/','CityController@index') ->name('cities.index');
   Route::get('create','CityController@create') ->name('cities.create');
   Route::post('store','CityController@store') ->name('cities.store');
   Route::get('{id}/edit','CityController@edit') ->name('cities.edit');
   Route::post('{id}/update','CityController@update') ->name('cities.update');
   Route::get('{id}','CityController@destroy') ->name('cities.delete');
});


Route::prefix('customers')->group(function (){
    Route::get('/','CustomerController@index') ->name('customers.index');
   Route::get('create','CustomerController@create') ->name('customers.create');
   Route::post('store','CustomerController@store') ->name('customers.store');

    Route::get('{id}/edit','CustomerController@edit') ->name('customers.edit');
   Route::post('{id}/update','CustomerController@update') ->name('customers.update');

    Route::get('{id}/delete','CustomerController@destroy') ->name('customers.delete');
    Route::get('/search','CustomerController@search') ->name('customers.search');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
