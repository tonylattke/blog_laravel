<?php

// Home

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Post
Route::get('/post/{id}', 'PostController@view')->where('id', '[0-9]+');