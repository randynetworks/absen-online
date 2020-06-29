@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Akun Kamu!</h1>
        <div class="card shadow mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{url('img/me.jpg')}}" class="p-3 card-img rounded-circle">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br>
                        <h5 class="card-title">Randynetworks</h5>
                        <h6>Active Now!</h6>
                        <p class="card-text"><small class="text-muted">Admin since 28 June 2020</small></p>
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#adminEdit"><i class="far fa-edit"> Edit</i></a>
                    </div>
                </div>
            </div>
        </div><br>

        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Manage Administrator Absen Online</h1>
        <a class="btn btn-success mb-3 text-white" data-toggle="modal" data-target="#adminAdd">Add New Administrator</a>


        <!-- data table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Administrator per tanggal <?= date('d F Y') ?> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
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
