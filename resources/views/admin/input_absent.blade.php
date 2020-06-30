@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Input Absent</h1>
            <div class="card shadow mb-3 col-lg-4">
                <div class="card-body">
                    <h4>Absent Member</h4>
                    <form>
                        <div class="form-group">
                            <label for="admin">Add Absen</label>
                            <select class="form-control" id="admin">
                                <option>-- Nama Anggota --</option>
                                <option>Naruto</option>
                                <option>Sasuke</option>
                                <option>Sakura</option>
                                <option>Kakashi</option>
                            </select>
                        </div>
                        <a type="button" class="text-white btn btn-primary">Absent!</a>
                    </form>
                </div>
            </div>
            <div class="card shadow mb-3 col-lg-7">
                <div class="card-body">
                    <h4>Member yang telah diabsent</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">Nama Lengkap</th>
                                    <th class="align-middle">Jabatan</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <? $i= 1; ?>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">Anggota</td>
                                        <td class="align-middle text-white">
                                            <a class="btn btn-danger"><i class="far fa-trash-alt"> Remove Absent</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">Anggota</td>
                                        <td class="align-middle text-white">
                                            <a class="btn btn-danger"><i class="far fa-trash-alt"> Remove Absent</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">Anggota</td>
                                        <td class="align-middle text-white">
                                            <a class="btn btn-danger"><i class="far fa-trash-alt"> Remove Absent</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"><?= $i++; ?></td>
                                        <td class="align-middle">Randy Ramadhan</td>
                                        <td class="align-middle">Anggota</td>
                                        <td class="align-middle text-white">
                                            <a class="btn btn-danger"><i class="far fa-trash-alt"> Remove Absent</i></a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class="text-white">
                        <a class="btn btn-success"><i
                            class="fas fa-save"> Simpan</i></a> |
                    <a class="btn btn-danger"><i class="fas fa-history"> Reset</i></a>
                </div>
                    </div>
                </div>
            </div>
    </div>

</div>
<!-- End of Main Content -->

@endsection
