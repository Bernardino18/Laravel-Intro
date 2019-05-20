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

Route::get('/', 'HomeController@index');
Route::get('/Student', 'StudentController@index');
Route::get('/Building', 'BuildingController@index');
Route::get('/Contact', 'ContactController@index');
Route::get('/Course', 'CourseController@index');

//posts
Route::post('/Contact', 'ContactController@post');
Route::post('/Student', 'StudentController@post');