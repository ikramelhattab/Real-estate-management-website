<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    protected $fillable = [
        'id_user', 'id_locale',
    ];
   public function up()
 {
 Schema::create('favorites', function(Blueprint $table)
 {
 $table->increments('id');
 $table->primary(['id_user', 'id_locale']);
 $table->integer('id_user')->index();
 $table->integer('id_locale')->index();
 $table->timestamps();
 });
 }

 protected $guarded=[];

    public function likable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

/**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down()
 {
 Schema::drop('favorites');
 }
}
