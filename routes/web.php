<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PagesController@index' );
Route::get('/about','PagesController@about' );
