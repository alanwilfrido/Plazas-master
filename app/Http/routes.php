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

Route::get('/', function () { return view('welcome'); });

Route::get('/contacto', 'PlazasController@contacto');
Route::get('/altas', 'PlazasController@altas');
Route::get('/bajas', 'PlazasController@bajas');
Route::get('/aumentos', 'PlazasController@aumentoView');
Route::get('/cambios', 'PlazasController@cambios');
Route::get('/mensaje', 'PlazasController@mensaje');
Route::get('/cambios/{id}', 'PlazasController@Bajaedit');
Route::post('/aumento', 'PlazasController@aumento');

Route::resource('plazas', 'PlazasController');
Route::resource('mail', 'MailController');