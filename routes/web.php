<?php

use Illuminate\Support\Facades\Route;

// route login
Route::get('/', 'AuthController@Login');

// ====================== administrator ==================================

// dashboard admin
Route::get('/superadmin/dashboard', 'DashboardController@dasboard_administrator');

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


// =================== end of adminsitrator ===========================


// ==================      admin ormawa     ===========================

// dashboard admin ormawa
Route::get('/admin/dashboard', 'DashboardController@dasboard_admin');

// admin profile
Route::get('/admin/profile', 'AdminController@admin_profile');

// data member
Route::get('/admin/member', 'AbsenController@member');

// input absen
Route::get('/admin/absent-input', 'AbsenController@input_absent');

// recent absen
Route::get('/admin/recent-absent', 'AbsenController@recent_absen');


// =================   end of admin ormawa  ===========================
