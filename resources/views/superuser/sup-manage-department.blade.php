<!DOCTYPE html>
<html lang="en">
@include('theme/plugins-theme')

<title>Manage Department</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('superuser/nav-bar')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4"
   {{--  style="background-color: #285430"  --}}
   >
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
                <a href="{{ route('userlist.sup') }}" class="nav-link ">
                  {{--  <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('manageDept.sup') }}" class="nav-link active">
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
            <h1 class="m-0">Manage Department</h1>
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
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <h2 class="card-title">Department List</h2>
                      <div class="card-tools">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                              <i class="fas fa-plus-circle" style="color: #ffffff;"></i>&nbsp;
                              <span>Add</span>
                          </button>
                      </div>
                  </div>
                  <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title">Add New Department</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label class="col-form-label-md">Deparment Name</label>
                                 <input class="form-control" type="text" placeholder="Department Name">
                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Confirm</button>
                              </div>
                          </div>
                          <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                  </div>
              </div>

                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th class="text-left">Name</th>
                      <th class="text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Sample</td>
                      <td>
                        <div class="text-center">
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">
                            <i class="fas fa-pencil-alt" style="color: white;"></i>
                        </button>
                        <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        </button>  
                        </div>                      
                      </td>
                    </tr>
                    <tr>
                      <td>Sample</td>
                      <td>
                        <div class="text-center">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">
                        <i class="fas fa-pencil-alt" style="color: white;"></i>
                        </button>
                        <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        </button>  
                        </div>     
                      </td>
                    </tr>
                    <tr>
                      <td>Sample</td>
                      <td>
                        <div class="text-center">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">
                        <i class="fas fa-pencil-alt" style="color: white;"></i>
                        </button>
                        <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        </button>  
                        </div>  
                      </td>
                    </tr>
                    </tbody>
                  </table>
                  <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Department Name</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label class="col-form-label-md">Deparment Name</label>
                               <input class="form-control" type="text" placeholder="Department Name">
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "columnDefs": [
          {
              "targets": [1], // index of the "Action" column
              "width": "150px" // set the desired width
          }
      ]
      });
    });
  </script>
</body>
</html>
