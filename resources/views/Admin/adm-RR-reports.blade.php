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
                  <a href="{{ route('MRTReports.adm') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>MRT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('RRReports.adm') }}" class="nav-link active">
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
              <h1 class="m-0">Receiving Report</h1>
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
                  <div class="row d-flex justify-content-center align-item-center">
                    <div class="form-group mr-2 my-auto">
                      <label class="mr-2 my-0"></label>
                      <label class="mr-2 my-0">Date Range</label>
                    </div>
                    <div class="form-group mr-2">
                      <p for="fromDate" class="mr-2 my-auto">From:</p>
                      <input type="date" class="form-control" id="fromDate">
                    </div>
                    <div class="form-group mr-2 align-items-center">
                      <p for="toDate" class="mr-2 my-auto">To:</p>
                      <input type="date" class="form-control" id="toDate">
                    </div>
                    <div class="form-group mr-2">
                      <p class="m-1">Prepared By:</p>
                      <div class="input-group">
                        <select class="duallistbox select2 admin-select" name="admin-select" multiple="multiple"
                          data-placeholder="Select prepared by" style="width: 250px;">
                          @foreach ($admins as $admin)
                          <option>{{$admin->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group ml-2">
                      <p class="m-1">Approved By:</p>
                      <div class="input-group">
                        <select class="duallistbox select2 manager-select" name="manager-select" multiple="multiple"
                          data-placeholder="Select approved by" style="width: 250px;">
                          @foreach ($managers as $manager)
                          <option>{{$manager->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>RR Number</th>
                        <th>Date Created</th>
                        <th>Prepared By</th>
                        <th>Approved By</th>
                        <th>Particulars</th>
                        <th>Category</th>
                        <th>Unit Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($rrs as $rr)
                          <tr>
                            <td>{{$rr->rr_number}}</td>
                            <td>{{ \Carbon\Carbon::parse($rr->rr_date)->format('m/d/Y') }}</td>
                            <td>{{$rr->created_by}}</td>
                            <td>{{$rr->approved_by}}</td>
                            <td>
                              @foreach ($rr->items as $item)
                                  {{$item->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($rr->items as $item)
                                  {{$item->category->name}}<br>
                              @endforeach
                            </td>
                            <td>
                              @foreach ($rr->items as $item)
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
    var userName = "{{ $user->name }}";
    var approveByName = "{{ $user->name }}";
    var table = $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [
          {
              extend: 'pdf',
              title: 'Receiving Reports',
              filename: 'rr_report',
              messageTop: 'Date Printed: ' + new Date().toLocaleDateString(),
              customize: function(doc) {
                // Add centered and spaced header text
                
                doc.header = function() {
                    return {
                        columns: [
                            {
                                alignment: 'center',
                                text: 'ORIENTAL MINDORO ELECTRIC COOPERATIVE, INC.',
                                style: 'header'
                            }
                        ],
                        margin: [0, 20, 0, 0] // [left, top, right, bottom]
                    };
                };
    
                // Add centered and spaced footer text with "Printed by" and "Approved by"
                doc.footer = function(currentPage, pageCount) {
                    return {
                        columns: [
                            {
                                alignment: 'center',
                                bold: true,
                                text: 'Printed by: ' + userName,
                                style: 'footer'
                            },
                            {
                                alignment: 'center',
                                bold: true,
                                text: 'Approved by:'+ approveByName,
                                style: 'footer'
                            }
                        ],
                        margin: [0, 20, 0, 20], // [left, top, right, bottom]
                    };
                };
            }
          },
            {
                extend: 'excel',
                title: 'Receiving Reports',
                filename: 'rr_report',
                messageTop: 'Date Printed: ' + new Date().toLocaleDateString(),
                messageBottom: 'Printed By: ' + userName,
            },
            {
                extend: 'print',
                title: 'Receiving Reports',
                filename: 'rr_report',
                messageBottom: 'Date Printed: ' + new Date().toLocaleDateString(),
                messageBottom: 'Printed By: ' + userName,
            },
        ],
        "language": {
            "search": "Filter"
        },
    });

    // Append buttons container to a specific location
    table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // Initialize Select2 Elements after appending buttons container
    $('.select2').select2();

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