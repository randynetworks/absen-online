<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // default index
    public function index()
    {
        return view('admin.dashboard');
    }
}
