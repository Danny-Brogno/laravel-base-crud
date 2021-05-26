<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('home', 'TestController@home') -> name("home");

Route:: get('ospite{id}', 'TestController@show') -> name("show-ospite");

Route::get('ospiti-form', 'TestController@create') -> name("ospiti-form");

Route::post('new-ospiti', "TestController@newOspiti") -> name("newOspiti");
