<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    //
    protected $table = 'meal';
    protected $primaryKey = 'm_id';
    public $timestamp = false;
    protected $fillable = ['m_name', 'm_price', 'm_ingridient', 'm_allergies', 'style'];
}
