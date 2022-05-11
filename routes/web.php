<?php
/*
 * @Author: your name
 * @Date: 2018-08-13 14:43:48
 * @LastEditTime: 2022-05-09 15:40:27
 * @LastEditors: Li, Hang
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/routes/web.php
 */
//welcome page route
Route::group(['middleware'=>['web']], function () {
    Route::get('/', 'Admin\IndexController@index');
});

//group route for login and register
Route::group(['prefix'=>'admin'], function () {
    Route::get('/login', 'Admin\LoginController@login')->name('login');
    // Route::get('/register', 'Admin\RegisterController@register')->name('register');
    Route::any('/homepage', 'Admin\ChartController@pieChart');
    Route::resource('/register', 'Admin\UserController');
    Route::any('/exit', 'Admin\LoginController@exit');
    // Route::resource('/homepage/create', 'Admin\UserController@create');
});
//group route for comments
Route::group(['prefix'=>'admin'], function () {
    Route::get('/comments/index', 'Admin\PostController@index');
    Route::get('/comments/post', 'Admin\PostController@create');
    Route::post('/comments', 'Admin\PostController@store');
    Route::get('/comments/{post}', 'Admin\PostController@show');
});
//Route for navigation bar
Route::group(['prefix'=>'admin'], function () {
    Route::any('/homepage', 'Admin\LoginController@receive')->name('homepage');
    Route::any('/dashboard', 'User\NavigationController@dashboard');
    Route::get('/restauratns-details', 'User\NavigationController@details');
    Route::get('/meal-preview', 'User\NavigationController@meal');
});
