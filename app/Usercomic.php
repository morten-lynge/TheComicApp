<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usercomic extends Model
{
    public function getComic()
    {
        return $this->hasOne('App\Comic', 14, 'comic_id');

    }
}
