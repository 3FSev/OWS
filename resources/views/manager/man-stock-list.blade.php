<html>
@include('theme/plugins-theme')
<title>Stock List</title>
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
  <aside class="main-sidebar sidebar-dark-green elevation-4"
   {{--  style="background-color: #285430"  --}}
   >
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
            <a href="{{ route('stockList.man') }}" class="nav-link active">
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
            <h1 class="m-0">Stock List</h1>
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
              <div class="card-header bg-success">
                <h5 class="m-0">Items</h5>
              </div>     
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Status</th>
                    <th>Quantity </th>
                    <th>Unit</th>
                    <th>Category</th>
                    <th>Unit Cost</th>
                    <th>Total Price</th>
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
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                          <i class="fas fa-pencil-alt" style="color: white;"></i>
                      </button>
                      </div>                      
                    </td>
                  </tr>
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
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                          <i class="fas fa-pencil-alt" style="color: white;"></i>
                      </button>  
                    </td>
                  </tr>
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
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                          <i class="fas fa-pencil-alt" style="color: white;"></i>
                      </button>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title">Edit Items</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              
                            <div class="col-md-6"> 
                              <div class="form-group">
                                <label class="col-form-label-md">Item Code</label>
                               <input class="form-control" type="text" placeholder="Item Code">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label-md">Item Name</label>
                               <input class="form-control" type="text" placeholder="Item Name">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label-md">Status</label>
                               <input class="form-control" type="text" placeholder="Status ">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label-md">Quantity</label>
                               <input class="form-control" type="text" placeholder="Quantity">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="col-form-label-md">Unit</label>
                               <input class="form-control" type="text" placeholder="Unit">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label-md">Category</label>
                                <select class="form-control">
                                  <option value="unit">Sample 1</option>
                                  <option value="category1">Sample 2</option>
                                  <option value="category2">Sample 3</option>
                                  <option value="category2">Sample 4</option>
                                </select>
                              </div>                            
                              <div class="form-group">
                                <label class="col-form-label-md">Unit Cost</label>
                               <input class="form-control" type="text" placeholder="Unit Cost">
                              </div>
                            </div>
                          </div>

                        </div>
                          <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary toastEditItem">Confirm</button>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
  });
</script>
</html>
