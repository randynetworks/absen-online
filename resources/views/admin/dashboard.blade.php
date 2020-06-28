@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')
<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h3 class="m-3">HI Administrator, <span>Randy!</span></h3>
        <div class="row m-0 justify-content-left">
            <div class="card-deck rounded m-3 text-white bg-primary mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Administrator</h3>
                    <hr style="border-color: white;">
                    <p class="card-text">Total Admin :</p>
                    <p class="card-text">Administrator Online :</p>
                    <p class="card-text">Administrator Offline :</p>
                    <a href="/administrator" type="submit" class="btn btn-success">Manage Administrator</a>
                </div>
            </div>
            <div class="card-deck rounded m-3 text-white bg-secondary mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Admin Ormawa</h3>
                    <hr style="border-color: white;">
                    <p class="card-text">Total Admin :</p>
                    <p class="card-text">Admin Ormawa Online :</p>
                    <p class="card-text">Admin Ormawa Offline :</p>
                    <a href="/admin-ormawa" type="submit" class="btn btn-success">Manage Admin</a>
                </div>
            </div>
            <div class="card-deck rounded m-3 text-white bg-danger mb-3 shadow" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="text-center">Report Absen Ormawa</h3>
                    <hr style="border-color: white;">
                    <a href="/report-absen" type="submit" class="btn btn-success">Buat Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection
