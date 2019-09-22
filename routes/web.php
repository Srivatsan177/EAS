<?php

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/','PagesController@index' );
Route::get('/about','PagesController@about' );
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> e765fa0ef1456e10d708163413ded46855ae9bc5
