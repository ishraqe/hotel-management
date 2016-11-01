<?php


Route::get('/',[
	'uses' => 'roomController@index',
	'as'	=> 'index'
]);


Route::get('/rooms','roomController@room');

Route::get('/room-detail', function () {
   return view('pages.room-detail');
});


Route::post('/login','userController@login');
Route::post('/register','userController@getRegister');


Route::get('welcome',[
	'uses' => 'roomController@welcome',
	'as'	=> 'welcome',
	'middleware' => 'auth'

]);




// Admin Route

Route::get('/dashboard','adminController@getDashboard');	
Route::get('/admin/login','adminController@getLogin');
Route::post('/admin/login','adminController@postLogin');
Route::get('/admin/register','adminController@getRegister');
Route::post('/admin/register','adminController@postRegister');












