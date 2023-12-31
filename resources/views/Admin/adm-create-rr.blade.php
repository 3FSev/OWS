<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('admin/adm-navbar')

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
                  <a  href="{{ route('CreateMRT.adm') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-ticket-simple nav-icon"></i>
                    <p>
                      Manage MRT
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-box-archive nav-icon"></i>
                    <p>
                      Manage Stock
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('CreateRR.adm') }}" class="nav-link active">
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
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Manage Recieving Report</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                {{--  create rr  --}}
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
                            <div class="card">
                                <div class="card-header card-header-custom">
                                    <h5 class="m-0 text-bold">Create New RR</h5>
                                  </div>
                              <form method="POST" action="{{route('admin.create.rr')}}" class="container-fluid" autocomplete="off">
                                @csrf
                                <div class="card-body">
                                    <div>
                                        <table class="table table-custom">
                                            <thead class="thead-custom">
                                                <tr class="tr-custom">
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
                                                          placeholder="Date" id="datepicker1"  name="cs_date">
                                                      <div class="input-group-append" id="datepicker-icon1">
                                                          <span class="input-group-text"><i class="fa fa-calendar"
                                                                  id="datepicker-icon1"></i></span>
                                                      </div>
                                                  </div>
                                                </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker2"  name="cs_date">
                                                            <div class="input-group-append" id="datepicker-icon2">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon2"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker3"  name="aoc_date">
                                                            <div class="input-group-append" id="datepicker-icon3">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon3"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker4"  name="po_date">
                                                            <div class="input-group-append" id="datepicker-icon4">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon4"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker5"  name="cv_date">
                                                            <div class="input-group-append" id="datepicker-icon5">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon5"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker6" name="dr_date">
                                                            <div class="input-group-append" id="datepicker-icon6">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon6"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker7"  name="inv_date">
                                                            <div class="input-group-append" id="datepicker-icon7">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon7"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="td-rr">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker"
                                                                placeholder="Date" id="datepicker8"  name="or_date">
                                                            <div class="input-group-append" id="datepicker-icon8">
                                                                <span class="input-group-text"><i class="fa fa-calendar"
                                                                        id="datepicker-icon8"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center mt-4 mb-4">
                                        <label class="mb-0">Supplier</label>
                                        <input class="form-control item-name-input" type="text" name="supplier" required>
                                        <label class="mb-0">Address</label>
                                        <input class="form-control item-name-input" type="text" name="address" required>
                                    </div>
                                    <div>
                                        <table class="table table-custom" id="items_table">
                                            <thead class="thead-custom">
                                                <tr class="tr-custom">
                                                    <th class="th-custom" scope="col">Item</th>
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
                    </div>

                    {{--  Item List  --}}
                    <div class="row my-9">
                        <div class="col-12">
                          <div class="card">
                            <!-- /.card-header -->
                            <div class="card-header card-header-custom">
                              <h5 class="m-0 text-bold">Recieving Report List</h5>
                            </div>
                            <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>RR Number</th>
                                    <th>Date</th>
                                    <th>Item List</th>
                                    <th>Supplier</th>
                                    <th>Address</th>
                                    <th>Created by</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($rrs as $rr)
                                      <tr>
                                        <td>{{$rr->rr_number}}</td>
                                        <td>{{$rr->rr_date}}</td>
                                        <td>
                                          @foreach ($rr->items as $item)
                                              {{$item->name}}<br>
                                          @endforeach
                                        </td>
                                        <td>{{$rr->supplier}}</td>
                                        <td>{{$rr->address}}</td>
                                        <td>{{$rr->created_by}}</td>
                                        <td>
                                          @if($rr->approved_at)
                                              <p>Approved by {{$rr->approved_by}}</p>
                                              @if($rr->received_at)
                                                <p>Received</p>
                                              @endif
                                          @elseif($rr->rejected_at)
                                              <p>Rejected by {{$rr->rejected_by}}</p>
                                          @elseif($rr->expired_at)
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
                            <!-- /.card-body -->
                          </div>
                        </div>
                      </div>
                

            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <script>


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

            $(function () {
                $('#example2').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": true,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                  "responsive": true,
                  "columnDefs": [
                    {
                        "targets": [4], // index of the "Action" column
                        "width": "100px" // set the desired width
                    }
                ]
                });
              });
    </script>
</body>

</html>
