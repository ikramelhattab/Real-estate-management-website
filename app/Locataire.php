<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    protected $fillable = [
        'id',
    ];
  public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
