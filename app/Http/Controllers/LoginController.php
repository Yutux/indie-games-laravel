<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\users;

class LoginController extends Controller
{
    public function index(){
        return view('Login');
    }

    //log in
    public function fill()
    {
        request()->validate([
            'email'=>'required', 'email',
            'password'=>'required'
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password'=> request('password'),
        ]);

        if ($result){
            return redirect('/');  
        };

        return back()->withInput()->withErrors([
            'email'=> 'your email or password are not right',
        ]);
    }
}
