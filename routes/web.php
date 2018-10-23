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
//Route::get('/contacto','PagesController@contact');

Route::post('/contacto' ,'PedidosController@store');
Route::get ('/contacto' ,'PedidosController@create');
Route::get ('/pedidos','PedidosController@index');
Route::get ('/pedido/{slug?}','PedidosController@show');
Route::post('/pedido/{slug?}/edit','PedidosController@edit');
Route::post('/pedido/{slug?}/delete','PedidosController@destroy');

Route::get('email',function(){
	$data = array('name'=> "Cañas de Dulzaina",);

	Mail::send('emails.welcome', $data, function($message){
		$message->from('esgueva.dam@gmail.com','Esgueva');
		$message->to('esgueva.dam@gmail.com')->subject('TIENES UN NUEVO PEDIDO');
	});

	return "Tu email ha sido enviado con exito.";

});