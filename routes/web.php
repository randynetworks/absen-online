<?php

use Illuminate\Support\Facades\Route;

// route login
Route::get('/', 'AuthController@Login');

// dashboard admin
Route::get('/dashboard', 'DashboardController@index');

// menu administrator
Route::get('/administrator', 'AdminController@administrator');

// menu admin ormawa
Route::get('/admin-ormawa', 'AdminController@admin_ormawa');

// report
Route::get('/report-absen', 'AbsenController@report');
