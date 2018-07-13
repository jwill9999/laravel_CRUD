<?php

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::put('/post/edit/{post}', 'PostController@update');

Route::post('/comments/create/{post}', 'CommentController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
