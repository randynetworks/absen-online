<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    //
    public function report()
    {
        $data['title'] = "Report Absen";
        return view('admin/report', $data);
    }
}
