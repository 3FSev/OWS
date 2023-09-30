<html>
@include('theme/plugins-theme')
<title>Dashboard</title>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset('assets/ormeco-logo.png') }}" height="60" width="60">
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
<aside class="main-sidebar sidebar-dark-green elevation-4"
 {{--  style="background-color: #285430"  --}}
 >
  <!-- Brand Logo -->
  <div class="d-flex align-items-center">
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <div class="ml-2">
    <span class="brand-text  font-weight-light" style="color:white;">Warehouse</span>
    <p class="brand-text font-weight-light">Management Systemt</p>
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
          <a href="{{ route('dashboard.sup') }}" class="nav-link active">
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
                  <a href="{{ route('create.sup') }}" class="nav-link">
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
            <h1 class="m-0">Dashboard</h1>
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$verefied_count}}</h3>

                <p>Registered Accounts</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-check"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$unverefied_count}}</h3>
                <p>Unregistered Accounts</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

</html>
