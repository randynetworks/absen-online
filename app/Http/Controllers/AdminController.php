<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // default index
    public function administrator()
    {
        $data['title'] = "Manage Administrator";
        return view('admin/administrator', $data);
    }

    // default index
    public function admin_ormawa()
    {
        $data['title'] = "Manage Admin";
        return view('admin/admin_ormawa', $data);
    }
}
