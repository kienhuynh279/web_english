<?php

use Illuminate\Support\Facades\Artisan;
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
Route::get('/khoa-hoc', 'App\Http\Controllers\Client\CourseController@list')->name('courseList');
Route::get('/khoa-hoc/danh-muc', 'App\Http\Controllers\Client\CourseController@index')->name('course');
Route::get('/khoa-hoc/danh-muc/chi-tiet', 'App\Http\Controllers\Client\CourseController@detail')->name('courseDetail');

//Contact
Route::get('/lien-he', 'App\Http\Controllers\Client\ContactController@index')->name('contact');

//News
Route::get('/tin-tuc', 'App\Http\Controllers\Client\NewsController@index')->name('news');
Route::get('/tin-tuc/chi-tiet', 'App\Http\Controllers\Client\NewsController@detail')->name('newsDetail');

//test
Route::get('/test', 'App\Http\Controllers\client\ExamController@index')->name('test');
//login
Route::get('/dang-nhap', 'App\Http\Controllers\Client\LoginController@index')->name('login');

//Register
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'register'], function () {
        Route::get('/', 'RegisterController@index')->name('registerView');
        Route::post('/', 'RegisterController@register')->name('register');
    });
});

//Admin
Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin')->name('login');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::get('logout', 'HomeController@getLogout')->name('logout');

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut', 'middleware' => 'App\Http\Middleware\RequireAuth'], function () {
        Route::get('/', 'HomeController@getHome');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@getUser');

            Route::get('add', 'UserController@getAddUser');
            Route::post('add', 'UserController@postAddUser');

            Route::get('edit/{id}', 'UserController@getEditUser');
            Route::post('edit/{id}', 'UserController@postEditUser');

            Route::get('delete/{id}', 'UserController@getDeleteUser');
        });

        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', 'BannerController@getBanner');

            Route::get('add', 'BannerController@getAddBanner');
            Route::post('add', 'BannerController@postAddBanner');

            Route::get('edit/{id}', 'BannerController@getEditBanner');
            Route::post('edit/{id}', 'BannerController@postEditBanner');

            Route::get('delete/{id}', 'BannerController@getDeleteBanner');
        });
    });

    Route::group(['prefix' => 'news'], function () {

        Route::get('/', 'NewController@index')->name('adminNew');

        Route::get('/add', 'NewController@getAdd')->name('adminNewGetAdd');

        Route::post('/add', 'NewController@postAdd')->name('adminNewPostAdd');

        Route::get('/edit/{id}', 'NewController@getEdit')
            ->name('adminNewGetEdit')
            ->where(['id' => '[0-9]+']);

        Route::post('/edit/{id}', 'NewController@putEdit')
            ->name('adminNewPutEdit')
            ->where(['id' => '[0-9]+']);

        Route::get('/delete/{id}', 'NewController@delete')
            ->name('adminNewDelete')
            ->where(['id' => '[0-9]+']);
    });
});