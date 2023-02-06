<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class AccountController extends Controller
{
    public function Account()
    { 
        return view('/Account');
    }

    //la deconnexion
    public function logout()
    {
        auth()->logout();
        
        return redirect('/');
    }

}
