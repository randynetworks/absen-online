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

    public function member()
    {
        $data['title'] = "Data Member";
        return view('admin/member', $data);
    }

    public function input_absent()
    {
        $data['title'] = "Input Absent";
        return view('admin/input_absent', $data);
    }

    public function recent_absen()
    {
        $data['title'] = "Recent Absent";
        return view('admin/recent_absent', $data);
    }

    public function detail_absen()
    {
        $data['title'] = "Detail Raport";
        return view('admin/detail_absent', $data);
    }
}
