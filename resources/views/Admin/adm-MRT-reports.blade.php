<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')

<title>MRT Reports</title>

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
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('ItemRequest.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Item Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ReturnItemRequest.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Return Item Request</p>
                  </a>
                </li>
              </ul>
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
                  <a href="{{ route('WIVReports.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MRTReports.adm') }}" class="nav-link active">
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
              <h1 class="m-0">Material Returned Ticket Report</h1>
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
                      <label class="m-1">Prepared By:</label>
                      <div class="input-group">
                        <select class="form-control select2 admin-select" name="admin-select" multiple="multiple" data-placeholder="Select prepared by" style="width: 200px;">
                          @foreach ($admins as $admin)
                              <option>{{$admin->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="m-1">Approved By:</label>
                      <div class="input-group">
                        <select class="form-control select2 manager-select" name="manager-select" multiple="multiple" data-placeholder="Select approved by" style="width: 200px;">
                          @foreach ($managers as $manager)
                              <option>{{$manager->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>MRT Number</th>
                        <th>Date Created</th>
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
                      @foreach ($mrts as $mrt)
                          <tr>
                            <td>{{$mrt->mrt_number}}</td>
                            <td>{{ \Carbon\Carbon::parse($mrt->mrt_date)->format('m/d/Y') }}</td>
                            <td>{{$mrt->created_by}}</td>
                            <td>{{$mrt->approved_by}}</td>
                            <td>{{$mrt->user->name}}</td>
                            <td>{{$mrt->user->department->name}}</td>
                            <td>{{$mrt->user->district->name}}</td>
                            <td>
                              @foreach ($mrt->items as $item)
                                  {{$item->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($mrt->items as $item)
                                  {{$item->category->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($mrt->items as $item)
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
    // DataTable initialization
    var table = $("#example1").DataTable({
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
          messageTop: 'Date Printed: ' + new Date().toLocaleDateString(),
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
    });

    // Handle change event for admin-select
    $('.admin-select').on('change', function () {
      var selectedAdmins = $(this).val();
      table.column(2).search(selectedAdmins.join('|'), true, false).draw();
    });

    // Handle change event for manager-select
    $('.manager-select').on('change', function () {
      var selectedManagers = $(this).val();
      table.column(3).search(selectedManagers.join('|'), true, false).draw();
    });

    // Handle date range event
    $('#fromDate, #toDate').on('change', function () {
      var fromDate = $('#fromDate').val();
      var toDate = $('#toDate').val();

      fromDate = fromDate ? moment(fromDate, 'YYYY-MM-DD').format('YYYY-MM-DD') : '';
      toDate = toDate ? moment(toDate, 'YYYY-MM-DD').format('YYYY-MM-DD') : '';

      // Perform date range search
      table.draw(); // Clear previous search
      if (fromDate && toDate) {
        $.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
            var date = moment(data[1], 'MM/DD/YYYY');
            return date.isBetween(moment(fromDate), moment(toDate), null, '[]');
          }
        );
      }
      table.draw();
      $.fn.dataTable.ext.search.pop();
    });

    // DataTable initialization for example2
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    // Initialize Select2 Elements
    $('.select2').select2();

    // Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    // Date range picker initialization
    $('#reservation').daterangepicker();

    // Date range picker with time picker initialization
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    });
  });
</script>

</html>