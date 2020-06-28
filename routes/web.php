<?php

use Illuminate\Support\Facades\Route;

// route login
Route::get('/', 'AuthController@Login');

// dashboard admin
Route::get('/dashboard', 'DashboardController@index');
