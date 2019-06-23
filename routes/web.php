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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
//Esto solamente lo va a poder modificar un Administrador.
Route::group(['prefix' => 'subcategory'], function() {
    Route::get('/create', 'SubcategoryController@create');/* ->middleware('admin') */
    Route::post('/create', 'SubcategoryController@store');
});

Route::group(['prefix' => 'category'], function() {
    Route::get('/create', 'CategoryController@create');/* ->middleware('admin') */
    Route::post('/create', 'CategoryController@store');
});

Route::group(['prefix' => 'products'], function() {
    Route::get('/create', 'ProductController@create');/* ->middleware('admin') */
    Route::post('/create', 'ProductController@store');
});
