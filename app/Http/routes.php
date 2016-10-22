<?php


Route::get('/', 'roomController@index');


Route::get('/rooms','roomController@room');
Route::get('/room-detail', function () {
   return view('pages.room-detail');
});


Route::post('/login','userController@login');
Route::post('/register','userController@getRegister');
Route::get('welcome',function(){
	return view('welcome');
});










