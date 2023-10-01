<html>
@include('theme/plugins-theme')
<title>Review WIV Request</title>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <!-- Preloader -->
  @include('theme/preloader')
  <!-- Navbar -->
  @include('theme/navbar')

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
            
                    <div class="card-header card-header-custom">
                        <h5 class="m-0 text-bold">Review WIV Request</h5>
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

                      <table class="table table-custom mt-3 ">
                        <thead class="thead-custom ">
                          <tr>
                            <th class="th-custom" scope="col">Item</th>
                            <th class="th-custom" scope="col">Quantity</th>
                            <th class="th-custom" scope="col">RIV</th>
                            <th class="th-custom" scope="col">RIV Date</th>
                            <th class="th-custom" scope="col">PO</th>
                            <th class="th-custom" scope="col">PO Date</th>
                            <th class="th-custom" scope="col">RR</th>
                            <th class="th-custom" scope="col">RR Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Add your table rows here -->
                          <tr class="tr-custom">
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom" ><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled ></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                          </tr>
                          <tr class="tr-custom">
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled ></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
                            <td class="td-custom"><input class="form-control" type="text" placeholder="sample" disabled></td>
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
