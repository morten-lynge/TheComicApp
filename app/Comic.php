<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Comic extends Model
{
    public function userHasIt($user_id)
    {
        return $this->hasMany('App\Usercomic', 'comic_id', 'id')->where('user_id', $user_id)->exists();
    }

    public function getCollectionID()
    {
        return $this->hasOne('App\Collection', 'name', 'serie');
        

    }
}
