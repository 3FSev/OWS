<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')

<title>Recieve Report List</title>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-green elevation-4">
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
            <li class="nav-item ">
              <a href="{{ route('Dashboard.adm') }}" class="nav-link ">
                <i class="nav-icon fas fa-home nav-icon"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('Employee.adm') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-user-group nav-icon"></i>
                <p>
                  Employee List
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="{{ route('CreateWIV.adm') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-ticket nav-icon"></i>
                <p>
                  Manage WIV
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a  href="{{ route('CreateMRT.adm') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                <p>
                  Manage MRT
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-box-archive nav-icon"></i>
                <p>
                  Manage Stock
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateRR.adm') }}" class="nav-link active">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Receiving Report</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('CreateItemCategories.adm') }}" class="nav-link ">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <p>Create Category</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ItemList.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Item List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a  href="{{ route('ItemRequest.adm') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-file-lines nav-icon"></i>
                <p>
                  Manage Request            
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie nav-icon"></i>
                <p>
                  Reports
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('WIVReports.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MRTReports.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>MRT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('RRReports.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>RR</p>
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
              <h1 class="m-0">Edit Recieving Report</h1>
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
                  <h5 class="m-0 text-bold">Recieving Report Details</h5>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="unit">Unit</label>
                          <input class="form-control" type="text" id="unit" placeholder="Unit">
                        </div>
                        <div class="form-group">
                          <label for="delivered">Delivered</label>
                          <input class="form-control" type="number" id="delivered" value="0">
                        </div>
                        <div class="form-group">
                          <label for="acceptance">Acceptance</label>
                          <input class="form-control" type="number" id="acceptance" value="0">
                        </div>
                        <div class="form-group">
                          <label for="unitCost">Unit Cost</label>
                          <input class="form-control" type="number" id="unitCost" value="0">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="extendedCost">Extended Cost</label>
                          <input class="form-control" type="number" id="extendedCost" value="0">
                        </div>
                        <div class="form-group">
                          <label for="freight">Freight</label>
                          <input class="form-control" type="number" id="freight" value="0">
                        </div>
                        <div class="form-group">
                          <label for="totalCost">Total Cost</label>
                          <input class="form-control" type="number" id="totalCost" value="0">
                        </div>
                        <div class="form-group">
                          <label for="date">Date</label>
                          <input class="form-control" type="date" id="date">
                        </div>
                      </div>
                    </div>
                  </div>               
                <!-- /.card-body -->  
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </div>
        <div class="form-group text-right">
          <div class="d-flex justify-content-between">
              <a href="{{ route('CreateRR.adm') }}" class="btn btn-primary mr-2">
                  <i class="fas fa-arrow-left mr-1"></i>  Back
              </a>
              <a href="#" class="btn btn-success  mr-2">
                  <i class="fas fa-check mr-1"></i>  Update
              </a>
          </div>
      </div> 
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