<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-03-26 21:47:02
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Models/Post.php
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $primaryKey = 'p_id';
    public $timestamp = false;
    protected $fillable = ['comment', 'created_at', 'updated_at'];
}
