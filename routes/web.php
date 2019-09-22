<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','PagesController@index' );
Route::get('/about','PagesController@about' );
