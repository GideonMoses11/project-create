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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IphoneController@index');
Route::post('/create', 'IphoneController@create')->name('create');
Route::get('/database', 'IphoneController@database')->name('database');
Route::get('/edit/{id}', 'IphoneController@edit')->name('edit');
Route::put('/update/{id}','IphoneController@update')->name('update');
Route::delete('/delete/{id}', 'IphoneController@delete')->name('delete');
Route::store('/store', 'IphoneController@store');

