<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/departments','DepartmentsController');

Route::get('/departments/{dept_id}/teams/','TeamsController@index');

Route::get('/departments/{dept_id}/teams/create','TeamsController@create');

Route::post('/departments/{dept_id}/teams/store','TeamsController@store');
Route::get('user',                   [ 'as'=>'user',                 'uses' => 'UsersController@index']);
