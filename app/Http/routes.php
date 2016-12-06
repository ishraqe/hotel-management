<?php

Route::get('/',[
		'uses' => 'roomController@index',
		'as'	=> 'index',
		'middleware' => 'web'
		
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

Route::get('/logout', 'userController@logout');


Route::post('/room-check', 'roomController@checkRoom');


/*=======================================
			ADMIN ROUTES
=========================================
*/




Route::get('/admin/login','adminController@getLogin');
Route::post('/admin/login','adminController@postLogin');


Route::get('/admin/dashboard',[
	'uses' => 'adminController@getDashboard',
	'as'	=> 'dashboard',
	'middleware' => 'admin'

]);

Route::get('/admin/users',[
	'uses' => 'adminController@getUsers',
	'as'	=> 'users',
	'middleware' => 'admin'

]);
Route::get('/admin/active/{id}',[
	'uses' => 'adminController@makeUserActive',
	'as'	=> 'usersActive',
	'middleware' => 'admin'

]);
Route::get('/admin/profile/{id}',[
	'uses' => 'adminController@adminProfile',
	'as'	=> 'profile',
	'middleware' => 'admin'

]);

Route::get('/admin/admins',[
	'uses' => 'adminController@getAdmins',
	'as'	=> 'admins',
	'middleware' => 'admin'

]);

Route::get('/admin/register',[
	'uses' => 'adminController@getRegister',
	'as'	=> 'getRegister',
	'middleware' => 'admin'

]);

Route::post('/admin/register',[
	'uses'=>'adminController@postRegister',
	'as'	=> 'newAdmin',
	'middleware' => 'admin'
]);

Route::get('/admin/adminlist',[
	'uses' => 'adminController@adminList',
	'as'	=> 'adminlist',
	'middleware' => 'admin'

]);
Route::get('/admin/delete/{id}',[
	'uses' => 'adminController@adminDelete',
	'as'	=> 'adminDelete',
	'middleware' => 'admin'

]);

Route::get('admin/roomtype',[
		'uses' => 'adminController@getRoomtype',
		'as' 	=> 'showRoomType',
		'middleware'	=> 'admin'
]);
Route::post('/admin/addRoomType',[
	'uses' => 'adminController@addRoomType',
	'as'	=> 'addType',
	'middleware'	=> 'admin'
]);

Route::get('admin/editRoomType/{id}',[
	'uses' => 'roomTypeController@editRoomType',
	'as'	=> 	'editRoomType',
	'middleware' => 'admin'

]);

Route::get('admin/room',[
	'uses' => 'roomController@getRoom',
	'as'	=> 	'editRoomType',
	'middleware' => 'admin'

]);


Route::post('admin/addRoom',[
	'uses' => 'roomController@addRoom',
	'as'	=> 	'addRoom',
	'middleware' => 'admin'
]);

Route::get('admin/editRoom/{id}',[
	'uses' => 'roomController@editRoom',
	'as'	=> 	'editRoom',
	'middleware' => 'admin'
]);

Route::get('admin/deleteRoom/{id}',[
	'uses' => 'roomController@deleteRoom',
	'as'	=> 	'deleteRoom',
	'middleware' => 'admin'
]);

Route::post('admin/editRoomType/{id}',[
	'uses' => 'roomTypeController@postEdit',
	'as'	=> 'postEdit',
	'middleware' => 'admin'
]);

Route::get('admin/deleteRoomType/{id}',[
	'uses' => 'roomTypeController@deleteRoomType',
	'as'	=> 	'deleteRoomType',
	'middleware' => 'admin'

]);


Route::get('/admin/logout', 'adminController@logout');






