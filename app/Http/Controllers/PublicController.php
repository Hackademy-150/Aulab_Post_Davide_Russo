<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function __construct(){
    $this->middleware('auth')->except('homepage');
   }
   
   
    function homepage(){
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
    return view ('welcome' ,compact('articles'));
}

public function careers(){
    return view ('careers');
}
public function careersSubmit(Request $request){
    $request->validate([
        'role' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    dd($request->all());

}
}