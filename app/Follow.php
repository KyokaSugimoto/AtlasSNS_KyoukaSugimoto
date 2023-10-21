<?php

namespace App;
use App\User;
use App\Post;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
  protected $fillable = [
        'following_id', 'followed_id',
    ];
    //
}
