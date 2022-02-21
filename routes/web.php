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
    return view('paginalayouts.indexpage');
});

Route::get('login', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blog', 'CategoriaController');
Route::resource('artistas', 'ArtistaController');
Route::resource('blog', 'BlogController');
// Route::resource('carusel', 'CaruselController');
Route::resource('eventos', 'EventoController');
Route::resource('productos', 'ProductoController');
Route::resource('videos', 'VideoController');
Route::resource('indexpage', 'IndexController');


Route::get('/', 'IndexController@getIndex')->name('index');