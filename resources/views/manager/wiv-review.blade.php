<html>
@include('theme/plugins-theme')
<title>Review WIV Request</title>
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
            <a href="{{ route('stockList.man') }}" class="nav-link ">
              <i class="nav-icon fas fa-box nav-icon"></i>
              <p>
                Stock List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-envelope nav-icon"></i>
              <p>
                Request Approval
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('WivRequest.man') }}" class="nav-link active">
                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>WIV Request</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="{{ route('WivRequest.man') }}" class="nav-link ">
                  {{--  <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>RIV Request</p>
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
            <h1 class="m-0">Warehouse Issued Voucher Request</h1>
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
                    <div class="card-header bg-success">
                        <h5 class="m-0">Review WIV Request</h5>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mt-2">
                          <div>
                              <label for="employee-name">Employee Name:</label>
                              <span id="employee-name">Sample Full Name</span>
                          </div>
                          <div>
                              <label for="wiv-number">WIV Number:</label>
                              <span id="wiv-number">203914</span>
                          </div>
                          <div>
                              <label for="wiv-date">WIV Date:</label>
                              <span id="wiv-date">19/09/2023</span>
                          </div>
                      </div>

                      <table class="table own-table mt-3 ">
                        <thead class="own-thead bg-gray">
                          <tr class="own-tr">
                            <th class="own-th" scope="col">Item</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">RIV</th>
                            <th scope="col">RIV Date</th>
                            <th scope="col">PO</th>
                            <th scope="col">PO Date</th>
                            <th scope="col">RR</th>
                            <th scope="col">RR Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Add your table rows here -->
                          <tr class="own-tr">
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td" ><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled ></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                          </tr>
                          <tr class="own-tr">
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled ></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="own-td"><input class="form-control" type="text" placeholder="sample" disabled></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                  <div class="form-group text-right">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('WivRequest.man') }}" class="btn btn-primary mr-2">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <a href="" class="btn btn-success mr-2">
                            <i class="fas fa-check"></i> Approve
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fas fa-times"></i> Decline
                        </a>
                    </div>
                </div>
                
                </div>
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
