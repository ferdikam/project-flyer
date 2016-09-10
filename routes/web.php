<?php

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();
Route::resource('flyers', 'FlyersController');
Route::get('{zip}/{street}', 'FlyersController@show');
