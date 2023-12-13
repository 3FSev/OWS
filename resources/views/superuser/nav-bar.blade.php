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
        
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <a href="{{ $notification->url }}" class="dropdown-item">
                        <i class="fas fa-bell mr-2"></i> {{ $notification->description }}
                        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                @endforeach
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
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <i class="fas fa-sign-out-alt" style="color: grey;"></i>
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
    $(document).ready(function () {
        updateNotifications();

        function updateNotifications() {
            // Fetch notifications via AJAX
            $.get('/get-notifications', function (data) {
                let notifications = data.notifications;
                let badge = $('#notificationBadge');
                let count = $('#notificationCount');
                let dropdown = $('#notificationDropdown');

                // Update badge count
                badge.text(notifications.length);

                // Update dropdown content
                count.text(notifications.length + ' Notifications');
                dropdown.empty();

                if (notifications.length > 0) {
                    dropdown.append('<div class="dropdown-divider"></div>');

                    notifications.forEach(function (notification) {
                        dropdown.append('<a href="' + notification.url + '" class="dropdown-item">' +
                            '<i class="fas fa-bell mr-2"></i> ' + notification.description +
                            '<span class="float-right text-muted text-sm">' + notification.created_at + '</span>' +
                            '</a><div class="dropdown-divider"></div>');
                    });
                } else {
                    dropdown.append('<span class="dropdown-item dropdown-header">No Notifications</span>');
                }
            });
        }

        // Call the updateNotifications function periodically
        setInterval(updateNotifications, 60000); // Update every 60 seconds
    });
</script>