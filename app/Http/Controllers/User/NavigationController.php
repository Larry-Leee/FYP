<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-05-09 15:22:30
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Controllers/User/NavigationController.php
 */

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavigationController extends Controller
{
    //dashboard controller
    public function dashboard()
    {
        return view('home.index');
    }
}
