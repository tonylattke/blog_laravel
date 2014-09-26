<?php

// Home

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Post
Route::get('/post/{id}', 'PostController@read')->where('id', '[0-9]+');

Route::get('/posts.json', 'PostController@allPostJson');