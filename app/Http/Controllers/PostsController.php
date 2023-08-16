<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Auth;

class PostsController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
          $posts=Post::get();
          $user_id=Post::get('user_id');
        return view('posts.index',['post'=>$posts]);
    }

    public function post(Request $request){
        $newpost=$request->input('newpost');
        Post::create ([
            'post'=>$newpost,
        ]);
        return back();

    }
}
