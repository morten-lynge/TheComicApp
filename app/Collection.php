<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function comics()
    {
        return $this->hasMany('App\Comic', 'title', 'name');
    }

}
