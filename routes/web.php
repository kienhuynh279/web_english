<?php

use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/', 'App\Http\Controllers\Client\HomeController@index')->name('home');

//Course
Route::get('/khoa-hoc','App\Http\Controllers\Client\CourseController@list')->name('courseList');
Route::get('/khoa-hoc/danh-muc','App\Http\Controllers\Client\CourseController@index')->name('course');
Route::get('/khoa-hoc/danh-muc/chi-tiet','App\Http\Controllers\Client\CourseController@detail')->name('courseDetail');

//Contact
Route::get('/lien-he','App\Http\Controllers\Client\ContactController@index')->name('contact');

//News
Route::get('/tin-tuc','App\Http\Controllers\Client\NewsController@index')->name('news');
Route::get('/tin-tuc/chi-tiet','App\Http\Controllers\Client\NewsController@detail')->name('newsDetail');

//login
Route::get('/dang-nhap','App\Http\Controllers\Client\LoginController@index')->name('login');
