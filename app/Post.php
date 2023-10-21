<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{




    protected $fillable = [
        'user_id', 'post',
    ];
// テーブルリレーション
    public function user(){
        return $this->belongsTo(User::class);
    }
    //     public function follows(){
    //     return $this->belongsToMany('App\User','follows','user_id','id');
    // }

    //

}
