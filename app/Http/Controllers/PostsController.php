<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Follow;
use Auth;

class PostsController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // ポストテーブルのレコード取得
        $post=Post::get();
        // フォーしている人のIDを取得
        $following_id=Auth::user()->follows()->pluck('followed_id');
        // dd();
        $id=Auth::user()->id;
          $posts=Post::with('user')->whereIn('user_id',$following_id)->orWhere('user_id',$id)->orderBy('created_at','desc')->get();
        //   $posts=Post::orderBy('created_at','desc')->get();
        return view('posts.index',compact('posts'));
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


    public function update(Request $request){
        $update_id=$request->input('update_id');
        $new_post=$request->input('new-post');
        Post::where('id',$update_id)->update([
            'post'=>$new_post,
        ]);
        return redirect('/top');

    }


    public function delete($id){
      $delete_post=Post::find($id);
      $delete_post->delete();
        return redirect('/top');
    }
}
