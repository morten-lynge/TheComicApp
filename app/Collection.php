<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Collection extends Model
{
    public function comics()
    {
        return $this->hasMany('App\Comic', 'title', 'name');
    }

    public function usercollectionExist($user_id)
    {
        return $this->hasOne('App\Usercollection', 'collection_id', 'id')->where('user_id', $user_id)->exists();
    }

    public function getUsercollection($user_id)
    {
        return $this->hasOne('App\Usercollection', 'collection_id', 'id')->where('user_id', $user_id);
    }

    public function getSubcollections()
    {
        $sub_collections = DB::table('collections')->where('parent_collection', '=', $this->name)->get();
        //foreach ($sub_collections as $collection) {
        //    echo $collection->name;
        //}
        return $sub_collections;
        ;
    }
}
