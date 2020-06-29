@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Sub Menu Management</h1>
        <a class="btn btn-success mb-3 text-white" data-toggle="modal" data-target="#subMenuAdd">Add New Sub Menu</a>

        <!-- data table -->
        <div class="card shadow mb-4 col-xl-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Sub Menu per tanggal <?= date('d F Y') ?> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Menu ID</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">URL</th>
                                <th class="align-middle">Icon</th>
                                <th class="align-middle">Is Active</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <? $i= 1; $subMenus = DB::select('select * from admin_sub_menu');  ?>
                                <? foreach ($subMenus as $subMenu) : ?>
                                <tr>
                                    <td class="align-middle"><?= $i++; ?></td>
                                    <td class="align-middle"><?= $subMenu->menu_id ?></td>
                                    <td class="align-middle"><?= $subMenu->title ?></td>
                                    <td class="align-middle"><?= $subMenu->url ?></td>
                                    <td class="align-middle"><?= $subMenu->icon ?></td>
                                    <td class="align-middle"><?= $subMenu->is_active ?></td>
                                    <td class="align-middle text-white">
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#subMenuEdit"><i class="far fa-edit"> Edit</i></a> |
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
