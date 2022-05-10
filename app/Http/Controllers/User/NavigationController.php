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
use App\Http\Models\Restaurants;
use DB;

class NavigationController extends Controller
{
    //dashboard controller
    public function dashboard()
    {
        return view('home.index');
    }
    //restaurants details controller
    public function details()
    {
        $resdata = Restaurants::paginate();

        // dd($resdata);
        return view('home.detail', compact('resdata'));
    }
}
