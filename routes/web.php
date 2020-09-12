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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



/*Route::get('/', function () {
    return view('bienvenido');
})->name('ruta_inicio');*/


Route::get('/', 'inicioController@showName');
Route::get('/productos', 'productosController@showName')->middleware('adminis');
Route::get('/contacto', 'contactoController@showName')->middleware('adminis');
Route::get('/servicios', 'serviciosController@showName')->middleware('adminis');



/*Route::get('/productos', function () {
    return view('productos');
})->name('ruta_productos');

Route::get('/servicios', function () {
    return view('servicios');
})->name('ruta_servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('ruta_contacto');*/
