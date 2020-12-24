<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/penyakit', 'PenyakitController@index')->name('penyakit');
Route::get('/edit', 'PenyakitController@editpenyakit')->name('edit');

Route::get('/solusipenyakit/{penyakit}', 'PenyakitController@solusi')->name('solusiindex');
Route::get('/edit/solusi/{solusi}', 'PenyakitController@editsolusi')->name('editsolusi');
Route::patch('/edit/solusi/{solusi}', 'PenyakitController@solusiupdate')->name('solusiupdate');

Route::get('edit/ciri/{ciri}', 'PenyakitController@editciri')->name('editciri');
Route::patch('edit/ciri/{ciri}', 'PenyakitController@updateciri')->name('update');

Route::get('/penyakit/{penyakit}', 'PenyakitController@ciri')->name('ciripenyakit');

Route::get('/inputpenyakit','PenyakitController@input');

Route::post('/inputpenyakit','PenyakitController@store');

Route::get('/datauser','PenyakitController@user')->name('datauser');

Route::get('edit/penyakit/{penyakit}', 'PenyakitController@edit')->name('edit.penyakit');
Route::patch('edit/penyakit/{penyakit}', 'PenyakitController@patch')->name('edit.patch');

Route::delete('delete/{penyakit}', 'PenyakitController@destroy')->name('delete');