@extends('layouts.layout_auth')

@section('title', 'Registration Admin')

@section('container')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi untuk Admin HIMA/UKM</h1>
                        </div>
                        <form class="user" method="POST" action="">
                            <div class="form-group">
                                <input value="" type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name">

                            </div>
                            <div class="form-group">
                                <input value="" type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">


                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">


                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
