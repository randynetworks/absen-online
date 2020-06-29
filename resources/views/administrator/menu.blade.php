@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Menu Management</h1>
        <a class="btn btn-success mb-3 text-white" data-toggle="modal" data-target="#menuAdd">Add New Menu</a>

        <!-- data table -->
        <div class="card shadow mb-4 col-xl-9">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Menu per tanggal <?= date('d F Y') ?> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Id</th>
                                <th>Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <? $i= 1; $menus = DB::select('select * from admin_menu');  ?>
                                <? foreach ($menus as $menu) : ?>
                                <tr>
                                    <td class="align-middle"><?= $i++; ?></td>
                                    <td class="align-middle"><?= $menu->id ?></td>
                                    <td class="align-middle"><?= $menu->menu ?></td>
                                    <td class="align-middle text-white">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#menuEdit"><i class="far fa-edit"> Edit</i></a> |
                                        <a class="btn btn-danger"><i class="far fa-trash-alt"> Del</i></a>
                                    </td>
                                </tr>
                                <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
