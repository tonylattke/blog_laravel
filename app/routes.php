<?php

// Home

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Years
Route::get('/year/{anio}', array('uses'=>'HomeController@year'))->where('anio', '[0-9]+');

/*********************************** Post ************************************/
// Read
Route::get('/post/{id}', 'PostController@read')->where('id', '[0-9]+');
// New
Route::get('/post/new', array('as'=>'post_new', 'uses'=>'PostController@get_new'));
Route::post('/post/create', array('as'=>'post_create', 'uses'=>'PostController@create'));
// Edit
Route::get('/post/{id}/edit', array('as'=>'post_edit', 'uses'=>'PostController@edit'))->where('id', '[0-9]+');
Route::post('/post/update', array('as'=>'post_update', 'uses'=>'PostController@update'));
// Delete
Route::post('/post/delete', array('as'=>'post_delete', 'uses'=>'PostController@delete'));
// Json
Route::get('/posts.json', 'PostController@allPostJson');

/********************************* Comment ***********************************/
Route::post('/post/make_comment', array('as'=>'make_comment', 'uses'=>'PostController@make_comment'));