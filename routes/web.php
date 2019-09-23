<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/index', 'PagesController@index')->name('home');

Route::resource('/departments','DepartmentsController');

Route::get('/departments/{dept_id}/teams/','TeamsController@index');

Route::get('/departments/{dept_id}/teams/create','TeamsController@create');

Route::post('/departments/{dept_id}/teams/store','TeamsController@store');
