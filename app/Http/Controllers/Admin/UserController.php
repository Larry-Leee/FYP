<?php
/*
 * @Author: Li, Hang
 * @Date: 2022-02-20 20:45:52
 * @LastEditors: Li, Hang
 * @FilePath: /finalYearProject/app/Http/Controllers/Admin/UserController.php
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Account;
use Input;
use Auth;
use Validator;
use Redirect;
use Crypt;
use Session;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view of adding a new user
        return view('admin.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1.validation rules
        // $rules = [
        //     'username' => 'required|min:2|max:15',
        //     'password' => 'reuqired|min:6|max:20',
        //     // 'email' => 'email:rfc, dns',
        // ];
        // //2.error messages
        // $msg = [
        //     'username.required' => 'Username is required!',
        //     'username.min' => 'Username must be more than 2 characters!',
        //     'password.required' => 'Password is required!',
        //     'email.rfc' => 'Email is invalid!',
        // ];
        //3. get information and validate
        $input = $request->except('_token');
        $input['password'] = Crypt::encrypt($input['password']);
        dd($input);
        $validator = Validator::make(Input::all(), $rules, $msg); //validate information
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $submit = Account::create(['username' => $input['username'], 'password' => $input['password'],'email' => $input['email'],'lname' => $input['lastname'], 'fname' => $input['firstname']]);
        
        // dd($submit);
        if ($submit) {
            return view('home.index');
        } else {
            return view('admin/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
