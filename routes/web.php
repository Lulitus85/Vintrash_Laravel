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

Route::get('/home','HomeController@index');

Route::group(['prefix' => 'categorias'], function(){
    Route::get('/', 'CategoryController@index');
    Route::get('/{id}', 'CategoryController@show');
});

Route::group(['prefix' => 'products'], function(){
    // ¿aca van las 5 categorias?  --> o sea el home //
    Route::get('/{id}','ProductController@show');
});


Route::get('/home', 'HomeController@index')->name('home');
