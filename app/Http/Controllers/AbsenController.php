<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    //
    public function report()
    {
        $data['title'] = "Manage Report Absen";
        return view('administrator/report', $data);
    }
}
