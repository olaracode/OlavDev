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
//
//Route::get('/', function () {
//    return view('index');
//})->name('inicio');
Route::get('/portfolio/univ', function () {
    return view('univ');
});
Route::get('/portfolio/estudio', function () {
    return view('jc');
});
Route::get('/portfolio/visual', function () {
    return view('visual');
});
Route::get('/portfolio/rs', function () {
    return view('real');
});
Route::get('/diseno', function () {
    return view('components');
});



Auth::routes();

//Consulta
Route::get('/', 'ConsultaController@create')->name('inicio');
Route::post('/consultas', 'ConsultaController@store');
Route::get('consultas/{consulta}/edit', 'ConsultaController@edit');
Route::patch('consultas/{consulta}', 'ConsultaController@update');
Route::patch('consultas/{consulta}/delete', 'ConsultaController@delete');


Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('logout', 'AuthenticatesUsers@logout');
Route::get('/admin/all', function () {
    return view('todas');
})->middleware('auth');