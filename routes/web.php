<?php
/*
 * @Author: your name
 * @Date: 2018-08-13 14:43:48
 * @LastEditTime: 2022-01-21 19:54:17
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/routes/web.php
 */

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
//welcome page route
Route::group(['middleware'=>['web']], function () {
    Route::get('/', 'Admin\IndexController@index');
});
