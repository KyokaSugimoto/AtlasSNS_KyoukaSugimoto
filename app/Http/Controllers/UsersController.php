<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
// ↑userモデルを使う

class UsersController extends Controller
{
    //

    public function profile()
    {
        return view('users.profile');
    }
    public function search()
    {
        $user=User::all();
        return view('users.search',compact('user'));
    }

    public function surf(Request $request)
    {
        $keyword=$request->input('search');
        if(!empty($keyword)){
         $result=User::where('username','LIKE', '%'.$keyword.'%')->get();
        }else{
            $result=User::all();
        }
         $request->session()->put('keyword',$keyword);
        return view('users.search_result',compact('result'));

    }


}
