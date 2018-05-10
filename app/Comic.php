<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Comic extends Model
{
    public function userHasIt($user_id)
    {
        return $this->hasMany('App\Usercomics', 'comic_id', 'id')->where('user_id', $user_id)->exists();
    }
}
