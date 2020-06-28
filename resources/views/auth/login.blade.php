@extends('layouts.layout_auth')

@section('title', 'Login Admin')

@section('container')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card-deck o-hidden shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Ini card login -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Admin HIMA/UKM</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        {{-- username --}}
                                        <input value="" type="text" class="form-control form-control-user" id="username" placeholder="Username" name="username">

                                    </div>
                                    <div class="form-group">
                                        {{-- password --}}
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                    </div>

                                    <a href="/superadmin/dashboard" type="button" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
