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
<<<<<<< HEAD
Route::resource('/user','UsersController');
Route::resource('/user/create','UsersController@create');

=======

Route::get('/departments/{dept_id}/teams/','TeamsController@index');

Route::get('/departments/{dept_id}/teams/create','TeamsController@create');

Route::post('/departments/{dept_id}/teams/store','TeamsController@store');
>>>>>>> 858badd2d49bfa631f2de6a92841cb5de1046024
