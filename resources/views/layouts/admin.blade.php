<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('admin.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('admin.home') }}" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }} {{ \Illuminate\Support\Facades\Auth::user()->surname }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('admin.home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>
                    @role('Admin')
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}" class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}" >
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                Roles
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    @endrole
                    @role('Admin')
                    <li class="nav-item">
                        <a href="{{ route('permissions.index') }}" class="nav-link {{ (request()->is('permissions*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                Permissions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>
                    @endrole
                    @role('Admin')
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    @endrole
                    @role('Users')
                    <li class="nav-item">
                        <a href="{{ route('resume') }}" class="nav-link {{ (request()->is('resume')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Resume
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    @endrole
                    <li class="nav-item">
                        <form  action="{{ route('logout') }}" method="POST" class="nav-item d-none d-sm-inline-block">
                            @csrf
                            <button type="submit" class="nav-link btn btn-danger btn-sm">Logout</button>
                        </form>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
@yield('admin.content')
<!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>&copy; <?php echo \Illuminate\Support\Carbon::now()->format('d.m.Y') .'   '?><a href="#">Laravel</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@yield('admin.js')
</body>
</html>
