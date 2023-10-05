<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>Change Password</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4 ">
 
    <!-- Brand Logo -->
    <div class="d-flex align-items-center">
      <a href="#" class="brand-link" style="display: flex; align-items: center;">
        <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo" class="brand-image-xl img-circle elevation-3">
        <div class="brand-text-custom">
          <span class="brand-text font-weight-light">Warehouse<br>Management System</span>
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
            <a href="{{ route('stockList.man') }}" class="nav-link">
              <i class="nav-icon fas fa-box nav-icon"></i>
              <p>
                Stock List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope nav-icon"></i>
              <p>
                Request Approval
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('WivRequest.man') }}" class="nav-link">
                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>WIV Request</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="{{ route('MrtRequest.man') }}" class="nav-link">
                  {{--  <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>MRT Request</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
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
            <h1 class="m-0">Change Password</h1>
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
              <div class="card-header card-header-custom">
                <h5 class="m-0 text-bold">Password Details</h5>
              </div>     
              <div class="card-body">
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Old Password</label>
                    <input class="form-control" type="text" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="email" class="form-control" style="width: 100%;" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="Password" class="form-control" style="width: 100%;" placeholder="Password">
                </div>
                <!-- /.form-group -->
                <div class="d-flex justify-content-end mt-5">
                    <button class="btn bg-primary text-white text-bold toastChangePassword"><i class="fas fa-check mr-1"></i> Save</button>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div><!-- /.container-fluid -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
</body>
</html>
