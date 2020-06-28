<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
