@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Manage Admin Ormawa Absen Online</h1>
        <a class="btn btn-success mb-3 text-white" data-toggle="modal" data-target="#adminAdd">Add New Admin Ormawa</a>

        <!-- data table -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table Admin Ormawa per tanggal <?= date('d F Y') ?>
                </h6>
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
                                <td class="align-middle"><img class="rounded-circle" height="100px" width="100px"
                                        src="{{url('img/me.jpg')}}" alt=""></td>
                                <td class="align-middle">Active Now</td>
                                <td class="align-middle">Admin since 28 June 2020</td>
                                <td class="align-middle text-white">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#adminEdit"><i
                                            class="far fa-edit"> Edit</i></a> |
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

{{-- modal Add Admin --}}

<!-- The Modal -->
<div class="modal fade" id="adminAdd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="admin">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Input Nama"
                            value="{{old('username')}}">
                        @error('username')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="admin">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Input Password">
                        @error('password')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="admin_code">Admin Code</label>
                        <input type="text" class="form-control" id="admin_code" name="admin_code"
                            placeholder="Input Admin Code" value="{{old('admin_code')}}">
                        @error('admin_code')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ormawa">Ormawa</label>
                        <input type="text" class="form-control" id="ormawa" name="ormawa" placeholder="Input Ormawa"
                            value="{{old('ormawa')}}">
                        @error('ormawa')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Input Role"
                            value="{{old('role')}}">
                        <small>1 For Administrator</small>
                        <small>2 For Admin Ormawa</small>
                        @error('role')
                        <br>
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image Profile</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <!-- Modal footer -->
                    <button type="submit" class="text-white btn btn-primary">Save</button>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
