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

Route::group(['middleware'=>'web'],function(){

    Route::get('/register',['as'=>'register','uses'=>'Admins\RegisterController@showRegisterForm']);
    Route::post('/register/validateName','Admins\RegisterController@validateName');
    Route::post('/postForm','Admins\RegisterController@postForm')->name('regForm');
    //Route::get('/captcha','Admins\CaptchController@getCaptcha')->name('captcha');
    Route::group(['middleware'=>'auth:web'],function(){
        Route::get('/show','Admins\GeneralInfoController@index')->name('show');
        Route::get('/test','Admins\GeneralInfoController@dbTest');
    });
});
