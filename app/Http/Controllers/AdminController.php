<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function administrator()
    {
        $data['title'] = "Manage Administrator";
        return view('administrator/administrator', $data);
    }

    public function admin_ormawa()
    {
        $data['title'] = "Manage Admin Ormawa";
        return view('administrator/admin_ormawa', $data);
    }

    // admin profile

    public function admin_profile()
    {
        $data['title'] = "Admin Profile";
        return view('admin/admin_profile', $data);
    }
}
