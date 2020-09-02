<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /**
 * Relationship
 *
 * A user can have many favourites.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
 public function favorites()
 {
 return $this->belongsToMany('App\Locale', 'favorites')->withTimestamps();
 }
   public function favorite_posts()
    {
        return $this->belongsToMany('App\Locale')->withTimestamps();
    }

     public function posts()
    {
        return $this->hasMany('App\Locale');
    }
}