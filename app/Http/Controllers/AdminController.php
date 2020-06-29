<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // default index
    public function administrator()
    {
        $data['title'] = "Manage Administrator";
        return view('administrator/administrator', $data);
    }

    // default index
    public function admin_ormawa()
    {
        $data['title'] = "Manage Admin Ormawa";
        return view('administrator/admin_ormawa', $data);
    }
}
