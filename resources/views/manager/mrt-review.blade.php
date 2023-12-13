<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('manager/man-navbar')

<title>Review MRT Request</title>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-green elevation-4 ">
      <!-- Brand Logo -->
      <div class="d-flex align-items-center">
        <a href="#" class="brand-link" style="display: flex; align-items: center;">
          <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo"
            class="brand-image-xl img-circle elevation-3">
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
                  <a href="{{ route('WivRequest.man') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MrtRequest.man') }}" class="nav-link active">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>MRT Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('RRrequest.man') }}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i>  --}}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>RR Request</p>
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
              <h1 class="m-0">Material Returned Ticker</h1>
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
                  <h5 class="m-0 text-bold">Review MRT Request</h5>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="d-flex col-11 justify-content-between align-items-center mt-2">
                      <div>
                        <label for="employee-name">Employee Name:</label>
                        <span id="employee-name">{{$mrt->user->name}}</span>
                      </div>
                      <div>
                        <label for="wiv-number">MRT Number:</label>
                        <span id="wiv-number">{{$mrt->mrt_number}}</span>
                      </div>
                      <div>
                        <label for="wiv-date">MRT Date:</label>
                        <span id="wiv-date">{{$mrt->mrt_date}}</span>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row justify-content-center">
                    <div class="col-8 table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Item Name</th>
                            <th>Quantity Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Sample Name</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Sample Name</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Sample Name</td>
                            <td>1</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>  --}}
                  <div class="row justify-content-center">
                    <div class="col-11 table-responsive">
                      <table class="table mrt-table-custom mt-3 ">
                        <thead class="mrt-thead-custom">
                          <tr class="mrt-tr">
                            <th class="mrt-th" scope="col">Item Name</th>
                            <th class="mrt-th" scope="col">Category</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Add your table rows here -->
                          @foreach ($mrt->items as $item)
                            <tr class=" mrt-tr">
                              <td class="mrt-td">{{$item->name}}</td>
                              <td class="mrt-td">{{$item->category->name}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Back
                  </a>
                  <div>
                    <a href="{{ route('MrtApprove.man', $mrt->id) }}" class="btn btn-success toastApproveMRT">
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
  $(function() {
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