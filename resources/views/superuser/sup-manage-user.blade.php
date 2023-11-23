<!DOCTYPE html>
<html lang="en">
@include('theme/plugins-theme')

<title>Manage Users</title>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('superuser/nav-bar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-green elevation-4" {{--  style="background-color: #285430"  --}}>
            <!-- Brand Logo -->
            <div class="d-flex align-items-center">
                <a href="#" class="brand-link" style="display: flex; align-items: center;">
                    <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo"
                        class="brand-image-xl img-circle elevation-3">
                    <div class="brand-text-custom">
                        <span class="brand-text font-weight-light">Warehouse<br>Management System</span>
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
                            <a href="{{ route('create.sup') }}" class="nav-link active">
                                <i class="nav-icon fas fa-user nav-icon"></i>
                                <p>
                                    Manage User
                                </p>
                            </a>
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
                            <a href="{{ route('restoreItems.sup') }}" class="nav-link ">
                                <i class="nav-icon fas fa-undo"></i>
                                <p>
                                    Restore Data
                                </p>
                            </a>
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
                    <div class="row mb-1">
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
                        <div class="card-header card-header-custom">
                            <h3 class="card-title font-weight-bold">User Information</h3>
                        </div>
                        <form method="POST" action="{{route('superuser.create.user')}}" class="container-fluid"
                            autocomplete="off">
                            @csrf
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="name" class="form-control" type="text" placeholder="Full Name"
                                                required>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" style="width: 100%;"
                                                placeholder="Email Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" type="Password" class="form-control"
                                                style="width: 100%;" placeholder="Password" required>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Districts</label>
                                            <select name="district" class="form-control select2" style="width: 100%;"
                                                required>
                                                <option value="" disabled selected>Districts</option>
                                                @foreach ($districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select name="department" class="form-control select2" style="width: 100%;"
                                                required>
                                                <option value="" deisabled selected>Departments</option>
                                                @foreach ($departments as $department)
                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input name="confirm_password" type="Password" class="form-control"
                                                style="width: 100%;" placeholder="Password" required>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>                                   
                                    <!-- /.col -->
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-outline-dark">Reset</button>
                                    <span class="mx-3"></span>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div> 
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                    <div class="content-wapper">
                        <div class="content-header mt-lg-4">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0">User List</h1>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
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
                                                <th>Status</th>
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
                                                    @if ($user->deleted_at)
                                                    <span>Deactivated</span>
                                                    @elseif ($user->approved_at)
                                                    <span>Active</span>
                                                    @else
                                                    <span>Not Verified</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <form method="POST" action="{{route('destroy.user', $user->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('approve.user', $user->id) }}"
                                                                class="btn btn-success @if($user->approved_at !== null && $user->deleted_at === null) disabled @endif">
                                                                <i class="fas fa-check" style="color: white;"></i>
                                                            </a>
                                                            <button onclick="return confirm('Are you sure?')" type="submit"
                                                                class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
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
</body>

<script>
    $(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</html>