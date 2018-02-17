<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
      'nama_event','deskripsi','waktu'
    ];

    public function place()
    {
      return $this->belongsTo('App\Models\Place','id','id_tempat');
    }

}
