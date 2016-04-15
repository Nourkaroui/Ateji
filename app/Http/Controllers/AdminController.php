<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('auth.login-admin');
    }

    public function postlogin(Request $request ){

        //dd($request->all());
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:50',
            'password' => 'required|min:3|max:50',
        ]);
        if($validator->fails()){
            return redirect('/admin/login')
                ->withErrors($validator)
                ->withInput();
        }
        $credentials = ['email'=>$request->get('email'), 'password'=>$request->get('password')];
        if(auth()->guard('admin')->attempt($credentials) ){
            return redirect('/admin');
        }else{
            return redirect('/admin/login')
                ->withErrors(['errors'=> 'login invalable'])
                ->withInput();
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }


}
