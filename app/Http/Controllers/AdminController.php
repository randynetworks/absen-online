<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    // admin ormawa
    public function add_admin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6',
            'admin_code' => 'required',
            'ormawa' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'admin_code' => $request->admin_code,
            'ormawa' => $request->ormawa,
            'role' => $request->role

        ]);

        return redirect('/superadmin/admin-ormawa');
    }
}
