<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function simpan(Request $request, $id)
    {
    	$this->validate($request,['body'	=> 'required',]);

    	$comment = $request->user()->comments()->create([
    		'body' 	=> $request->json('body'),
    		'tutorial_id' => $id
    	]);

    	return $comment;
    }
}
