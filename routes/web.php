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

Route::get('/departments/{dept_id}/teams/{team_id}','TeamsController@viewMembers');

Route::get('/departments/{dept_id}/teams/{team_id}/add_member','TeamsController@addMembers');

Route::post('/departments/{dept_id}/teams/{team_id}/store_member','TeamsController@storeMember');
