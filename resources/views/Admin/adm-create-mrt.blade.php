
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
              <form method="POST" action="{{route('admin.create.mrt')}}" class="container-fluid" autocomplete="off">
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
                      <select class="form-control input-box-custom" id="userSelect" name="user_id" required>
                        <option value="" selected disabled></option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <table class="table table-custom mt-3 ">
                      <thead class="thead-custom ">
                          <tr>
                              <th class="th-custom" scope="col">Item Name</th>
                              <th class="th-custom" scope="col">Usable</th>
                              <th class="th-custom" scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <!-- Add your table rows here -->
                          <tr class="tr-rr">
                              <td class="td-rr">
                                  <select class="form-control" id="itemsSelect" name="items[]" required></select>
                              </td>
                              <td class="td-rr">
                                <input type="checkbox" name="usable[]">
                            </td>
                              <td>
                                <div>
                                    <button class="btn btn-danger mt-1">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
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
                        <a href="#" class="btn btn-danger">
                            <i class="fas fa-times mr-1"></i>  Reset
                        </a>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
            </form>
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
<script>
  // When a user is selected, fetch the corresponding items and update the items dropdown
  $('#userSelect').change(function () {
      var userId = $(this).val();

      // Make an AJAX request to fetch items for the selected user
      $.ajax({
          url: '/get-items-for-user/' + userId, // Replace with your actual route
          type: 'GET',
          success: function (data) {
              // Clear existing options
              $('#itemsSelect').empty();

              // Populate options based on the data received
              for (var i = 0; i < data.length; i++) {
                  $('#itemsSelect').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
              }
          }
      });
  });

  // Add a new row when the "Add" button is clicked
  $('#addRow').click(function () {
        var tableBody = $('table tbody');
        var newRow = tableBody.find('tr:first').clone();

        // Clear the input values in the new row
        newRow.find('select').val('');

        // Add the new row to the table
        tableBody.append(newRow);
    });

    // Delete a row when the "Delete" button is clicked
    $('table').on('click', '.btn-danger', function () {
        // Check if there's more than one row before deleting
        if ($('table tbody tr').length > 1) {
            $(this).closest('tr').remove();
        } else {
            alert('You cannot delete the last row.');
        }
    });
</script>