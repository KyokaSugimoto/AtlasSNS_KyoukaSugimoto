<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
// ↑userモデルを使う
use Auth;
use App\Follow;

class UsersController extends Controller
{
    //

    public function profile()
    {
         $user_info=Auth::user();

        return view('users.profile',compact('user_info'));
    }

    // プロフィール更新
    public function editPro(Request $request){
        $request->validate([
            'username'=>'required|min:2|max:12',
            'mail'=>'required|min:5|max:40|unique:users|email',
            'password'=>'required|alpha_num|min:8|max:20|confirmed',
            'password-confirmation'=>'required|alpha_num|min:8|max:20',
            'bio'=>'max:150',
        ]);
        $id=$request->input('id');
        $username=$request->input('username');
        $mail=$request->input('mail');
        $password=$request->input('password');
        $bio=$request->input('bio');

        User::where('id',$id)->update([
            'username'=>$username,
            'mail'=>$mail,
            'password'=>$password,
            'bio'=>$bio,
        ]);
        return redirect('/top');
    }


    // ユーザー検索
    public function search()
    {
        User::all();
        $my_id=Auth::id();
        $following_id=Follow::where('following_id',Auth::id())->get('followed_id');
        $followed_id=Follow::where('followed_id',Auth::id())->get('following_id');
        $user=User::where('id','<>',$my_id)->get();
        return view('users.search',compact('user','following_id'));
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
