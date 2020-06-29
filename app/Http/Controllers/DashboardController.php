<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dasboard_administrator()
    {
        // login dashboard
        $data['title'] = "Dashboard Administrator";
        return view('administrator/dashboard', $data);
    }

    public function dasboard_admin()
    {
        // login dashboard
        $data['title'] = "Dashboard Admin";
        return view('admin/dashboard', $data);
    }
}
