<?php

Route::get('/', function () {
	return "cambio negro";
});

Route::get('vcard', 'UserController@index');

Route::post('vcard', 'UserController@store');
