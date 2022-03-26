<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-03-26 19:41:19
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Controllers/Admin/PostController.php
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //index method
    public function index()
    {
        return view('home.post');
    }
}
