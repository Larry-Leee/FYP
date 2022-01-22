<?php
// /*
//  * @Author: your name
//  * @Date: 2022-01-22 15:48:39
//  * @LastEditTime: 2022-01-22 15:50:39
//  * @LastEditors: your name
//  * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
//  * @FilePath: /finalYearProject/app/Http/Controllers/Admin/LoginController.php
//  */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('welcome.login');
    }
}
