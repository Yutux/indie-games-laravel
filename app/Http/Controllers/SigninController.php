<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;

class SigninController extends Controller
{
    public function index(){
        return view('Signin');
    }
//Inscription
    public function fill()
    {
        request() ->validate([
            'name' => 'required', 'name',
            'lastname' => 'required', 'lastname',
            'pseudo' => 'required', 'pseudo',
            'email' => 'required', 'email',
            'password' => 'required', 'confirmed', 'nin:8',
            //'password_confirmation' => 'required',
            
        ]);
        
        $users = users::create([
            'name' => request('name'),
            'lastname'=> request('lastname'),
            'pseudo'=> request('pseudo'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),       
        ]);
        
        return redirect('/');
    }
}
