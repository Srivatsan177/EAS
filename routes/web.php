<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UsersController@index')->name('user');
Route::get('user/create',            [ 'as'=>'user.create',          'uses' => 'UsersController@create']);
Route::post('user/store',            [ 'as'=>'user.store',           'uses' => 'UsersController@store']);
Route::get('/index', 'PagesController@index')->name('home');

Route::get('/home','HomeController@index')->name('home');

Route::resource('/departments','DepartmentsController');

Route::get('/departments/{dept_id}/teams/','TeamsController@index');
Route::get('/{id}','MembersRecordController@create');

Route::post('{id}/store',        [ 'as'=>'rating.store',        'uses' => 'MembersRecordController@store']);
Route::get('/departments/{dept_id}/teams/create','TeamsController@create');

Route::post('/departments/{dept_id}/teams/store','TeamsController@store');

Route::get('/departments/{dept_id}/teams/{team_id}','TeamsController@viewMembers');

Route::get('/departments/{dept_id}/teams/{team_id}/add_member','TeamsController@addMembers');

Route::post('/departments/{dept_id}/teams/{team_id}/store_member','TeamsController@storeMember');
// Route::get('/departments/{dept_id}/teams/{team_id}/{id}','MembersRecordController@create');

Route::get('/departments/{dept_id}/teams/{team_id}/{user_id}','TeamsController@memberDetails');

Route::get('/departments/{dept_id}/teams/{team_id}/{user_id}/create_rating','TeamsController@createRating');

Route::post('/departments/{dept_id}/teams/{team_id}/{user_id}/store_rating','TeamsController@storeRating');