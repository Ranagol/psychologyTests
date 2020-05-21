<?php

use Illuminate\Support\Facades\Route;

//This is the source for the pusher/chat part
//https://pusher.com/tutorials/chat-laravel

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages', 'ChatsController@index');
Route::get('/fetchMessages', 'ChatsController@fetchMessages');
Route::post('/sendMessages', 'ChatsController@sendMessage');
