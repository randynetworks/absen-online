<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data['title'] = "Menu Management";
        return view('administrator/menu', $data);
    }


    public function sub_menu()
    {
        $data['title'] = "Sub Menu Management";
        return view('administrator/sub_menu', $data);
    }
}
