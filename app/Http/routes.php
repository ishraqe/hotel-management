<?php


Route::get('/', function () {
     
    return view('pages.index');
});

Route::get('/rooms', function () {
    return view('pages.rooms');
});

Route::get('/error', function () {
    return view('pages.404');
});


Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/room-detail', function () {
    return view('pages.room-detail');
});

Route::get('/contact', function () {
	
	
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about-us');
});

Route::get('/facilities', function () {
    return view('pages.facilities');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/help', function () {
    return view('pages.help-center');
});




