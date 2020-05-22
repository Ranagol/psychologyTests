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

//TODO kikeresni console.log Vue hibát
//TODO elmagyarázni nagyjából, hogy hogy van a Vue meg a Laravel összekötve, mikor nem két különálló appról van szó. Hogyan kommunikálnak? Hol van a Vue routes.js? Hogy aktiválja a Laravel route és Controller a Vue komponenst?
//TODO nem tudok logoutolni valamiért, és nem értem hogy miért. Csak találgatni tudok...
