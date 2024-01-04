<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('employee/em-navbar')

<title>Pending MRT</title>

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
              <a class="nav-link active">
                <i class="nav-icon fas fa-hand-paper nav-icon"></i>
                <p>
                  Accountability
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('PendingWiv.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Pending WIV </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('PendingRiv.em') }}" class="nav-link active">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>Pending MRT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ListView.em') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('ItemReq.em') }}" class="nav-link">
                <i class="nav-icon fas fa-thumbs-up nav-icon"></i>
                <p>
                 Send Request        
                </p>
              </a>
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
              <h1 class="m-0">Pending Material Returned Ticket</h1>
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
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-header card-header-custom">
                  <h5 class="m-0 text-bold">Pending MRT List</h5>
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>MRT Number</th>
                        <th>Date</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Unit Cost</th>
                        <th>Total Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($mrts as $mrt)
                      <tr>
                        <td>{{$mrt->mrt_number}}</td>
                        <td>{{$mrt->mrt_date}}</td>
                        <td>
                          @foreach ($mrt->items as $item)
                              {{$item->name}}<br>
                          @endforeach
                        </td>
                        <td>
                          @php
                              $totalCost = 0
                          @endphp
                          @foreach ($mrt->items as $item)
                              {{number_format($item->unit_cost, 2, '.',',')}}<br>
                              @php
                                  $totalCost += $item->unit_cost
                              @endphp
                          @endforeach
                        </td>
                        <td>{{number_format($totalCost, 2, '.',',')}}</td>
                        <td>
                          <div class="text-center">
                            <a href="{{route('AcceptMrt.em', $mrt->id)}}" class="btn btn-primary toastRecieveWIV">
                              Receive <i class="fas fa-check ml-2"></i>
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
          </div><!-- /.container-fluid -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
</body>
<script>
  $(function() {
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