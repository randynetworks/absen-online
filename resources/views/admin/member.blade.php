@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Member Ormawa HMISI</h1>
        <a class="btn btn-success mb-3 text-white" data-toggle="modal" data-target="#memberAdd">Add New Member Ormawa</a>

        <!-- data table -->
        <div class="card shadow mb-4 col-lg">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Member Ormawa per tanggal <?= date('d F Y') ?> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Nama Lengkap</th>
                                <th class="align-middle">Kelas</th>
                                <th class="align-middle">Jabatan</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <? $i= 1; ?>
                                <tr>
                                    <td class="align-middle"><?= $i++; ?></td>
                                    <td class="align-middle">Randy Ramadhan</td>
                                    <td class="align-middle">MSI-R42/18</td>
                                    <td class="align-middle">Anggota</td>
                                    <td class="align-middle text-white">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#editMember"><i class="far fa-edit"> Edit</i></a> |
                                        <a class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
