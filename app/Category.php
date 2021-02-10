<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function locales()
    {
        return $this->hasMany(Local::class);
    }

}
