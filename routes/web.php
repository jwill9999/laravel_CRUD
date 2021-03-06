<?php

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::get('/post/edit/{id}', 'PostController@edit');

Route::put('/posts/{id}', 'PostController@update');

Route::delete('/post/delete/{id}', 'PostController@destroy');

Route::post('/comments/create/{post}', 'CommentController@store');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
