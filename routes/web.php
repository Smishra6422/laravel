<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/home', 'user@renderPostDetail')->middleware('auth');

Route::get('/about', 'user@renderAboutUs')->middleware('auth');



Route::resource('admins','admin')->middleware('auth');
