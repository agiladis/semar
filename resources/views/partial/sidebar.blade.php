<aside class="main-sidebar sidebar-light-success elevation-4" {{-- style="background-image: linear-gradient(to right, rgba(95, 203, 157,1), rgba(255,0,0,0));" --}}>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/img/logo-upn.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">UPN "V" YK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Junior</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Akademik
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Rekapitulasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard/keuangan' }}" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Keuangan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/kemahasiswaan' }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kemahasiswaan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Penelitian Pengabdian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            IKU
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Kepegawaian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ '/kepegawaian/dosen' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ '/kepegawaian/tendik' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tendik</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ '/dashboard' }}" class="nav-link">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            Fungsional
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>
