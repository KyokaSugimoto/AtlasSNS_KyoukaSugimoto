<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Auth;

class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
          $posts=Post::get();
        return view('posts.index',['post'=>$posts]);
    }

    public function post(Request $request){
        $newpost=$request->input('tweet');
         if(!empty($newpost)){
        Post::create ([
            'post'=>$newpost,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect('/top');
    }

    }
}
