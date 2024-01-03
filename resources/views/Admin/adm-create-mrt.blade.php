<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')

<title>Create MRT</title>

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
                            <a href="{{ route('CreateMRT.adm') }}" class="nav-link active">
                                <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                                <p>
                                    Manage MRT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ItemList.adm') }}" class="nav-link">
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
                            <h1 class="m-0">Manage Material Return Ticket</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span style="color: white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span style="color: white" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="row mb-5">
                        <div class="col-12">
                            <form method="POST" action="{{route('admin.create.mrt')}}" autocomplete="off">
                                @csrf
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-header card-header-custom">
                                        <h5 class="m-0 text-bold">Return Item Request</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                                            <div class="mb-3 col-md-3">
                                                <label for="employee-name">Employee Name</label>
                                                <select class="form-control input-box-custom" id="userSelect"
                                                    name="user_id" required>
                                                    <option value="" selected disabled></option>
                                                    @foreach ($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <table class="table mrt-table-custom mt-3 mb-3">
                                                <thead class="mrt-thead-custom">
                                                    <tr class="">
                                                        <th class="" scope="col">Item Name</th>
                                                        <th class="" scope="col">Status</th>
                                                        <th class="c-mrt-th" scope="col">Usable</th>
                                                        <th class="c-mrt-th" scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="itemList">
                                                    <!-- Add your table rows here -->
                                                    <tr class="mrt-tr-custom">
                                                        <td class="c-mrt-td">
                                                            <select class="form-control" id="itemsSelect" name="items[]"
                                                                required></select>
                                                        </td>
                                                        <td class="c-mrt-td">
                                                            <div class="c-mrt-ac">
                                                                <input type="text" class="form-control" name="status[]">
                                                            <div>
                                                        </td>
                                                        <td class="c-mrt-td">
                                                            <div class="c-mrt-ac">
                                                                <input class="form-control" type="checkbox"
                                                                    name="usable[]">
                                                                <div>
                                                        </td>
                                                        <td class="c-mrt-td">
                                                            <div class="c-mrt-ac">
                                                                <button class="btn btn-danger mt-1">
                                                                    <i class=" fas fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <div class="d-flex justify-content-end  align-items-center mr-2">
                                            <a href="#" class="btn btn-primary mr-2" id="addRow">
                                                <i class="fas fa-plus-circle mr-1"></i> Add
                                            </a>
                                            <button type="submit" class="btn btn-success mr-2 toastCreateRR">
                                                <i class="fas fa-check mr-1"></i> Confirm
                                            </button>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fas fa-times mr-1"></i> Reset
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row my-9">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-header card-header-custom">
                                    <h5 class="m-0 text-bold">MRT list</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>MRT Number</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>District</th>
                                                <th>Item Name</th>
                                                <th>Category</th>
                                                <th>Unit Cost</th>
                                                <th>Total Cost</th>
                                                <th>Date</th>
                                                <th>Created by</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mrts as $mrt)
                                            <tr>
                                                <td>{{$mrt->mrt_number}}</td>
                                                <td>{{$mrt->user->name}}</td>
                                                <td>{{$mrt->user->department->name}}</td>
                                                <td>{{$mrt->user->district->name}}</td>
                                                <td>@foreach ($mrt->items as $item)
                                                    {{$item->name}}<br>
                                                    @endforeach</td>
                                                <td>@foreach ($mrt->items as $item)
                                                    {{$item->category->name}}<br>
                                                    @endforeach</td>
                                                <td>
                                                    @php
                                                    $totalCost = 0;
                                                    @endphp
                                                    @foreach ($mrt->items as $item)
                                                        {{number_format($item->unit_cost, 2, '.', ',')}}<br>
                                                        @php
                                                            $totalCost += $item->unit_cost;
                                                        @endphp
                                                    @endforeach
                                                </td>
                                                <td> {{number_format($totalCost, 2, '.', ',') }}</td>
                                                <td>{{$mrt->mrt_date}}</td>
                                                <td>{{$mrt->created_by}}</td>
                                                <td>
                                                    @if($mrt->approved_at)
                                                        <p>Approved by {{$mrt->approved_by}}</p>
                                                        @if($mrt->received_at)
                                                            <p>Received</p>
                                                        @endif
                                                    @elseif($mrt->rejected_at)
                                                        <p>Rejected by {{$mrt->rejected_by}}</p>
                                                    @elseif($mrt->expired_at)
                                                        <p>Request has expired</p>
                                                    @else
                                                        <p>Waiting for approval</p>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
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
                    $('#itemsSelect').append('<option value="' + data[i].id + '">' + data[i].name +
                        '</option>');
                }
            }
        });
    });

    // Add a new row when the "Add" button is clicked
    $('#addRow').click(function () {
        var tableBody = $('#itemList');
        var newRow = tableBody.find('tr:first').clone();

        // Clear the input values in the new row
        newRow.find('select').val('');

        // Add the new row to the table
        tableBody.append(newRow);
    });

    // Delete a row when the "Delete" button is clicked
    $('table').on('click', '.btn-danger', function () {
        // Check if there's more than one row before deleting
        if ($('#itemList tr').length > 1) {
            $(this).closest('tr').remove();
        } else {
            alert('You cannot delete the last row.');
        }
    });

    $(function () {
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
