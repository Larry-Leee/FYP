<?php
/*
 * @Author: your name
 * @Date: 2018-08-13 14:43:48
 * @LastEditTime: 2022-02-05 12:06:28
 * @LastEditors: Li, Hang
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/routes/web.php
 */
//welcome page route
Route::group(['middleware'=>['web']], function () {
    Route::get('/', 'Admin\IndexController@index');
});

//group route for login
Route::group(['prefix'=>'admin'], function () {
    Route::get('/login', 'Admin\LoginController@login')->name('login');
    Route::any('/homepage', 'Admin\LoginController@receive')->name('homepage');
});
