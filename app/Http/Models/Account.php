<?php
/*
 * @Author: Larry
 * @Date: 2022-01-22 21:35:21
 * @LastEditTime: 2022-01-22 21:45:21
 * @LastEditors: Please set LastEditors
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/app/Http/Models/Account.php
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = ['username', 'email', 'password'];
}
