<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function index(){
        return view('Reset');
    }
}
