<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="\dashboard" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Library Management </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('profile', $data->first()) }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <div class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                    
                    <li class="nav-item">
                            <li class="nav-item">
                                <a href="/StudentMember" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Membership List</p>
                                </a>
                            </li>
                    </li>
                    <li class="nav-item">
                            <li class="nav-item">
                                <a href="/StudentRegIssue" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Register Issues</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/StudentIssueList" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Issued List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/StudentLost" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lost Book</p>
                                </a>
                            </li>
                        </ul>
                    </li>
            </div>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>