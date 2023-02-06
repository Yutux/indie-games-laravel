<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\article;
use App\Models\cart;

use Illuminate\Support\Facades\Session;



use DB;

class ShopController extends Controller
{
    /*public function index(){
        return view('Shop');
    }*/

    public function page()
    {

        $Article =DB::table('articles')->get();
        
        return view('Shop')->with('Article', $Article);
        
    }

    public function article($prod)
    {   

        $Product=article::where('title', $prod)->first();
        return view('product')->withprod($Product);  
          
    }

    public function showCart()
    {

        if(!Session::has('cart')){
            return view('cart');
        }

        $odlCart = Session::get('cart');
        $cart = new Cart($odlCart);
        return view('cart', ['articles' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        /*$cart = Session::get('cart');

        if($cart != null){
            dump($cart);
            return view('cart', ['cartItems'=> $cart]);
        }else{
            //echo 'cart empty';
            return redirect('Shop');
        }*/

    }


    public function addToCartArticle(Request $request, $id)
    {

        $article = article::find($id);
        $odlCart = Session::has('cart') ? Session::get('cart') : null;

        
        $cart = new Cart($odlCart);

        $cart->additem($article, $article->id);

        $request->session()->put('cart', $cart);
        /*$article = Article::find($id);
        $cart->addItem($id, $article);
        $request->session()->put('cart', $cart);*/

        //dd($request->session()->get('cart'));

        return redirect('Shop');
    }

    
}
