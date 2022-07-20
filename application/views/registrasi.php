<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto" data-aos="fade-down">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Create an Account!</h1>
                            </div>
                            <form method="POST" action="<?php echo base_url('Registrasi/index') ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputName" placeholder="Your Name" name="nama">
                                    <?php echo form_error('name', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                    <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-grup">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                    <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                    Register Account
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('Auth/login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>