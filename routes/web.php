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
    return view('index');
})->name('inicio');
//diseño web
Route::get('/diseño', function () {
    return view('diseño');
})->name('diseño');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
