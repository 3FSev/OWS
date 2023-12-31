<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')
<title>Return Item Request</title>

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
                    <a  href="{{ route('CreateMRT.adm') }}" class="nav-link ">
                      <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                      <p>
                        Manage MRT
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('ItemList.adm') }}" class="nav-link ">
                      <i class="nav-icon fas fa-box-archive nav-icon"></i>
                      <p>
                        Manage Stock
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('CreateRR.adm') }}" class="nav-link ">
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
                        <a href="{{ route('RRReports.adm') }}" class="nav-link ">
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
                            <h1 class="m-0">Return Item Request</h1>
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
                                    <h5 class="m-0 text-bold">Material Return Ticket</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
                                        <div>
                                            <label for="employee-name">Employee Name:</label>
                                            <span id="employee-name">Sample Full Name</span>
                                        </div>
                                        <div>
                                            <label for="wiv-number">MRT Number:</label>
                                            <span id="wiv-number">203914</span>
                                        </div>
                                        <div>
                                            <label for="wiv-date">WIV Date:</label>
                                            <span id="wiv-date">19/09/2023</span>
                                        </div>
                                    </div>

                                    <table class="table table-custom table-bordered table-hover">
                                        <thead class="thead-custom">
                                            <tr class="tr-custom">
                                                <th>Material</th>
                                                <th>Usable</th>
                                                <th>None-Usable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-custom">
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                            </tr>
                                            <tr class="tr-custom">
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                                <td class="td-custom"><input class="form-control" type="text" placeholder="Sample" disabled></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <a href="{{ route('ReturnItemRequest.adm') }}" class="btn btn-primary">
                                      <i class="fas fa-arrow-left"></i> Back
                                    </a>
                                  </div>
                                  <div class="col-md-6 text-right">
                                    <a href="#" class="btn btn-success toastProcessMRT">
                                      <i class="fas fa-check"></i> Confirm
                                    </a>
                                  </div>
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

</html>