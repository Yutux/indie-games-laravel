<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('IndieGames');
});

Route::get('/Login', 'App\Http\Controllers\LoginController@index');
Route::post('/Login', 'App\Http\Controllers\LoginController@fill');

Route::get('/Signin', 'App\Http\Controllers\SigninController@index');
Route::post('/Signin', 'App\Http\Controllers\SigninController@fill');

Route::get('/logout', 'App\Http\Controllers\AccountController@logout');

//Route::get('/IndieGames', 'App\Http\Controllers\HomeController@index');


Route::get('/Account', 'App\Http\Controllers\AccountController@Account');

Route::get('/Reset', 'App\Http\Controllers\ResetController@index');

Route::get('cart/addToCart/{id}', ['uses'=>'App\Http\Controllers\ShopController@addToCartArticle', 'as'=>'AddToCartArticle']);
Route::get('cart', 'App\Http\Controllers\ShopController@showCart');

Route::get('/Shop', 'App\Http\Controllers\ShopController@page');
Route::get('/product/{prod}', 'App\Http\Controllers\ShopController@article');

Route::get('/Admin', 'App\Http\Controllers\AdminController@index');
Route::post('/Admin', 'App\Http\Controllers\AdminController@add');

Route::get('/Delete', 'App\Http\Controllers\AdminController@list');
Route::get('/Delete/{id}', 'App\Http\Controllers\AdminController@Delete');



// Route::get('/cookie/set', 'App\Http\Controllers\CookieController@setCookie');
// Route::get('/cookie/get', 'App\Http\Controllers\CookieController@getCookie');
