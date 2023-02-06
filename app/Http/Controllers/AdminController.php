<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;


class AdminController extends Controller
{
    public function index(){
        return view('Admin');
    }


    public function add(Request $request)
    {
       
        

        $article = new article();

        $article->title = $request->get('title');
        $article->éditor = $request->get('éditor');
        $article->price = $request->get('price');
        $article->description = $request->get('description');
        
        
        $this->validate($request, ['picture'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
        $Picture = $request->file('picture');
        $new_name = rand() . '.' . $Picture->getClientOriginalExtension();
        $Picture->move(public_path("imgupload"), $new_name);
       
        $article->Picture = $new_name;
        $article->save();
        return redirect('Shop');
    }

    public function list(){
        $data=article::all();
        return view('Delete')->with('data', $data);
    }

    public function Delete($id)
    {
        $data=article::find($id);
        $data->delete();
        return redirect('Delete');
    }

}
