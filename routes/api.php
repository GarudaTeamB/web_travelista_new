<?php

Route::group(['middleware' => ['api']], function(){


	Route::post('/register', 'AuthController@register');
	Route::post('/login', 'AuthController@login');
	//Route::get('/tutorial/{id}','TutorialController@tampilkan');

	Route::group(['middleware' => ['jwt.auth']], function(){
		Route::get('/profile', 'UserController@show');
		Route::get('/list-tempat', 'PlaceController@index_tempat');
		Route::post('/tambah-tempat', 'PlaceController@tambah_tempat');
		//Route::put('/tutorial/{id}', 'TutorialController@update');
		//Route::delete('/tutorial/{id}', 'TutorialController@hapus');

		//komentar
		//Route::post('/comment/{id_tut}','CommentController@simpan');

	});


});
