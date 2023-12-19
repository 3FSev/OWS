<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')

<title>WIV Reports</title>

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
              <a href="" class="nav-link active">
                <i class="nav-icon fas fa-chart-pie nav-icon"></i>
                <p>
                  Reports
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('WIVReports.adm') }}" class="nav-link active">
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
              <h1 class="m-0">Warehouse Issued Voucher Report</h1>
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
                <div class="card-header text-center">
                  <form class="form-inline mb-0 align-items-center">
                    <div class="form-group mr-2">
                      <label class="mr-2">Date Range</labels>
                    </div>
                    <div class="form-group mr-2">
                      <p for="date" class="mr-2 my-auto">From:</p>
                      <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group mr-2 align-items-center">
                      <p for="date" class="mr-2 my-auto">To:</p>
                      <input type="date" class="form-control" id="date">
                    </div>
                      <div class="form-group m-2 ">
                        <label class="m-1">Prepaired By:</label>
                        <div class="input-group">
                          <select class="form-control select2 " multiple="multiple" data-placeholder="Select a State" style="width: 150px;">
                            <option>Manager</option>
                            <option>Admin</option>
                            <option>Manager</option>
                            <option>Admin</option>
                            <option>Manager</option>
                            <option>Admin</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="m-1">Approved By:</label>
                        <div class="input-group">
                          <select class="form-control select2 " multiple="multiple" data-placeholder="Select a State" style="width: 150px;">
                            <option>Manager</option>
                            <option>Admin</option>
                          </select>
                        </div>
                      </div>
                  </form>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>WIV Number</th>
                        <th>Date Issuance</th>
                        <th>Prepared By</th>
                        <th>Approved By</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>District</th>
                        <th>Particulars</th>
                        <th>Category</th>
                        <th>Unit Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($wivs as $wiv)
                          <tr>
                            <td>{{$wiv->wiv_number}}</td>
                            <td>{{ \Carbon\Carbon::parse($wiv->wiv_date)->format('M-d-y') }}</td>
                            <td>{{$wiv->created_by}}</td>
                            <td>{{$wiv->approved_by}}</td>
                            <td>{{$wiv->user->name}}</td>
                            <td>{{$wiv->user->department->name}}</td>
                            <td>{{$wiv->user->district->name}}</td>
                            <td>
                              @foreach ($wiv->items as $item)
                                {{$item->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($wiv->items as $item)
                                {{$item->category->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($wiv->items as $item)
                                {{$item->unit_cost}}<br>
                              @endforeach
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
</body>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [
          {
            extend: 'pdf',
            title: 'Warehouse Issued Voucher Report',
            filename: 'wiv_report',
            messageTop: 'Date Printed: ' + new Date().toLocaleDateString(),
            messageBottom: 'Printed By: Eubert Novencido',
          },
          {
            extend: 'excel',
            title: 'Warehouse Issued Voucher Report',
            filename: 'wiv_report',
            messageBottom: 'Date Printed: ' + new Date().toLocaleDateString(),
            messageBottom: 'Printed By: Sample Name',
          },
          {
            extend: 'print',
            title: 'Warehouse Issued Voucher Reports',
            filename: 'wiv_report',
            messageBottom: 'Date Printed: ' + new Date().toLocaleDateString(),
            messageBottom: 'Printed By: Sample Name',
          },
        ],
        "language": {
          "search": "Filter"
        },
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    $('#reservation').daterangepicker()
  
  });

</script>

</html>