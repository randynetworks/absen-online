@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')
<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h3 class="m-3">HI Admin, <span>Randy!</span></h3>
        <div class="row m-0 justify-content-left">
            <div class="card-deck rounded m-3 text-white bg-primary mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Member Management</h3>
                    <hr style="border-color: white;">
                    <p class="card-text">Total Anggota Terdata :</p>
                    <a href="/admin/profile" type="submit" class="btn btn-success">Manage Profil Kamu!</a>
                    <a href="/admin/member" type="submit" class="btn btn-warning mt-3">Manage Member Kamu!</a>
                </div>
            </div>
            <div class="card-deck rounded m-3 text-white bg-secondary mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Absent Management</h3>
                    <hr style="border-color: white;">
                    <p class="card-text">hari Ini rapat?</p>
                    <a href="/admin/absent-input" type="submit" class="btn btn-success">Absen di Sini!</a><br>
                    <p class="card-text">Lihat Data Absen sebelumnya.</p>
                    <a href="/admin/recent-absent" type="submit" class="btn btn-warning">Recent Absen</a>
                </div>
            </div>
            {{-- <div class="card-deck rounded m-3 text-white bg-danger mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Report Absen Ormawa</h3>
                    <hr style="border-color: white;">
                    <a href="/superadmin/report-absen" type="submit" class="btn btn-success">Buat Report</a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection
