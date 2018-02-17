<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentars';
    protected $fillable = ['komentar'];

    public function user()
    {
      return $this->belongsTo('App\Models\User','id','user_id');
    }

}
