<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Comic extends Model
{
    public function usercomic()
    {
        return $this->hasOne('App\Usercomic', 'comic_id', 'id');
    }
    
    public function userHasIt($user_id)
    {
        return $this->hasMany('App\Usercomic', 'comic_id', 'id')->where('user_id', $user_id)->where('status', '=', 1)->exists();
    }

    public function userWantsIt($user_id)
    {
        return $this->hasMany('App\Usercomic', 'comic_id', 'id')->where('user_id', $user_id)->where('wanted', '!=', 0)->exists();
    }

    public function existingUserComicRecord($user_id)
    {
        return $this->hasMany('App\Usercomic', 'comic_id', 'id')->where('user_id', $user_id)->exists();
    }

    public function getCollectionID()
    {
        return $this->hasOne('App\Collection', 'name', 'serie');
        

    }



    
}
