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

Route::resource('/', 'FrontController');



Route::get('/admin', 'BackendController@index');
Route::resource('/admin/course', 'CourseController');
Route::get('/admin/room', 'RoomController@index');
Route::get('/admin/room/manage', 'RoomController@manageroom');
Route::get('/admin/registration', 'StudentregController@index');
Route::get('/admin/registration/manage', 'StudentregController@managestudent');
