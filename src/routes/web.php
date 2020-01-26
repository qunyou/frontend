<?php
Route::namespace('Onepoint\Frontend\Controllers')->middleware(['web'])->group(function () {

    // 註冊
    Route::get('register', 'RegisterController@index');

    // 登入
    Route::get('login', 'StudentController@login');
    Route::post('login', 'StudentController@postLogin');

    // 登入檢查
    Route::middleware(['auth.guard:student'])->group(function () {
        
        // 學生
        Route::get('profile', 'StudentController@profile');
        Route::put('profile', 'StudentController@putProfile');
    });

    // 首頁
    Route::get('/', 'HomeController@redirect');
    Route::get('index', 'HomeController@index')->name('home');
});