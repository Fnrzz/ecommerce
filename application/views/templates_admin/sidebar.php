<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fab fa-shopify"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="na navbar-nav ml-auto">
                        <?php if (
                            $this->session->userdata('email')
                        ) { ?>
                            <li>
                                <div>Selamat Datang <strong><?php echo $this->session->userdata('email'); ?></strong></div>
                            </li>
                            <li class="ml-2"><?php echo anchor('Auth/logout', 'Logout') ?></li>
                        <?php } else { ?>
                            <li><?php echo anchor('Auth/login', 'Login') ?></li>
                        <?php } ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->