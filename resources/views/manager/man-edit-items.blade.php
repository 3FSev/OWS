<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>Edit Item</title>

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
                    {{-- <i class="far fa-circle nav-icon"></i>  --}}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MrtRequest.man') }}" class="nav-link">
                    {{-- <i class="far fa-circle nav-icon"></i>  --}}
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
              <h1 class="m-0">Edit Item Detials</h1>
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
                {{-- <div class="card-header card-header-custom">
                <h5 class="m-0 text-bold">Item Details</h5>
              </div>       --}}
                <div class="card-body">
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
              </div>
              <!-- /.card-body -->
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <a href="{{ route('stockList.man') }}" class="btn btn-primary">
                      <i class="fas fa-arrow-left mr-1"></i> Back
                    </a>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="#" class="btn btn-success toastEditItem">
                      <i class="fas fa-check mr-1"></i> Update
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