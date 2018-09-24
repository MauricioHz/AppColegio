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
    return view('layouts.landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/mensaje', 'MensajeController@create')->name('mensaje.create');

Route::get('/mensaje-store', 'MensajeController@store')->name('mensaje.store');