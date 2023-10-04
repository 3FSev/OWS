
<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>Create WIV</title>

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
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fas fa-box-archive nav-icon "></i>
                <p>
                  Manage Stock
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateRR.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Create RR </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('RRList.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>RR List</p>
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
              <a  class="nav-link ">
                <i class="nav-icon fa-solid fa-ticket nav-icon "></i>
                <p>
                  Manage WIV
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateWIV.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Create WIV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('WIVList.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV List</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                <p>
                  Manage MRT
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateMRT.adm') }}" class="nav-link active">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Create MRT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MRTList.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>MRT List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-file-lines nav-icon"></i>
                <p>
                  Manage Request
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('ItemRequest.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Item Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ReturnItemRequest.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Return Item Request</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('Reports.adm') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie nav-icon"></i>
                <p>
                  Reports
                </p>
              </a>
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
              <h1 class="m-0">Create Material Return Ticket</h1>
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
                  <h5 class="m-0 text-bold">Item Request</h5>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                    <div class="mb-3 col-md-3">
                      <label for="employee-name">Employee Name</label>
                      <select class="form-control input-box-custom">
                        <option value="option1" disabled>Eubert Cris S. Novencido</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-3">
                      <label for="District">District</label>
                      <select class="form-control input-box-custom">
                        <option value="option1" disabled>District I</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-3">
                      <label for="wiv-number">WIV Number</label>
                      <input class="form-control input-box-custom" type="text">
                    </div>
                    <div class="mb-3 col-md-3">
                      <label for="wiv-date">WIV Date</label>
                      <input class="form-control input-box-custom" type="date">
                    </div>
                  </div>                  
                  <table class="table table-custom mt-3 ">
                      <thead class="thead-custom ">
                          <tr>
                              <th class="th-custom" scope="col">Item Name</th>
                              <th class="th-custom quantity-input" scope="col">Quantity</th>
                              <th class="th-custom" scope="col">RIV</th>
                          </tr>
                      </thead>
                      <tbody>
                          <!-- Add your table rows here -->
                          <tr class="tr-rr">
                              <td class="td-rr">
                                  <select class="form-control" name="Full Name" id="">
                                      <option value="Sample Full Name">Sample Full Name</option>
                                      <option value="Sample Full Name">Sample Full Name</option>
                                  </select>
                              </td>
                              <td class="td-rr"><input class="form-control " type="number"
                                      placeholder="sample"></td>
                              <td>
                                <div>
                                    <button class="btn btn-danger toastDeleteItem">
                                        <i class="fas fa-trash"></i>
                                    </button>  
                                </div>
                              </td>
                          </tr>
                          <tr class="tr-rr">
                              <td class="td-rr">
                                  <select class="form-control" name="Full Name" id="">
                                      <option value="Sample Full Name">Sample Full Name</option>
                                      <option value="Sample Full Name">Sample Full Name</option>
                                  </select>
                              </td>
                              <td class="td-rr"><input class="form-control " type="number"
                                      placeholder="sample"></td>
                              <td class="td-rr">
                                  <button class="btn btn-danger toastDeleteItem ">
                                      <i class="fas fa-trash"></i>
                                  </button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                </div>
              </div>
                  <div class="form-group text-right">
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn btn-primary mr-2">
                            <i class="fas fa-plus-circle mr-1"></i>  Add
                        </a>
                        <a href="" class="btn btn-success mr-2">
                            <i class="fas fa-check mr-1"></i>  Confirm
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fas fa-times mr-1"></i>  Reset
                        </a>
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