@extends('layouts.dashboard')

@section('title', 'Main Dashboard')

@section('container')

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page manage -->
        <h1 class="h3 mb-4 text-gray-800">Report Absensi</h1>

        <div class="card shadow mb-4 p-4">
            <form>
                <div class="form-group">
                  <label for="admin">Username Admin</label>
                    <select class="form-control" id="admin">
                      <option>-- Select Admin --</option>
                      <option>Naruto</option>
                      <option>Sasuke</option>
                      <option>Sakura</option>
                      <option>Kakashi</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for="datetimepicker4">Pick date</label>
                    <input type='text' class="form-control" id='datetimepicker4' />
                </div>

                <button type="submit" class="btn btn-primary">Buat Report</button>
              </form>

        </div>

    </div>
</div>


@endsection
