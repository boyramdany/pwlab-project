        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('admin') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?= base_url('user'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?= base_url('user/edit'); ?>">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('user/changepassword'); ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mahasiswa
            </div>

            <li class="nav-item ">
                <a class="nav-link pb-0" href="<?= base_url('mahasiswa'); ?>">
                    <i class="fas fa-address-book"></i>
                    <span>Daftar Mahasiswa</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('mahasiswa/jadwal'); ?>">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Jadwal</span></a>
            </li>
            <!-- <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('mahasiswa/nilai'); ?>">
                    <i class="fas fa-fw fa-clipboard-check"></i>
                    <span>Nilai</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar -->