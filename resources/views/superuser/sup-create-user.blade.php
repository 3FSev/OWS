<html lang="en">
  @include('theme/plugins-theme')
<title>Create User</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('assets/ormeco-logo.png') }}" alt="AdminLTELogo" height="60" width="60">
  <div>
    <h5 class="pt-3"><strong>Loading...</strong></h5>
  </div>
</div>


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                <span>Logout</span>
                <i class="fas fa-sign-out-alt"  style="color: grey;"></i>
            </a>
        </div>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <div class="d-flex align-items-center">
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="#" class="nav-link active">
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
                <a href="{{ route('unverified.sup') }}" class="nav-link">
                  {{--  <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>Unverified User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('userlist.sup') }}" class="nav-link">
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
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Full Name</label>
                     <input class="form-control" type="text" placeholder="Full Name">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" style="width: 100%;" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" class="form-control" style="width: 100%;" placeholder="Password">
                    </div>
                    <!-- /.form-group -->
                  </div>

                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Districts</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option disabled="disabled">California (disabled)</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Department Result</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option disabled="disabled">California (disabled)</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="Password" class="form-control" style="width: 100%;" placeholder="Password">
                        </input>
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
</div>
</body>
</html>
