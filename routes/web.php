<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user/index','UserController');
Route::resource('/departments','DepartmentsController');