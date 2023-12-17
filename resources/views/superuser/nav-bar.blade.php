<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/ormeco-logo.png') }}" alt="AdminLTELogo" height="60" width="60">
    <div>
        <h5 class="pt-3"><strong>Loading...</strong></h5>
    </div>
</div>

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
            <a class="nav-link" data-toggle="dropdown" href="#" id="notificationDropdownToggle">
                <i class="far fa-bell"></i>
                <span id="notificationBadge" class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications->count() }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="notificationDropdown">
                <span class="dropdown-item dropdown-header" id="notificationCount">{{ auth()->user()->unreadNotifications->count() }} Notifications</span>
                <div class="dropdown-divider"></div>
                
                @foreach(auth()->user()->notifications()->unread()->get() as $notification)
                    <a href="{{ $notification->url }}" class="dropdown-item" onclick="markNotificationAsRead('{{ $notification->id }}')">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <i class="fas fa-bell mr-2"></i>
                                {{ $notification->message }}
                                <div class="text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
                
                <div class="dropdown-divider"></div>
            </div>
        </li>
        
        
    
        <!-- Other navbar items -->
        <!-- ... -->
    
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
                <a href="{{ route('ChangePassword.sup') }}" class="dropdown-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lock" style="color: grey;"></i>
                        <span class="ml-2">Change Password</span>
                    </div>
                </a>
                
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-sign-out-alt" style="color: grey;"></i>
                        <span class="ml-2">{{ __('Logout') }}</span>
                    </div>
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<script>
    function markNotificationAsRead(notificationId) {
        // Make an AJAX request to mark the notification as read
        $.ajax({
            url: '/mark-notification-as-read/' + notificationId,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function () {
                // Update the badge count
                $('#notificationBadge').text(parseInt($('#notificationBadge').text()) - 1);
            },
        });
    }
</script>