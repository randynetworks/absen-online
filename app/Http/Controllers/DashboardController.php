<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // default index
    public function index()
    {
        // login dashboard
        $data['title'] = "Dashboard Administrator";
        return view('administrator/dashboard', $data);
    }
}
