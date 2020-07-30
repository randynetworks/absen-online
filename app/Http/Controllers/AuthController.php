<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //login
    public function login()
    {
        $data['title'] = "Login Admin";

        return view('auth/login', $data);
    }

    //register
    public function register()
    {
        $data['title'] = "Registration Admin";
        return view('auth/registration', $data);
    }

    public function login_access(Request $request)
    {
        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->back();
        };

    }
}
