{{--  <!-- Main content -->
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
            <Label>Password</Label>
            <div class="input-group mb-3">
              <input id="password" type="password"
                class="form-control input-field @error('password') is-invalid @enderror" name="password"
                placeholder="Password" required autocomplete="new-password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span toggle="##password-field" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                </div>
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            
            <label for="">Confirm Password</label>
            <div class="input-group mb-5">
              <input id="password-confirm" type="password" class="form-control input-field"
                name="password_confirmation" placeholder="Confirm Password" required
                autocomplete="new-password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span toggle="#password-field"
                    class="fa fa-fw field-icon toggle-password-confirm fa-eye"></span>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <a href="{{ route('stockList.man') }}" class="btn btn-default">
                  Cancel
                </a>
              </div>
              <div class="col-md-6 text-right">
                <a href="#" class="btn btn-success ">
                 <span class="m-2">Save</span>
                </a>
              </div>
            </div>
          </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
<!-- /.container-fluid -->
  </div>
</section>  --}}

<html>
@include('theme/plugins-theme')
<title>Dashboard</title>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('theme/nav-bar')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-green elevation-4">
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
          <a href="{{ route('dashboard.sup') }}" class="nav-link active">
            <i class="nav-icon fas fa-home nav-icon"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('create.sup') }}" class="nav-link">
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
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header card-header-custom">
                <h5 class="m-0 text-bold">Password Details</h5>
              </div>     
              <div class="card-body">
                <!-- /.form-group -->
                <form method="POST" action="{{route('change.acc.pass')}}" class="container-fluid" autocomplete="off">
                  @csrf
                  <Label>Current Password</Label>
                  <div class="input-group mb-3">
                    <input id="password" type="password"
                      class="form-control input-field @error('password') is-invalid @enderror" name="current_password"
                      placeholder="Password" required autocomplete="new-password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span toggle="##password-field" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                      </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <Label>New Password</Label>
                  <div class="input-group mb-3">
                    <input id="password" type="password"
                      class="form-control input-field @error('password') is-invalid @enderror" name="new_password"
                      placeholder="Password" required autocomplete="new-password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span toggle="##password-field" class="fa fa-fw field-icon toggle-password fa-eye"></span>
                      </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  
                  <label for="">Confirm Password</label>
                  <div class="input-group mb-5">
                    <input id="password-confirm" type="password" class="form-control input-field"
                      name="confirm_password" placeholder="Confirm Password" required
                      autocomplete="new-password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span toggle="#password-field"
                          class="fa fa-fw field-icon toggle-password-confirm fa-eye"></span>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <a href="{{ route('stockList.man') }}" class="btn btn-default">
                        Cancel
                      </a>
                    </div>
                    <div class="col-md-6 text-right">
                      <button type="submit" class="btn btn-success ">
                       <span class="m-2">Save</span>
                      </button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
    <!-- /.container-fluid -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

</html>
