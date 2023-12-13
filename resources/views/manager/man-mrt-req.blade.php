<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>MRT Request</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"> 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4 ">

    <!-- Brand Logo -->
    <div class="d-flex align-items-center">
      <a href="#" class="brand-link" style="display: flex; align-items: center;">
        <img src="{{ asset('assets/ormeco-logo.png') }}" alt="Ormeco Logo" class="brand-image-xl img-circle elevation-3">
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
          <li class="nav-item menu-open">
            <a href="{{ route('stockList.man') }}" class="nav-link ">
              <i class="nav-icon fas fa-box nav-icon"></i>
              <p>
                Stock List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-envelope nav-icon"></i>
              <p>
                Request Approval
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('WivRequest.man') }}" class="nav-link ">
                        {{--  <i class="far fa-circle nav-icon"></i>  --}}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>WIV Request</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="{{ route('MrtRequest.man') }}" class="nav-link active">
                  {{--  <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>MRT Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('RRrequest.man') }}" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i>  --}}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <p>RR Request</p>
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
            <h1 class="m-0">Material Return Ticket</h1>
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
                <h5 class="m-0 text-bold">MRT Request Details</h5>
              </div>     
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>District</th>
                    <th>MRT Number</th>
                    <th>MRT Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($mrts as $mrt)
                      <tr>
                        <td>{{$mrt->user->name}}</td>
                        <td>{{$mrt->user->department->name}}</td>
                        <td>{{$mrt->user->district->name}}</td>
                        <td>{{$mrt->mrt_number}}</td>
                        <td>{{$mrt->mrt_date}}</td>
                        <td>
                          <div class="text-center">
                          <a href="{{ route('MrtReview.man', $mrt->id) }}" class="btn btn-primary">
                            View
                            &nbsp;<i class="far fa-eye"></i>
                          </a>
                          </div>                      
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
      
      <div class="content-wapper">
        <div class="content-header mt-lg-4">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Approved MRT List</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header card-header-custom">
              <h5 class="m-0 text-bold">MRT Details Lists</h5>
            </div>     
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Employee Name</th>
                  <th>Department</th>
                  <th>District</th>
                  <th>MRT Number</th>
                  <th>MRT Date</th>
                  <th>Approved By</th>
                  <th>Date Approved</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>sample</td>
                      <td>sample</td>
                      <td>sample</td>
                      <td>sample</td>
                      <td>sample</td>
                      <td>sample</td>
                      <td>sample</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
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
</html>
