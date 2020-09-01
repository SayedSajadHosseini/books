<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function collections()
    {
        return $this->belongsToMany('App\Collection')->withTimestamps();
    }
}
