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
Route::get('/types','PagesController@types');
Route::get('/offers','PagesController@offers');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');








/* HOW-TO:

// + ROUTES OPTIMA: mediante clases y metodos contrlollers en app\Http\Controllers\HomeController.php 
Route::get('/','HomeController@home');


//Default return vista
Route::get('/', function () {
    return view('welcome');
});


//Return String
Route::get('/', function () {
    return 'welcome';
});

//Pasando parametros
Route::get('usuario/{nombre}', function($nombre) {
    return $nombre;
});

//Pasando parametros con valor by Default y ExpRegular
Route::get('usuarios/{nombre?}', function($nombre='Pepe') {
    return $nombre;
})->where('nombre', '[a-zA-Z]+');

*/