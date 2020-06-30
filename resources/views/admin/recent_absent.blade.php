@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Recent Absent</h1>
        <!-- data table -->
        <div class="card shadow mb-4 col-lg-7">
            <div class="card-body">
                <h4 class="">Data Table History Absen Ormawa HMISI
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Tanggal</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? $i= 1; ?>
                            <tr>
                                <td class="align-middle"><?= $i++; ?></td>
                                <td class="align-middle">1 June 2020</td>
                                <td class="align-middle text-white">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#detail"><i
                                            class="fas fa-eye"> Detail</i></a> |
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
<!-- End of Main Content -->


{{-- detail --}}

<!-- The Modal -->
<div class="modal fade" id="detail">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Data Absen tanggal 1 June 2020</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <!-- data table -->
                <div class="card shadow mb-4 col-lg">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="align-middle">#</th>
                                        <th class="align-middle">Nama Lengkap</th>
                                        <th class="align-middle">Kelas</th>
                                        <th class="align-middle">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? $i= 1; ?>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">MSI-R42/18</td>
                                        <td class="align-middle">Anggota</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">MSI-R42/18</td>
                                        <td class="align-middle">Anggota</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">MSI-R42/18</td>
                                        <td class="align-middle">Anggota</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">MSI-R42/18</td>
                                        <td class="align-middle">Anggota</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">MSI-R42/18</td>
                                        <td class="align-middle">Anggota</td>
                                    </tr>
                                </tbody>
                            </table>

                            <a class="btn btn-primary text-white"><i class="fas fa-book"> Buat Report</i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
