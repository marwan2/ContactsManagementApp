<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'/', 'namespace'=>'Backend', 'middleware'=>'auth'], function() {
	Route::resource('contacts', 'ContactsController');
});

Route::get('testing', function() {
	return 'Start test';
});
Route::get('/home', 'HomeController@index')->name('home');
