<!DOCTYPE html>
<html lang="en">
@include('theme/plugins-theme')

<title>User List</title>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
@include('superuser/nav-bar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-green elevation-4" {{--  style="background-color: #285430"  --}}>
            <!-- Brand Logo -->
            <div class="d-flex align-items-center">
                <a href="index3.html" class="brand-link">
                    <img src="{{ asset('assets/ormeco-logo.png') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <div class="ml-2">
                        <span class="brand-text  font-weight-light" style="color:white;">Warehouse</span>
                        <p class="brand-text font-weight-light">Managemen System</p>
                    </div>
                </a>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ route('dashboard.sup') }}" class="nav-link">
                                <i class="nav-icon fas fa-home nav-icon"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-user nav-icon"></i>
                                <p>
                                    Manage User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('create.sup') }}" class="nav-link ">
                                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Create User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('unverified.sup') }}" class="nav-link ">
                                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Unverified User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('userlist.sup') }}" class="nav-link active">
                                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>User List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manageDept.sup') }}" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Manage Department
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manageDist.sup') }}" class="nav-link">
                                <i class="nav-icon fas fa-map-marker-alt"></i>
                                <p>
                                    Manage Districts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('userActivities.sup') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    User Activities
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-undo"></i>
                                <p>
                                    Restore Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('restoreItems.sup') }}" class="nav-link">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>Items</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('restoreAccounts.sup') }}" class="nav-link">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>User Accounts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User List</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>District</th>
                                                <th>Department</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($users as $user)
                                            <tr>
                                              <td>{{$user->name}}</td>
                                              <td>{{$user->email}}</td>
                                              <td>{{$user->role->name}}</td>
                                              <td>{{$user->district->name}}</td>
                                              <td>{{$user->department->name}}</td>
                                              <td>
                                                  <div class="text-center">
                                                      <button class="btn btn-warning edit-user" data-toggle="modal"
                                                          data-target="#modal-default" data-user-id="{{ $user->id }}">
                                                          <i class="fas fa-pencil-alt" style="color: white;"></i>
                                                      </button>
                                                      <button class="btn btn-danger">
                                                          <i class="fas fa-trash"></i>
                                                      </button>
                                                  </div>
                                              </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Add User Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" id="user-id">
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">Name</label>
                                                        <input class="form-control" type="text" placeholder="Name" id="edit-name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">Email</label>
                                                        <input class="form-control" type="text" placeholder="Email" id="edit-email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">Role</label>
                                                        <select class="form-control" id="edit-role" required>
                                                            <option value="" disabled selected>Select a Role</option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->id }}">
                                                                    {{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">District</label>
                                                        <select class="form-control" id="edit-district" required>
                                                            <option value="" disabled selected>Select a District</option>
                                                            @foreach ($districts as $district)
                                                                <option value="{{ $district->id }}">
                                                                    {{ $district->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">Department</label>
                                                        <select class="form-control" id="edit-department" required>
                                                            <option value="" disabled selected>Select a Department</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->id }}">
                                                                    {{ $department->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label-md">Password</label>
                                                        <input class="form-control" type="password" placeholder="Password" id="edit-password">
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</body>

<script>
    $(function () {
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    // Handle click event on the edit button
    $('.edit-user').click(function () {
        var userId = $(this).data('user-id');

        // Set the user ID in the hidden input field
        $('#user-id').val(userId);

        // Make an AJAX request to fetch user data
        $.ajax({
            url: '/sup-get-user/' + userId,
            type: 'GET',
            success: function (data) {
                // Populate modal fields with user data
                $('#edit-name').val(data.name);
                $('#edit-email').val(data.email);
            },
            error: function () {
                alert('Error fetching user data');
            }
        });
    });
});
</script>



</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create User</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header bg-success">
                    <h3 class="card-title">User Information</h3>
                </div>
                <form method="POST" action="{{route('superuser.create.user')}}" class="container-fluid" autocomplete="off">
                  @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input name="name" class="form-control" type="text" placeholder="Full Name" required>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" style="width: 100%;"
                                        placeholder="Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="Password" class="form-control" style="width: 100%;"
                                        placeholder="Password" required>
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Districts</label>
                                    <select name="district" class="form-control select2" style="width: 100%;" required>
                                        <option value="" disabled selected>Districts</option>
                                        @foreach ($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Department</label>
                                    <select name="department" class="form-control select2" style="width: 100%;" required>
                                        <option value="" deisabled selected>Departments</option>
                                        @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input name="confirm_password" type="Password" class="form-control" style="width: 100%;"
                                        placeholder="Password" required>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.row -->
                    <div class="card-footer text-center space-x-px">
                        <button type="button" class="btn btn-outline-dark">Reset</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            
        </div>
      </div>
     </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->