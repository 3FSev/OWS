<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">4 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">View</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="{{ route('AccSetting.man') }}" class="dropdown-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <i class="fas fa-cog" style="color: grey;"></i>
                <span class="ml-2">Account Setting</span>
            </div>
        </a>
        <a href="{{ route('ChangePswd.man') }}" class="dropdown-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <i class="fas fa-lock" style="color: grey;"></i>
                <span class="ml-2">Change Password</span>
            </div>
        </a>
        <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <i class="fas fa-sign-out-alt" style="color: grey;"></i>
                <span class="ml-2">Logout</span>
            </div>
        </a>
    </div>
    
  </li>
  </ul>
</nav>
<!-- /.navbar -->