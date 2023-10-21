<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Auth;
use App\Follow;

class FollowsController extends Controller
{
    //


    public function followList(){
        $following_id=Follow::where('following_id',Auth::user()->id)->get('followed_id');
        $following_post=Post::with('user')->whereIn('user_id',$following_id)->orderBy('created_at','desc')->get();
        return view('follows.followList',compact('following_post'));
    }
    public function followerList(){
        $followed_id=Follow::where('followed_id',Auth::user()->id)->orderBy('created_at','desc')->get('following_id');
        $followed_post=Post::with('user')->whereIn('user_id',$followed_id)->get();
        return view('follows.followerList',compact('followed_post'));
    }

    public function followCount(){
        $follow=Follow::where('following_id',Auth::user()->id)->get();
        $followed=Follow::where('followed_id',Auth::user()->id)->get();
        return view('layouts.login',compact('follow','followed'));
    }

    // フォローをする機能　詰んでる
    public function newFollow($id){
        // dd($id);
        $me=auth()->user();
        $is_following=$me->isFollowing($id);
        if(!$is_following){
            $my_id=Auth::user()->id;
            $new_follow=$id;

             Follow::create([
            'following_id'=>$my_id,
            'followed_id'=>$new_follow,
        ]);
        return redirect('/search');
        }
    }

    // フォロー解除
    public function stopFollow($id){
        $me=auth()->user();
        $is_following=$me->isFollowing($id);
        if($is_following){
        $my_id=Auth::user()->id;
        $delete=Follow::where('following_id',$my_id)->where('followed_id',$id)->delete();
         return redirect('/search');
        }
    }
}
