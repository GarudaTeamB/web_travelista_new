<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    protected $fillable = ['nama_tempat','gambar','deskripsi','provinsi','kabupaten','kecamatan','tags'];

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

}
