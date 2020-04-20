<?php

namespace App;

use App\Casts\Content;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $casts = [
    'content' => Address::class,
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function authors()
  {
    return $this->hasMany('App\Author');
  }
}
