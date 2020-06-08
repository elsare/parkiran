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

Route::get('/', function () {
    return view('welcome');
});

Route::get('konsumen','ParkiranController@index');
Route::post('/konsumen/create','ParkiranController@create');
Route::get('/konsumen/{id}/edit', 'ParkiranController@edit');
Route::post('/konsumen/{id}/update', 'ParkiranController@update');
Route::get('/konsumen/{id}/delete', 'ParkiranController@delete');

Route::get('transaksi','ParkiranController@transaksi');
