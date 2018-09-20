<?php

/*
|--------------------------------------------------------------------------
| Web Routes--- MI PRIMERA RUTA--
|--------------------------------------------------------------------------
|
|estoy aprendiendo laravel
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/prueba', function () {
	return 'hola soy edgar de mesa sap estamos aprendiendo mas de laravel';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
