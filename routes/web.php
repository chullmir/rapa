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

Route::get('/','PagesController@index')->name('index');
Route::get('/evaluar','PagesController@evaluar')->name('evaluar');
Route::get('/evaluar/{id}','PagesController@calificar');
Route::post('/enviado','RespuestasController@store')->name('enviado');
Route::get('/resultados','PagesController@resultados')->name('resultados');
Route::get('/resultados/{id}','PagesController@individual');
Route::get('/login','PagesController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// https://www.youtube.com/watch?v=w3Pn9jAt0o4