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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/error', function(){
	return 'Connection Error';
});

Route::get('/info', 'InfoController@info');

Route::get('/about', 'ContactUsController@index');
Route::post('/about', 'ContactUsController@store');


Route::get('/detailBerita', function () {
    return view('detailBerita');
});

Route::get('/pesan', 'ContactUsController@pesan');
Route::delete('/pesan/{id}', 'ContactUsController@destroy');

Route::get('/dashboardAdmin', 'InfoController@infoAdmin')->middleware('auth')->name('dashboardAdmin');

Route::get('/hospital', 'RujukController@index2');

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/beritaAdmin', 'BeritaController@index')->middleware('auth')->name('beritaAdmin');
Route::get('/beritaAdmin/create', 'BeritaController@create')->middleware('auth')->name('beritaAdminCreate');
Route::post('/beritaAdmin', 'BeritaController@store')->middleware('auth')->name('beritaAdminstore');
Route::get('/beritaAdmin/{id}/edit', 'BeritaController@edit')->middleware('auth')->name('beritaAdminedit');
Route::patch('/beritaAdmin/{id}', 'BeritaController@update')->middleware('auth')->name('beritaAdminupdate');
Route::delete('/beritaAdmin/{id}', 'BeritaController@destroy')->middleware('auth')->name('beritaAdmindestroy');

Route::get('/berita', 'BeritaController@index2');
Route::get('/berita/search', 'BeritaController@search');
Route::get('/berita/{id}/detail', 'BeritaController@detail');

Route::get('/hospitalAdmin', 'RujukController@index')->middleware('auth')->name('hospitalAdmin');
Route::get('/hospitalAdmin/create', 'RujukController@create')->middleware('auth')->name('formAdmin');
Route::post('/hospitalAdmin', 'RujukController@store')->middleware('auth')->name('hospitalAdminstore');
Route::get('/hospitalAdmin/{id}/edit', 'RujukController@edit')->middleware('auth')->name('formAdminedit');
Route::patch('/hospitalAdmin/{id}', 'RujukController@update')->middleware('auth')->name('formAdminupdate');
Route::delete('/hospitalAdmin/{id}', 'RujukController@destroy')->middleware('auth')->name('formAdmindestroy');

Route::get('/hospital/search', 'RujukController@search');