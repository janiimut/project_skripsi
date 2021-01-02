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

Auth::routes(['verify' => true]);

Route::get('/home', 'Frontend\PenyakitController@index')->name('home')->middleware('verified');
Route::get('/home/cari', 'Frontend\PenyakitController@cari')->name('cari');

Route::get('home/detail/{data}', 'Frontend\PenyakitController@detail')->name('detail');

