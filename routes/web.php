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

// menu management
// main menu
Route::get('/superadmin/menu', 'MenuController@index');

// main sub menu
Route::get('/superadmin/sub-menu', 'MenuController@sub_menu');
// report
Route::get('/superadmin/report-absen', 'AbsenController@report');
