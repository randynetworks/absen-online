@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Manage Admin Ormawa Absen Online</h1>

        <!-- data table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Admin Ormawa per tanggal <?= date('d F Y') ?> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Image</th>
                                <th>Is Active</th>
                                <th>Date Create</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">Randynetworks</td>
                                    <td class="align-middle"><img class="rounded-circle" height="100px" width="100px" src="{{url('img/me.jpg')}}" alt=""></td>
                                    <td class="align-middle">Active Now</td>
                                    <td class="align-middle">Admin since 28 June 2020</td>
                                    <td class="align-middle text-white">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#adminEdit"><i class="far fa-edit"> Edit</i></a> |
                                        <a class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection

