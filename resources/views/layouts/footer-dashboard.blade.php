<!-- Footer -->
<footer class="bg-white">
    <div class="container my-auto p-3">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 HIMPUNAN MAHASISWA MANAJEMEN INFORMATIKA DAN SISTEM INFORMASI</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

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
                <form>
                    <div class="form-group">
                        <label for="admin">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Input Nama">
                    </div>

                    <div class="form-group">
                        <label for="admin">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Input Password">
                    </div>

                    <div class="form-group">
                        <label for="date">Admin Code</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="Input Admin Code">
                    </div>
                    <div class="form-group">
                        <label for="date">Ormawa</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="Input Ormawa">
                    </div>
                    <div class="form-group">
                        <label for="date">Role</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="Input Role">
                        <small>1 For Administrator</small>
                        <small>2 For Admin Ormawa</small>
                    </div>
                    <div class="form-group">
                        <label for="img">Image Profile</label>
                        <input type="file" class="form-control-file" id="img">
                    </div>

                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Edit Administrator --}}

<!-- The Modal -->
<div class="modal fade" id="adminEdit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit data randynetworks</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">ID</label>
                        <input type="text" class="form-control" id="username" name="username" value="0001" readonly>
                    </div>

                    <div class="form-group">
                        <label for="admin">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="randynetworks">
                    </div>
                    <div class="form-group">
                        <label for="date">Admin Code</label>
                        <input type="text" class="form-control" id="date" name="date" value="MA01">
                    </div>
                    <div class="form-group">
                        <label for="date">Ormawa</label>
                        <input type="text" class="form-control" id="date" name="date" value="HMISI">
                    </div>
                    <div class="form-group">
                        <label for="img">Image Profile</label>
                        <input type="file" class="form-control-file" id="img">
                    </div>

                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Edit Admin Ormawa --}}

<!-- The Modal -->
<div class="modal fade" id="adminOrmawaEdit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit data randynetworks</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">ID</label>
                        <input type="text" class="form-control" id="username" name="username" value="0001" readonly>
                    </div>

                    <div class="form-group">
                        <label for="admin">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="randynetworks">
                    </div>
                    <div class="form-group">
                        <label for="img">Image Profile</label>
                        <input type="file" class="form-control-file" id="img">
                    </div>

                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Edit menu --}}

<!-- The Modal -->
<div class="modal fade" id="menuEdit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit data Menu Dashboard</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">ID</label>
                        <input type="text" class="form-control" id="username" name="username" value="1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="admin">Menu</label>
                        <input type="text" class="form-control" id="username" name="username" value="Dashboard">
                    </div>
                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Add Menu --}}

<!-- The Modal -->
<div class="modal fade" id="menuAdd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Menu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="menu">Nama Menu</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Input Nama Menu">
                    </div>
                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Edit menu --}}

<!-- The Modal -->
<div class="modal fade" id="subMenuEdit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit data Sub Menu Menu Management</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">ID</label>
                        <input type="text" class="form-control" id="username" name="username" value="1" readonly>
                    </div>

                    <div class="form-group">
                        <label for="admin">Menu ID</label>
                        <input type="text" class="form-control" id="username" name="username" value="1">
                    </div>

                    <div class="form-group">
                        <label for="admin">Title</label>
                        <input type="text" class="form-control" id="username" name="username" value="Dashboard Administrator">
                    </div>

                    <div class="form-group">
                        <label for="admin">URL</label>
                        <input type="text" class="form-control" id="username" name="username" value="/superadmin/dashboard">
                    </div>

                    <div class="form-group">
                        <label for="admin">Icon</label>
                        <input type="text" class="form-control" id="username" name="username" value="fas fa-fw fa-tachometer-alt">
                    </div>

                    <div class="form-group">
                        <label for="admin">Is Active</label>
                        <input type="text" class="form-control" id="username" name="username" value="1">
                    </div>
                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal Add Sub Menu --}}

<!-- The Modal -->
<div class="modal fade" id="subMenuAdd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Menu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">ID</label>
                        <input type="text" class="form-control" id="username" name="username" readonly>
                    </div>

                    <div class="form-group">
                        <label for="admin">Menu ID</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>

                    <div class="form-group">
                        <label for="admin">Title</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>

                    <div class="form-group">
                        <label for="admin">URL</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>

                    <div class="form-group">
                        <label for="admin">Icon</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>

                    <div class="form-group">
                        <label for="admin">Is Active</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>
                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

{{-- modal add member --}}

<!-- The Modal -->
<div class="modal fade" id="memberAdd">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">Nama Lengkap</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Nama Member">
                    </div>

                    <div class="form-group">
                        <label for="admin">Kelas</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Kelas">
                    </div>

                    <div class="form-group">
                        <label for="admin">Jabatan</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Jabatan">
                    </div>

                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>

{{-- modal edit member --}}

<!-- The Modal -->
<div class="modal fade" id="editMember">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Member Randy Ramadhan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="admin">Nama Lengkap</label>
                        <input type="text" class="form-control" id="username" name="username" value="Randy Ramadhan">
                    </div>

                    <div class="form-group">
                        <label for="admin">Kelas</label>
                        <input type="text" class="form-control" id="username" name="username" value="MSI-R42/18">
                    </div>

                    <div class="form-group">
                        <label for="admin">Jabatan</label>
                        <input type="text" class="form-control" id="username" name="username" value="Anggota">
                    </div>

                    <!-- Modal footer -->
                    <a type="button" class="text-white btn btn-primary">Save</a>
                    <a type="button" class="text-white btn btn-danger" data-dismiss="modal">Close</a>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('js/sb-admin-2.min.js')}}"></script>

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.card-deck form').length > 0 ? $('.card-deck form').parent() : "container-fluid";
        var options = {
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })

</script>

</body>

</html>
