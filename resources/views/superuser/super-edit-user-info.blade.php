<!DOCTYPE html>
<html lang="en">
  @include('theme/plugins-theme')
  @include('theme/preloader')
  @include('theme/navbar')

<title>Restore Item</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <div class="d-flex align-items-center">
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/ormeco-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user nav-icon"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('create.sup') }}" class="nav-link active">
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
            <a href="{{ route('manageDept.sup') }}" class="nav-link ">
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
            <a href="#" class="nav-link">
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
            <h1 class="m-0">Restore Item</h1>
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
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" id="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" id="">
                      <option value="" aria-placeholder="sample">Sample</option>
                      <option value="" aria-placeholder="sample">Sample</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="district">District</label>
                    <select class="form-control" name="district" id="">
                      <option value="" aria-placeholder="sample">Sample</option>
                      <option value="" aria-placeholder="sample">Sample</option>
                    </select>
                  </div>

                  <div class="">
                    <label for="">Password</label>
                  </div>
                  <div class="input-group mb-5">
                    <input id="password" type="password" class="form-control input-field" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span toggle="#password-field" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="form-group text-right">
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary mr-2">
                        <i class="fas fa-arrow-left mr-1"></i>  Back
                    </a>
                    <a href="#" class="btn btn-success mr-2">
                        <i class="fas fa-check mr-1"></i>  Save Changes
                    </a>
                </div>
            </div>
            </div>
      </div><!-- /.container-fluid -->
    </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

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
    });
  </script>
</body>
</html>