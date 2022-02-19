<?php
/*
 * @Author: Larry
 * @Date: 2022-01-21 19:26:52
 * @LastEditTime: 2022-02-19 18:05:28
 * @LastEditors: Li, Hang
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/app/Http/Controllers/Admin/IndexController.php
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //this is for the welcome page
    public function index()
    {
        return view('admin.index');
    }
}
