<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minute = 1;
        $response = new Response('hello world');
        $response->withCookie(cookie('name', 'david', $minute));
        return $response;
    }

    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
    }
}
