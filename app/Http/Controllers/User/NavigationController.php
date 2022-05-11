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
use App\Http\Models\Meals;
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
    //meal preview controller
    public function meal()
    {
        $mealdata = DB::select(DB::raw("SELECT restaurants.r_name, meal.m_name, meal.m_price, meal.m_ingredient, meal.m_allergies, meal.style  FROM meal LEFT JOIN restaurants ON restaurants.r_id = meal.r_id"));

        // dd($mealdata);
        return view('home.preview', compact('mealdata'));
    }
}
