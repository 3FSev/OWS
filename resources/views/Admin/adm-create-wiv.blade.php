
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
                  <a href="{{ route('ItemList.adm') }}" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Item List</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a  class="nav-link active">
                <i class="nav-icon fa-solid fa-ticket nav-icon "></i>
                <p>
                  Manage WIV
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('CreateWIV.adm') }}" class="nav-link active">
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
              <a class="nav-link">
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
          <h1 class="m-0">Create Warehouse Issued Voucher</h1>
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
          <form method="POST" action="{{route('admin.create.wiv')}}" class="container-fluid" autocomplete="off">
            @csrf
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header card-header-custom">
              <h5 class="m-0 text-bold">Item Request</h5>
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                <div class="mb-3 col-md-3">
                  <label for="employee-name">Employee Name</label>
                  <select class="form-control input-box-custom" name="user_id"required>
                    <option value="" disabled selected>Name</option>
                    @foreach ($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3 col-md-3">
                  <label for="wiv-number">WIV Number</label>
                  <input class="form-control input-box-custom" type="text" name="wiv_number" required>
                </div>
                <div class="mb-3 col-md-3">
                  <label for="wiv-date">WIV Date</label>
                  <input class="form-control input-box-custom" type="date" name="wiv_date" required>
                </div>
              </div>
              <table class="table table-custom mt-3 " id="items_table">
                <thead class="thead-custom ">
                  <tr>
                    <th class="th-custom" scope="col">Item</th>
                    <th class="th-custom" scope="col">RIV</th>
                    <th class="th-custom" scope="col">RIV Date</th>
                    <th class="th-custom" scope="col">PO</th>
                    <th class="th-custom" scope="col">PO Date</th>
                    <th class="th-custom" scope="col">RR</th>
                    <th class="th-custom" scope="col">RR Date</th>
                    <th class="th-custom" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Add your table rows here -->
                  <tr class="tr-custom">
                    <td class="td-custom">
                      <select class="form-control input-box-custom item-select" name=item_id[] required>
                        <option value="" disabled selected>Name</option>
                        @foreach ($items as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </td>
                    <td class="td-custom"><input class="form-control riv-input" type="text" disabled></td>
                    <td class="td-custom"><input class="form-control riv-date-input" type="text" disabled></td>
                    <td class="td-custom"><input class="form-control po-input" type="text" disabled></td>
                    <td class="td-custom"><input class="form-control po-date-input" type="text" disabled></td>
                    <td class="td-custom"><input class="form-control rr-input" type="text" disabled></td>
                    <td class="td-custom"><input class="form-control rr-date-input" type="text" disabled></td>
                    <td>
                      <button class="btn btn-danger mt-1">
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
                    <a href="#" class="btn btn-primary mr-2" id="addRow">
                        <i class="fas fa-plus-circle mr-1"></i>  Add
                    </a>
                    <button type="submit"  class="btn btn-success mr-2 toastCreateRR">
                      <i class="fas fa-check mr-1"></i> Confirm
                    </button>
                    <a href="" class="btn btn-danger">
                        <i class="fas fa-times mr-1"></i>  Reset
                    </a>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </form>
        </div>
      </div><!-- /.container-fluid -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
  <script>
    // Add a new row when the "Add" button is clicked
    $('#addRow').click(function () {
        var tableBody = $('#items_table tbody');
        var newRow = tableBody.find('tr:first').clone();

        // Clear the input values in the new row
        newRow.find('input').val('');

        // Add the new row to the table
        tableBody.append(newRow);
    });

    // Delete a row when the "Delete" button is clicked
    $('#items_table').on('click', '.btn-danger', function () {
        // Check if there's more than one row before deleting
        if ($('#items_table tbody tr').length > 1) {
            $(this).closest('tr').remove();
        } else {
            alert('You cannot delete the last row.');
        }
    });

    // Use event delegation for the "Change" event on a parent element (e.g., the table)
$('#items_table').on('change', '.item-select', function () {
    var selectedItemId = $(this).val();
    var tableRow = $(this).closest('tr');

    // Make an AJAX request to fetch RR data based on the selected item
    $.ajax({
        url: '/get-rr-data/' + selectedItemId,
        type: 'GET',
        success: function (data) {
            // Populate the input fields with RR data
            tableRow.find('.riv-input').val(data.riv);
            tableRow.find('.riv-date-input').val(data.riv_date);
            tableRow.find('.po-input').val(data.po);
            tableRow.find('.po-date-input').val(data.po_date);
            tableRow.find('.rr-input').val(data.rr_number);
            tableRow.find('.rr-date-input').val(data.rr_date);
        }
    });
});
</script>

</body>
</html>