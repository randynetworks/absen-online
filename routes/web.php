<?php

use Illuminate\Support\Facades\Route;

// route login
Route::get('/', 'AuthController@Login');

// dashboard admin
Route::get('/superadmin/dashboard', 'DashboardController@index');

// menu administrator
Route::get('/superadmin/administrator', 'AdminController@administrator');

// menu admin ormawa
Route::get('/superadmin/admin-ormawa', 'AdminController@admin_ormawa');

// report
Route::get('/superadmin/report-absen', 'AbsenController@report');
