<!DOCTYPE html>
<html lang="en">
  @include('theme/plugins-theme')

<title>Restore Item</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('theme/nav-bar')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4"
   {{--  style="background-color: #285430"  --}}
   >
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
            <a href="{{ route('dashboard.sup') }}" class="nav-link">
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
            <a href="{{ route('restoreItems.sup') }}" class="nav-link active">
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Restore Data</h1>
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
                  <h5 class="m-0 font-weight-bolder">Deleted Section</h5>
                </div>     
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Item Code</th>
                      <th>Item Name</th>
                      <th>Status</th>
                      <th>Quantity</th>
                      <th>Unit</th>
                      <th>Category</th>
                      <th>Unit Cost</th>
                      <th>Total Cost</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                      <td>
                        <div class="text-center">
                        <button class="btn btn-success toastsRestoreItem">
                          Restore&nbsp;<i class="fas fa-undo"></i>
                        </button>  
                        </div>  
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
      </div><!-- /.container-fluid -->
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
