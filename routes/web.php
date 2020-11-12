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
Route::get('/trang-chu', 'App\Http\Controllers\Client\HomeController@index')->name('home');
//Ôn Thi 
// Route::get('{slug}.html','App\Http\Controllers\Client\CourseController@getKET');

//Course
Route::get('/on-thi', 'App\Http\Controllers\Client\CourseController@list')->name('courseList');
// Route::get('/on-thi/{slug}', 'App\Http\Controllers\Client\CourseController@getOnthicc')->name('onthiccList');
Route::get('/on-thi/{slug}/{slug2}', 'App\Http\Controllers\Client\CourseController@getOnthicc')->name('onthiccList');


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

        Route::group(['prefix' => 'test'], function () {

            Route::get('/', 'TestController@index')->name('adminTest');

            Route::get('/add', 'TestController@getAdd')->name('adminTestGetAdd');

            Route::post('/add', 'TestController@postAdd')->name('adminTestPostAdd');

            Route::get('/edit/{id}', 'TestController@getEdit')
                ->name('adminTestGetEdit')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', 'TestController@postEdit')
                ->name('adminTestPostEdit')
                ->where(['id' => '[0-9]+']);

            Route::post('/delete/{id}', 'TestController@delete')
                ->name('adminTestDelete')
                ->where(['id' => '[0-9]+']);
        });

        Route::group(['prefix' => 'test-category'], function () {

            Route::get('/', 'TestCategoryController@index')->name('adminTestCategory');

            Route::get('/add', 'TestCategoryController@getAdd')->name('adminTestCategoryGetAdd');

            Route::post('/add', 'TestCategoryController@postAdd')->name('adminTestCategoryPostAdd');

            Route::get('/edit/{id}', 'TestCategoryController@getEdit')
                ->name('adminTestCategoryGetEdit')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', 'TestCategoryController@postEdit')
                ->name('adminTestCategoryPostEdit')
                ->where(['id' => '[0-9]+']);

            Route::post('/delete/{id}', 'TestCategoryController@delete')
                ->name('adminTestCategoryDelete')
                ->where(['id' => '[0-9]+']);
        });

        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', 'BannerController@getBanner')->name('adminBanner');

            Route::get('add', 'BannerController@getAddBanner')
                ->name('adminBannerGetAdd');
            Route::post('add', 'BannerController@postAddBanner')
                ->name('adminBannerPostAdd');

            Route::get('edit/{id}', 'BannerController@getEditBanner')
                ->name('adminBannerGetEdit')
                ->where(['id' => '[0-9]+']);

            Route::post('edit/{id}', 'BannerController@postEditBanner')
                ->name('adminBannerPostEdit')
                ->where(['id' => '[0-9]+']);

            Route::get('delete/{id}', 'BannerController@getDeleteBanner')
                ->name('adminBannerDelete')
                ->where(['id' => '[0-9]+']);
        });
        Route::group(['prefix' => 'postcats'], function () {
            Route::get('/', 'PostCatsController@getPostCats')->name('adminThePostCats');
    
            Route::get('add', 'PostCatsController@getAddPostCats')
                ->name('adminThePostGetAdd');
            Route::post('add', 'PostCatsController@postAddPostCats')
                ->name('adminThePostPostAdd');
    
            Route::get('edit/{id}', 'PostCatsController@getEditPostCats')
                ->name('adminThePostGetEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::post('edit/{id}', 'PostCatsController@postEditPostCats')
                ->name('adminThePostPostEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::get('delete/{id}', 'PostCatsController@getDeletePostCats')
                ->name('adminThePostDelete')
                ->where(['id' => '[0-9]+']);
        });
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', 'PostsController@getPosts')->name('adminPost');
    
            Route::get('add', 'PostsController@getAddPosts')
                ->name('adminPostsGetAdd');
            Route::post('add', 'PostsController@postAddPosts')
                ->name('adminPostsPostAdd');
    
            Route::get('edit/{id}', 'PostsController@getEditPosts')
                ->name('adminPostsGetEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::post('edit/{id}', 'PostsController@postEditPosts')
                ->name('adminPostsPostEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::get('delete/{id}', 'PostsController@getDeletePosts')
                ->name('adminPostsDelete')
                ->where(['id' => '[0-9]+']);
        });

        Route::group(['prefix' => 'news'], function () {

            Route::get('/', 'NewController@index')->name('adminNew');
    
            Route::get('/add', 'NewController@getAdd')->name('adminNewGetAdd');
    
            Route::post('/add', 'NewController@postAdd')->name('adminNewPostAdd');
    
            Route::get('/edit', 'NewController@getEdit')
                ->name('adminNewGetEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::post('/edit', 'NewController@putEdit')
                ->name('adminNewPutEdit')
                ->where(['id' => '[0-9]+']);
    
            Route::get('/delete/{id}', 'NewController@delete')
                ->name('adminNewDelete')
                ->where(['id' => '[0-9]+']);
        });
    }); 
});

    Route::group(['prefix' => 'news'], function () {

        Route::get('/', 'BlogsController@index')->name('adminNew');

        Route::get('/add', 'BlogsController@getAdd')->name('adminNewGetAdd');

        Route::post('/add', 'BlogsController@postAdd')->name('adminNewPostAdd');

        Route::get('/edit/{id}', 'BlogsController@getEdit')
            ->name('adminNewGetEdit')
            ->where(['id' => '[0-9]+']);

        Route::post('/edit', 'BlogsController@putEdit')
            ->name('adminNewPutEdit')
            ->where(['id' => '[0-9]+']);

        Route::get('/delete/{id}', 'BlogsController@delete')
            ->name('adminNewDelete')
            ->where(['id' => '[0-9]+']);
    });

    Route::group(['prefix' => 'make-test'], function () {

        Route::get('/', 'MakeTestController@index')->name('adminMakeTest');

        Route::get('/make-test', 'MakeTestController@create')->name('adminMakeTestGetAdd');

        Route::post('/add', 'MakeTestController@postAdd')->name('adminMakeTestPostAdd');

    });

