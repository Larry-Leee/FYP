<?php
/*
 * @Author: your name
 * @Date: 2022-01-22 15:48:39
 * @LastEditTime: 2022-02-20 03:02:53
 * @LastEditors: Li, Hang
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: /finalYearProject/app/Http/Controllers/Admin/LoginController.php
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Account;
use Input;
use Auth;
use Validator;
use Redirect;
use Captcha;
use Crypt;
use Session;
use DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    //form validation
    public function receive(Request $request)
    {
        //validation rules
        $rules = [
            'code' => 'required|captcha',
            'username' => 'required|min:2|max:15',
            'password' => 'required|min:6|max:20',
        ];
        //error messages
        $msg = [
            'username.required' => 'Username is required!',
            'username.min' => 'Username must be more than 2 characters!',
            'password.required' => 'Password is required!',
            'code.required' => 'Verifycode is empty!',
            'code.captcha' => "Verifycode is wrong!",
        ];
        //obtain input information
        $input = Input::all(); //receive information users posted
        $validator = Validator::make(Input::all(), $rules, $msg); //validate information
        $user = Account::where('u_username', $input['username'])->first();

        // if ($validator->fails()) {
        //     return Redirect::back()->withErrors($validator);
        // }
        // if ($user->username != $input['username'] || Crypt::decrypt($user->password) != $input['password']) {
        //     return redirect('admin/login')->with('errors', 'Username or Password is Incorrect!');
        // } else {
        return view('home.index');
        // }
    }

    /**
     * excute 'Insert' operation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //return register page
        return  view('admin.register');
    }
    public function store(Request $request)
    {
        //1.validation rules
        $r_rules = [
            'username' => 'required|min:2|max:15',
            'password' => 'reuqired|min:6|max:20',
            // 'email' => 'email:rfc, dns',
        ];
        //2.error messages
        $r_msg = [
            'username.required' => 'Username is required!',
            'username.min' => 'Username must be more than 2 characters!',
            'password.required' => 'Password is required!',
            'email.rfc' => 'Email is invalid!',
        ];
        //3. get information and validate
        $input = $request->except('_token');
        $input['password'] = Crypt::encrypt($input['password']);
        // dd($input);
        
        $submit = Account::create(['username' => $input['username'], 'password' => $input['password'],'email' => $input['email'],'lname' => $input['lastname'], 'fname' => $input['firstname']]);
        
        // dd($submit);
        if ($submit) {
            return view('home.index');
        } else {
            return view('admin/login');
        }
    }
    //system logout
    public function exit()
    {
        session(['users'=>null]);
        return redirect('admin/login');
    }
}
