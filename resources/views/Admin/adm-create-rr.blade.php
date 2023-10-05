<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>Create RR</title>

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
              <a class="nav-link active">
                <i class="nav-icon fas fa-box-archive nav-icon "></i>
                <p>
                  Manage Stocks
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
                  <a href="{{ route('CreateRR.adm') }}" class="nav-link active">
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
              <a  class="nav-link">
                <i class="nav-icon fa-solid fa-ticket nav-icon"></i>
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
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                <p>
                  Manage MRT
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateMRT.adm') }}" class="nav-link">
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
              <h1 class="m-0">Create Recieving fReport</h1>
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
                  {{--  <div class="card-header card-header-custom">
                      <h5 class="m-0 text-bold">Review WIV Request</h5>
                  </div>  --}}
                  <div class="card-body">
                    <div>
                      <table class="table table-custom">
                        <thead class="thead-custom">
                          <tr class="tr-custom">
                            <th class="th-custom" scope="col">Reference</th>
                            <th class="th-custom" scope="col">RIV</th>
                            <th class="th-custom" scope="col">CS</th>
                            <th class="th-custom" scope="col">AOC Date</th>
                            <th class="th-custom" scope="col">PO</th>
                            <th class="th-custom" scope="col">CV Date</th>
                            <th class="th-custom" scope="col">DR</th>
                            <th class="th-custom" scope="col">Inv</th>
                            <th class="th-custom" scope="col">OR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Add your table rows here -->
                          <tr class="tr-rr">
                            <td class="td-rr"><input class="form-control" type="text" placeholder=""></td>
                            <td class="td-rr" ><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                          </tr>
                          <tr class="tr-rr">
                            <td class="td-rr"><input class="form-control" type="text" placeholder="Date"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                            <td class="td-rr"><input class="form-control" type="text" placeholder="sample"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center mt-4 mb-4">
                      <label class="mb-0">Supplier</label>
                      <input class="form-control item-name-input" type="text">
                      <label class="mb-0">Address</label>
                      <input class="form-control item-name-input" type="text" >
                    </div>
                    
                    <table class="table table-custom">
                      <thead class="thead-custom ">
                        <tr class="tr-custom">
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