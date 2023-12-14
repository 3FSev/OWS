<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('employee/em-navbar')

<title>Return Item</title>

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
            <li class="nav-item ">
              <a class="nav-link ">
                <i class="nav-icon fas fa-hand-paper nav-icon"></i>
                <p>
                  Accountability
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('PendingWiv.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Pending WIV </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('PendingRiv.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Pending MRT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ListView.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-thumbs-up nav-icon "></i>
                <p>
                  Request Approval
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('ItemReq.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Item Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ReturnItemReq.em') }}" class="nav-link active">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Returned Item Request</p>
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
              <h1 class="m-0">Returned Item Request</h1>
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
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="card-title text-bold">Returned Item</h2>
                    <div class="card-tools">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-cube" style="color: #ffffff;"></i>&nbsp;
                        <span>Return Item</span>
                      </button>
                    </div>
                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Return Item</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-row">
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th class="text-center">Item Name</th>
                                    <th class="text-center">Quantity</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <select class="form-control">
                                        <option value="sample1">Sample 1</option>
                                        <option value="sample2">Sample 2</option>
                                    </select>
                                  </td>
                                    <td>
                                      <div class="d-flex justify-content-center align-items-center">
                                        <input class="form-control quantity-input" type="number" value="0">
                                      </div>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="modal-footer form-group text-right m-0">
                            <div class="d-flex justify-content-end">
                              <a href="#" class="btn btn-primary mr-2">
                                <i class="fas fa-plus-circle"></i> Add
                              </a>
                              <a href="#" class="btn btn-success mr-2 toastReturnItemRequest">
                                <i class="fas fa-check "></i> Confirm
                              </a>
                              <a href="#" class="btn btn-danger">
                                <i class="fas fa-times"></i> Reset
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>WIV Number</th>
                        <th>Date</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Unit Cost</th>
                        <th>Total Cost</th>
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
                      </tr>
                    </tbody>
                  </table>
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