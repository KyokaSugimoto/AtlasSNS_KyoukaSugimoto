<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class Formcontoroller extends Controller
{
    public function register(Request $request){
        $validator=Validator::make($request->all(),[
             'username'=>['required','min:2','max:12'],
                'mail'=>['required','min:5','max:50','unique','email'],
                'password'=>['required','alpha_num','between:8,20','confirmed'],
                'password_confirmation'=>['required','alpha_num','between:8,20'],
        ]);
        if($validator->fails()){
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();

        }else{
            return view('sample.index', ['msg' => 'OK']);
        }
    }
    //
}
