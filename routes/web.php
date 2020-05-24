<?php

use Illuminate\Support\Facades\Route;

// route login
Route::get('/', 'AuthController@Login');
Route::get('/register', 'AuthController@register');

// dashboard
Route::get('/dashboard', 'DashboardController@index');
