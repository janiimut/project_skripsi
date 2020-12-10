<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/penyakit', 'PenyakitController@index')->name('penyakit');

Route::get('/penyakit/{penyakit}', 'PenyakitController@ciri')->name('ciripenyakit');

Route::get('/solusipenyakit/{penyakit}', 'PenyakitController@solusi');

Route::get('/inputpenyakit','PenyakitController@input');

Route::post('/inputpenyakit','PenyakitController@store');

Route::get('/datauser','PenyakitController@user')->name('datauser');

Route::get('edit/penyakit/{penyakit}', 'PenyakitController@edit')->name('edit.penyakit');
Route::patch('edit/penyakit/{penyakit}', 'PenyakitController@patch')->name('edit.patch');