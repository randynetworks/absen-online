<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // default index
    public function administrator()
    {
        // login dashboard
        return view('admin/administrator');
    }

     // default index
     public function admin_ormawa()
     {
         // login dashboard
         return view('admin/admin_ormawa');
     }
}
