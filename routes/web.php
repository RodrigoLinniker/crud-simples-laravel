<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TesteController@index')->name('home');
Route::get('/create', 'TesteController@create')->name('create');
Route::post('/store', 'TesteController@store')->name('store');
Route::get('/edit/{id}', 'TesteController@edit')->name('edit');
Route::post('/update/{id}', 'TesteController@update')->name('update');
Route::delete('/delete/{id}', 'TesteController@delete')->name('delete');


