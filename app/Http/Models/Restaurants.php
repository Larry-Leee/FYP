<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-03-07 18:26:53
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Models/Restaurants.php
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    //
    protected $table = 'restaurants';
    protected $primaryKey = 'r_id';
    public $timestamp = false;
    protected $fillable = ['r_name', 'r_type', 'r_location', 'r_postcode', 'r_contacts'];
}
