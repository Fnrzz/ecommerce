<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" data-aos="fade-down">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome To <br>My <i class="fab fa-shopify "></i>tore!</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="POST" action="<?php echo base_url('Auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                            <?php echo form_error('email', '<div class="text-danger small ml-3 ">', '</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('Registrasi/index') ?>">Create an Account!</a>
                                    </div>
                                    <div class=" mt-3">
                                        <a class="small" href="<?php echo base_url('Welcome') ?>">
                                            <- Back to Shop? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>