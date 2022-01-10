<?php

use Illuminate\Support\Facades\Route;

Route::get('register', 'Auth\RegisterController@register');
Route::post('register', 'Auth\RegisterController@store')->name('register');

Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@store')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'Auth\LoginController@home')->name('home');
