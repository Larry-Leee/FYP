<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-03-26 23:00:26
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Requests/PostRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment'=>['required', 'string', 'mim:5'],
        ];
    }
}
