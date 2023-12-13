<html>
@include('theme/plugins-theme')
@include('theme/preloader')
@include('theme/navbar')

<title>Review MRT Request</title>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-green elevation-4 ">
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>WIV Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('MrtRequest.man') }}" class="nav-link ">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p>MRT Request</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('RRrequest.man') }}" class="nav-link active">
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
              <h1 class="m-0">Review Receiving Report</h1>
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
              <div class="card-body">
                <div>
                  <table class="table table-custom">
                    <thead class="thead-custom">
                      <tr class="tr-custom">
                        <th class="th-custom" scope="col">RR</th>
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
                      <tr>
                        <td>{{$rr->rr_number}}</td>
                        <td>{{$rr->riv}}</td>
                        <td>{{$rr->cs}}</td>
                        <td>{{$rr->aoc}}</td>
                        <td>{{$rr->po}}</td>
                        <td>{{$rr->cv}}</td>
                        <td>{{$rr->dr}}</td>
                        <td>{{$rr->inv}}</td>
                        <td>{{$rr->or}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-group d-flex justify-content-between align-items-center mt-4 mb-4">
                  <label class="mb-0">Supplier</label>
                  {{$rr->supplier}}
                  <label class="mb-0">Address</label>
                  {{$rr->address}}
                </div>

                <table class="table table-custom">
                  <thead class="thead-custom ">
                    <tr>
                      <th>Item</th>
                      <th>Unit Cost</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rr->items as $item)
                        <tr>
                          <td>{{$item->name}}</td>
                          <td>{{ number_format($item->unit_cost, 2, '.', ',') }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>  
              </div>            
            </div>
          </div>
          <div class="form-group">
            <div class="d-flex justify-content-between">
              <a href="{{ route('RRrequest.man') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Back
              </a>
              <div>
                <a href="{{ route('RrApprove.man', $rr->id) }}" class="btn btn-success toastApproveMRT">
                  <i class="fas fa-check"></i> Approve
                </a>
                <a href="" class="btn btn-danger">
                  <i class="fas fa-times"></i> Decline
                </a>
              </div>
            </div>
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