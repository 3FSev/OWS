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
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                            <a class="nav-link">
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
                            <h1 class="m-0">Create Recieving Report</h1>
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
                              <form method="POST" action="{{route('admin.create.rr')}}" class="container-fluid" autocomplete="off">
                                @csrf
                                <div class="card-body">
                                    <div>
                                        <table class="table table-custom">
                                            <thead class="thead-custom">
                                                <tr class="tr-custom">
                                                    <th class="th-custom" scope="col">Reference</th>
                                                    <th class="th-custom" scope="col">RIV</th>
                                                    <th class="th-custom" scope="col">CS</th>
                                                    <th class="th-custom" scope="col">AOC</th>
                                                    <th class="th-custom" scope="col">PO</th>
                                                    <th class="th-custom" scope="col">CV</th>
                                                    <th class="th-custom" scope="col">DR</th>
                                                    <th class="th-custom" scope="col">Inv</th>
                                                    <th class="th-custom" scope="col">OR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Add your table rows here -->
                                                <tr class="tr-rr">
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="rr_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="riv_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="cs_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="aoc_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="po_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="cv_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="dr_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="inv_number"></td>
                                                    <td class="td-rr"><input class="form-control" type="text"
                                                            placeholder="Number" name="or_number"></td>
                                                </tr>
                                                <tr class="tr-rr">
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker1" name="rr_date">
                                                            <div class="input-group-append" id="datepicker-icon1">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon1"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker2"  name="riv_date">
                                                            <div class="input-group-append" id="datepicker-icon2">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon2"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker3"  name="cs_date">
                                                            <div class="input-group-append" id="datepicker-icon3">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon3"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker4"  name="aoc_date">
                                                            <div class="input-group-append" id="datepicker-icon4">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon4"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker5"  name="po_date">
                                                            <div class="input-group-append" id="datepicker-icon5">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon5"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker6"  name="cv_date">
                                                            <div class="input-group-append" id="datepicker-icon6">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon6"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker7" name="dr_date">
                                                            <div class="input-group-append" id="datepicker-icon7">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon7"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker8"  name="inv_date">
                                                            <div class="input-group-append" id="datepicker-icon8">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon8"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker9"  name="or_date">
                                                            <div class="input-group-append" id="datepicker-icon9">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon9"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center mt-4 mb-4">
                                        <label class="mb-0">Supplier</label>
                                        <input class="form-control item-name-input" type="text" name="supplier">
                                        <label class="mb-0">Address</label>
                                        <input class="form-control item-name-input" type="text" name="address">
                                    </div>
                                    <div>
                                        <table class="table table-custom" id="items_table">
                                            <thead class="thead-custom">
                                                <tr class="tr-custom">
                                                    <th class="th-custom" scope="col">Item</th>
                                                    <th class="th-custom" scope="col">Delivered</th>
                                                    <th class="th-custom" scope="col">Accepted</th>
                                                    <th class="th-custom" scope="col">Unit Cost</th>
                                                    <th class="th-custom" scope="col">Extended Cost</th>
                                                    <th class="th-custom" scope="col">Freight</th>
                                                    <th class="th-custom" scope="col">Category</th>
                                                    <th class="th-custom" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="tr-custom">
                                                    <td class="td-custom"><input class="form-control" type="text"
                                                            name="name[]" placeholder="Name"></td>
                                                    <td class="td-custom"><input class="form-control" type="number"
                                                            name="delivered[]"></td>
                                                    <td class="td-custom"><input class="form-control" type="number"
                                                            name="accepted[]"></td>
                                                    <td class="td-custom"><input class="form-control" type="text"
                                                            name="unit_cost[]"></td>
                                                    <td class="td-custom"><input class="form-control" type="text"
                                                            name="extended_cost[]"></td>
                                                    <td class="td-custom"><input class="form-control" type="text"
                                                            name="freight[]"></td>
                                                    <td class="td-custom">
                                                        <select name="category[]" class="form-control select2"
                                                            style="width: 100%;" required>
                                                            <option value="" disabled selected>Category</option>
                                                            @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger mt-1 ">
                                                          <i class="fas fa-trash"></i>
                                                        </button>
                                                      </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group text-right">
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-primary mr-2" id="addRow">
                                                <i class="fas fa-plus-circle mr-1"></i> Add
                                            </a>
                                            <button type="submit"  class="btn btn-success mr-2 toastCreateRR">
                                              <i class="fas fa-check mr-1"></i> Confirm
                                            </button>
                                            <a href="" class="btn btn-danger">
                                                <i class="fas fa-times mr-1"></i> Reset
                                            </a>
                                        </div>
                                    </div>
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
    <script>
        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker1').datepicker({
                autoclose: true
            });
            $('#datepicker-icon1').on('click', function () {
                $('#datepicker1').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker2').datepicker({
                autoclose: true
            });
            $('#datepicker-icon2').on('click', function () {
                $('#datepicker2').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker3').datepicker({
                autoclose: true
            });
            $('#datepicker-icon3').on('click', function () {
                $('#datepicker3').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker4').datepicker({
                autoclose: true
            });
            $('#datepicker-icon4').on('click', function () {
                $('#datepicker4').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker5').datepicker({
                autoclose: true
            });
            $('#datepicker-icon5').on('click', function () {
                $('#datepicker5').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker6').datepicker({
                autoclose: true
            });
            $('#datepicker-icon6').on('click', function () {
                $('#datepicker6').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker7').datepicker({
                autoclose: true
            });
            $('#datepicker-icon7').on('click', function () {
                $('#datepicker7').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker8').datepicker({
                autoclose: true
            });
            $('#datepicker-icon8').on('click', function () {
                $('#datepicker8').datepicker('show');
            });
        });

        $(document).ready(function () {
            // Initialize the date picker
            $('#datepicker9').datepicker({
                autoclose: true
            });
            $('#datepicker-icon9').on('click', function () {
                $('#datepicker9').datepicker('show');
            });
        });



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

    </script>
</body>

</html>
