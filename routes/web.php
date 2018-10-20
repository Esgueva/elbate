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

// + ROUTES OPTIMA: mediante clases y metodos contrlollers en app\Http\Controllers\PagesController.php 
Route::get('/','PagesController@home');
Route::get('/tipos','PagesController@types');
Route::get('/ofertas','PagesController@offers');
Route::get('/acerca','PagesController@about');
Route::get('/contacto','PagesController@contact');

Route::get('/pedidos','PedidosController@create');
Route::post('/pedidos','PedidosController@store');
