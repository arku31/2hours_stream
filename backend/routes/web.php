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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/home/loadAjax', 'HomeController@loadByAjax')->name('home.ajax');
Route::get('/game/{game}', 'GameController@show')->name('game.show');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');
Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
Route::get('/cart', 'CartController@step1')->name('cart.step1');
Route::get('/cart/confirm', 'CartController@step2')->name('cart.step2');
Route::get('/cart/add/{game}', 'CartController@addToCart')->name('cart.addToCart');
Route::post('/search', 'GameController@search')->name('game.search');
Route::get('/page/{page}', 'PageController@show')->name('page.show');
