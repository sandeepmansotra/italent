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

Route::resource('/','OrdersController')->middleware('auth');
Route::get('/chart','ChartController@index')->middleware('auth');
Route::get('/bar','ChartController@barChart')->middleware('auth');
Route::get('/line','ChartController@lineChart')->middleware('auth');
Route::get('/report','DisplayController@index')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
