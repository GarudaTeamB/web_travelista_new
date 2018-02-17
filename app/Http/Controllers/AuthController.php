<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{

    public function register(Request $request)
    {

        $this->validate($request,[
    		'username' 	   => 'required|unique:users',
    		'email' 	     => 'required|unique:users',
    		'password' 	   => 'required',
        'nomor_hp'     => 'required',
        'tgl_lahir'    => 'required',
        'tempat_lahir' => 'required'
    	]);

    	return User::create([
    		'username' 	    => $request->json('username'),
    		'email' 	      => $request->json('email'),
    		'password' 	    => bcrypt($request->json('password')),
        'nomor_hp'      => $request->json('nomor_hp'),
        'tgl_lahir'     => $request->json('tgl_lahir'),
        'tempat_lahir'  => $request->json('tempat_lahir')
    	]);



    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'nomor_hp' => 'required',
            'password' => 'required'
        ]);

                $credentials = $request->only('nomor_hp', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Data yang anda masukkan tidak valid'], 401);
            }
            } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'Tidak bisa membuat token'], 500);
        }


        // all good so return the token
        return response()->json([
            'user_id' => $request->user()->id,
            'username yang login saat ini' => $request->user()->username,
            'Nomor Handphone' => $request->user()->nomor_hp,
            'E-mail'  => $request->user()->email,
            'token' => $token
        ]);


    }


}
