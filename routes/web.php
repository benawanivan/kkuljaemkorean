<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::get('/pemula', 'App\Http\Controllers\HomeController@pemula');
Route::get('/dasar', 'App\Http\Controllers\HomeController@dasar');
Route::get('/percakapan', 'App\Http\Controllers\HomeController@percakapan');
Route::get('/menengah', 'App\Http\Controllers\HomeController@menengah');
Route::get('/intensifsatu', 'App\Http\Controllers\HomeController@intensif1');
Route::get('/intensifdua', 'App\Http\Controllers\HomeController@intensif2');
Route::get('/lanjutan', 'App\Http\Controllers\HomeController@lanjutan');
Route::get('/topik', 'App\Http\Controllers\HomeController@topik');
Route::get('/caradaftar', 'App\Http\Controllers\HomeController@caradaftar');
Route::get('/starclass', 'App\Http\Controllers\HomeController@starclass');
Route::get('/tentangbuku', 'App\Http\Controllers\HomeController@tentangbuku');
Route::get('/audiofile', 'App\Http\Controllers\HomeController@audiofile');
Route::get('/kkuljaemedu', 'App\Http\Controllers\HomeController@kkuljaemedu');

Route::get('/login', 'App\Http\Controllers\AdminController@login')->name('login')->middleware('CekNoLoginMiddleware');
Route::post('/proseslogin', 'App\Http\Controllers\AdminController@proses_login')->name('proseslogin');

Route::group(['middleware' => 'CekLoginMiddleware'], function (){
    Route::get('/logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
    Route::get('/slider', 'App\Http\Controllers\AdminController@slider')->name('slider');
    Route::get('/addslider', 'App\Http\Controllers\AdminController@addslider')->name('addslider');
    Route::get('/clock', 'App\Http\Controllers\AdminController@clock')->name('clock');
    Route::get('/profile', 'App\Http\Controllers\AdminController@profile')->name('profile');
    Route::post('/upload', 'App\Http\Controllers\AdminController@proses_upload')->name('upload');
    Route::get('/delete/{id}','App\Http\Controllers\AdminController@destroy');
    Route::post('/edit', 'App\Http\Controllers\AdminController@edit')->name('edit');
    Route::post('/editclock', 'App\Http\Controllers\AdminController@editclock')->name('editclock');
});


