<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Auth;
use App\User;
use App\Post;
use App\Follow;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts/login',function($view)  {
            // フォロー数を定義した変数　follow を全ビューファイルで共有
            $view->with('follow',Follow::where('following_id',Auth::user()->id)->get());
            // フォロー数を定義した変数　followed を全ビューファイルで共有
            $view->with('followed',Follow::where('followed_id',Auth::user()->id)->get());
        });
        //
    }
}
