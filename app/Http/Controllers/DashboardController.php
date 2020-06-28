<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // default index
    public function index()
    {
        // login dashboard
        return view('admin/dashboard');
    }
}
