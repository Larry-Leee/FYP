<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-03-07 00:10:20
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Controllers/Admin/ChartController.php
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Restaurants;
use DB;

class ChartController extends Controller
{
    //pie chart for restaurant type
    public function pieChart()
    {
        $result = DB::select(DB::raw("SELECT COUNT(*) as total_type, r_type from restaurants group by r_type "));
        $data = "";
        foreach ($result as $list) {
            $data.="['".$list->r_type."', ".$list->total_type."],";
        }
        // echo $data;
        return view('home.index', compact('data'));
    }
}
