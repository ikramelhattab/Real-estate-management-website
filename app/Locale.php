<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    
}


