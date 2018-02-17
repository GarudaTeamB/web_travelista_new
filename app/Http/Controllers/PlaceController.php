<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function tambah_tempat(Request $request)
    {
        $this->validate($request,[
          'nama_tempat'  => 'required',
          'gambar' 	     => 'required',
          'deskripsi' 	 => 'required',
          'provinsi'     => 'required',
          'kabupaten'    => 'required',
          'kecamatan'    => 'required'
        ]);

        $tempat = $request->user()->places()->create([
      		'nama_tempat' 	=>   $request->json('nama_tempat'),
      		'gambar' 	      =>   $request->json('gambar'),
      		'deskripsi' 	  =>   $request->json('deskripsi'),
          'provinsi' 	    =>   $request->json('provinsi'),
      		'kabupaten' 	  =>   $request->json('kabupaten'),
      		'kecamatan' 	  =>   $request->json('kecamatan'),
          'tags'          =>   $request->json('tags')
      	]);

      	return $tempat;
    }

    public function index_tempat()
    {
      return Place::all();
    }
}
