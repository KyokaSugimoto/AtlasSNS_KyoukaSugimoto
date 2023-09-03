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
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }

    public function followCount(){
        $follow=Follow::where('followed_id',Auth::user()->id)->get();
        $followed=Follow::where('following_id',Auth::user()->id)->get();
        return view('layouts.login',compact('follow','followed'));
    }

}
