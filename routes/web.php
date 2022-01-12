<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('register', 'Auth\RegisterController@register');
Route::post('register', 'Auth\RegisterController@store')->name('register');

Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@store')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'Auth\LoginController@home')->name('home');

Route::get('/users', 'UserController@index')->name('users_chart');
Route::get('/users_2', function () {
    return view('users_chart_2');
});


///// API Routes
Route::get('/api/get_users', 'UserApiController@showUser');
