<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Post;
use Auth;
use App\Follow;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password','bio','following_id','followed_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
// テーブルリレーション
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // 自分　が　フォローしている
    public function follows(){
        return $this->belongsToMany('App\User','follows','following_id','followed_id');
    }

    // 自分　を　フォローしている
    public function followed(){
        return $this->belongsToMany('App\User','follows','followed_id','following_id');
    }

    public function id(){
        $my_id=Auth::user()->id;
    }

    // フォローしているかの判定
    // boolで真偽をジャッジ
    public function isFollowing(Int $my_id){
        return (bool) $this->follows()->where('followed_id',$my_id)->first();
}
}
