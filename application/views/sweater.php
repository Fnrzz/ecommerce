<!-- Card -->
<section id="product" style="padding-top: 10rem;">
    <div class="container">
        <div class="row mb-5">
            <h4 class="text-center fw-bold ">All Products Sweater:</h4>
        </div>
        <div class="row ">
            <?php foreach ($sweater as $brg) : ?>
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