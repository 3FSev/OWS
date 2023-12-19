<!DOCTYPE html>
<html lang="en">
@include('theme/plugins-theme')

<title>Manage District</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('theme/nav-bar')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4"
   {{--  style="background-color: #285430"  --}}
   >
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
            <a href="{{ route('dashboard.sup') }}" class="nav-link">
              <i class="nav-icon fas fa-home nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('create.sup') }}" class="nav-link ">
                <i class="nav-icon fas fa-user nav-icon"></i>
                <p>
                    Manage User
                </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('manageDept.sup') }}" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Manage Department 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('manageDist.sup') }}" class="nav-link active">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Manage Districts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('userActivities.sup') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                User Activities
              </p>
            </a>
          </li>
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
            <h1 class="m-0">Manage District</h1>
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
            <span aria-hidden="true" style="color: white;">&times;</span>
          </button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="color: white;">&times;</span>
          </button>
        </div>
        @endif
        
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <h2 class="card-title">Districts List</h2>
                      <div class="card-tools">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                              <i class="fas fa-plus-circle" style="color: #ffffff;"></i>&nbsp;
                              <span>Add</span>
                          </button>
                      </div>
                  </div>
                  <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title">Add New District</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form method="POST" action="{{route('superuser.create.district')}}" class="container-fluid" autocomplete="off">
                                @csrf
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="col-form-label-md">District Name</label>
                                  <input class="form-control" name="district" type="text" placeholder="District Name">
                                  </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                              </form>
                          </div>
                          <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                  </div>
              </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th class="text-left">Name</th>
                      <th class="text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($districts as $district)
                      <tr data-id="{{ $district->id }}">
                          <td>{{ $district->name }}</td>
                          <td>
                              <div class="text-center">
                                  <button type="button" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#modal-edit">
                                      <i class="fas fa-pencil-alt" style="color: white;"></i>
                                  </button>
                                  <form method="POST" action="{{ route('destroy.district', $district->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are You Sure')" type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                              </div>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit District Name</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="editForm" method="POST" action="{{ route('district.update', ['id' => '__district_id__']) }}">
                              @csrf
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label class="col-form-label-md">District Name</label>
                                      <input name="districtName" id="districtNameInput" class="form-control" type="text" placeholder="District Name">
                                  </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Confirm</button>
                              </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "columnDefs": [
          {
              "targets": [1], // index of the "Action" column
              "width": "150px" // set the desired width
          }
      ]
      });
    });

    var selectedId;

  $('.btn-edit').click(function () {
      selectedId = $(this).closest('tr').data('id');
      $('#editForm').attr('action', '{{ route("district.update", ["id" => "__district_id__"]) }}'.replace('__district_id__', selectedId));
  });
  </script>
</body>
</html>
