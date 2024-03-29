<!DOCTYPE html>
<html lang="en">
@include('theme/plugins-theme')
@include('theme/nav-bar')
<title>Manage Users</title>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

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
                            <h1 class="m-0">Manage Users</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span style="color: white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span style="color: white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                    <div class="card card-default">
                        <div class="card-header card-header-custom">
                            <h3 class="card-title font-weight-bold">Create New User</h3>
                        </div>
                        <form method="POST" action="{{route('superuser.create.user')}}" class="container-fluid"
                            autocomplete="off">
                            @csrf
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row mb-4">
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
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select name="role" class="form-control select2" style="width: 100%;"
                                                required>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <label>Department</label>
                                        <select name="department" class="form-control select2" style="width: 100%;"
                                            required>
                                            <option value="" deisabled selected>Departments</option>
                                            @foreach ($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                        </select>

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
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <input id="password" type="password"
                                                class="form-control input-field @error('password') is-invalid @enderror"
                                                name="password" placeholder="Password" required
                                                autocomplete="new-password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span toggle="#password"
                                                        class="fa fa-fw field-icon toggle-password fa-eye"></span>
                                                </div>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <label>Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input id="password-confirm" type="password"
                                                class="form-control input-field @error('password') is-invalid @enderror"
                                                name="confirm_password" placeholder="confirm password" required
                                                autocomplete="new-password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span toggle="#password-confirm"
                                                        class="fa fa-fw field-icon toggle-password-confirm fa-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.form-group -->
                                        {{--  <div class="form-group">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="Password" class="form-control"
                                                    style="width: 100%;" placeholder="Password" required>
                                            </div>
                                        </div>  --}}
                                        {{--  <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input name="confirm_password" type="Password" class="form-control"
                                                style="width: 100%;" placeholder="Password" required>
                                        </div>  --}}
                                        <!-- /.form-group -->
                                    </div>                                   
                                    <!-- /.col -->
                                </div>
                                <div class="d-flex justify-content-center mt-8">
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
                                <div class="card-header card-header-custom">
                                    <h1 class="card-title font-weight-bold">User Information</h1>
                                </div>
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
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fas fa-ban deactivated-icon" style="color: white;"></i>
                                                            </button>
                                                            <a href="{{ route('EditUserList.sup', $user->id) }}" type="button" class="btn btn-warning btn-edit">
                                                                <i class="fas fa-pencil-alt" style="color: white;"></i>
                                                            </a>
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