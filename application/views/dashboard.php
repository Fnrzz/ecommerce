<!-- Awal SideBar -->
<section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/Sidebar/1.jpg') ?>" class="d-block w-100" />
                <div class="carousel-caption d-sm-block d-md-block">
                    <h5 class="my-shadow">My <i class="fab fa-shopify fs-4"></i>tore</h5>
                    <p class="my-shadow">Best Store Of All Clothes Store</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/Sidebar/2.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/Sidebar/3.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
        </div>
    </div>
</section>
<!-- AKhir Sidebar -->

<!-- Awal About -->
<section id="about" style="padding-top: 10rem">
    <div class="container text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-sm-12" data-aos="fade-right">
                <img src="<?php echo base_url('assets/img/About/1.jpg') ?>" style="height: 320px; width: 250px" class="rounded d-none d-md-block" />
            </div>
            <div class="col-md-4 col-sm-12" data-aos="fade-left">
                <p class="fw-bold">What is My <i class="fab fa-shopify fs-4"></i>tore ?</p>
                <p>We are a store that provides quality clothing at affordable prices. we sell hoodies, sweaters, and t-shirts with high quality materials.</p>
            </div>
        </div>
    </div>
</section>
<!-- akhir About -->

<!-- Card -->
<section id="product" style="padding-top: 10rem;">
    <div class="container">
        <div class="row mb-5">
            <h4 class="text-center fw-bold ">All Products :</h4>
        </div>
        <div class="row ">
            <?php foreach ($barang as $brg) : ?>
                <div class="col-3 mb-3 d-none d-md-block">
                    <div class="card border-light shadow-sm pos-custom" data-aos="zoom-in" style="width: 15rem">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo $brg->nama_brg ?></h5>
                            <p class="card-text  mt-3"><?php echo $brg->keterangan ?></p>
                            <p>Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?></p>
                            <?php echo anchor('Dashboard/detail/' . $brg->id_brg, '<div class="btn btn-secondary btn-custom d-grid mb-2 ">Show Detail</div>') ?>
                            <?php echo anchor('Dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success btn-custom d-grid mb-2 ">Buy</div>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-3 d-md-none d-sm-block">
                    <div class="card border-light shadow-sm pos-custom" data-aos="zoom-in" style="width: 10rem; ">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo $brg->nama_brg ?></h5>
                            <p class="card-text  mt-3"><?php echo $brg->keterangan ?></p>
                            <p>Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?></p>
                            <?php echo anchor('Dashboard/detail/' . $brg->id_brg, '<div class="btn btn-secondary btn-custom d-grid mb-2 ">Show Detail</div>') ?>
                            <?php echo anchor('Dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success btn-custom d-grid mb-2 ">Buy</div>') ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Akir Card -->