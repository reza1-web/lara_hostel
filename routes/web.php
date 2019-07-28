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
Route::resource('/admin/course', 'courseController');





Route::get('/admin', 'BackendController@index');
// Route::get('/admin/course', 'CourseController@index');
// Route::get('/admin/course/manage', 'CourseController@managecourse');
// Route::post('/admin/course/store', 'CourseController@coursestore');

Route::get('/admin/room', 'RoomController@index');
Route::get('/admin/room/manage', 'RoomController@manageroom');
Route::get('/admin/registration', 'StudentregController@index');
Route::get('/admin/registration/manage', 'StudentregController@managestudent');
