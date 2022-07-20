<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #9eeaf9">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo base_url('Welcome/#about') ?>">My <i class="fab fa-shopify fs-4"></i>tore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="<?php echo base_url('Welcome/#home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('Kategori/hoodie') ?>">Hoodie</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Kategori/sweater') ?>">Sweater</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Kategori/tshirt') ?>">T-Shirt</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none" href="<?php echo base_url('Dashboard/detail_keranjang') ?>">
                            <?php
                            $keranjang = '<i class="fas fa-shopping-bag fw-bold fs-4"></i> ' . $this->cart->total_items() . ''
                            ?>

                            <?php echo  $keranjang  ?>
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink" style="font-size: small;">
                            <?php if ($this->session->userdata('email')) { ?>
                                <li align="center"><span class="dropdown-item"><?php echo $this->session->userdata('email') ?></span></li>
                                <li align="center"><span class="dropdown-item"><?php echo anchor('Auth/logout', 'Logout') ?></span></li>
                            <?php } else { ?>
                                <li align="center"><span class="dropdown-item "><?php echo anchor('Auth/login', 'Login') ?></span></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->