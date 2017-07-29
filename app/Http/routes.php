<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('selesai/{param}','Menu@selesai');
Route::get('hapus/{param}','Menu@hapus');
Route::get('/code', function () {
    return view('code');
});
Route::resource('daftar', 'Menu');
