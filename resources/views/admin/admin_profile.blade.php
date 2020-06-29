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
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#adminOrmawaEdit"><i class="far fa-edit"> Edit</i></a>
                    </div>
                </div>
            </div>
        </div><br>
    </div>

</div>
<!-- End of Main Content -->

@endsection
