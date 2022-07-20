<!-- Breadcrumb -->
<div class="container co-custom" style="padding-top: 7rem">
    <?php foreach ($barang as $brg) : ?>
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Welcome') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $brg->nama_brg ?></li>
                </ol>
            </nav>
        </div>
    <?php endforeach; ?>
</div>
<!-- Akhir Breacrumb -->

<!-- Product -->
<div class="container">
    <div class="card shadow-sm mt-4" style="border-radius:15px">
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8 mt-3" data-aos="fade-left">
                        <table class="table fw-bold table-sm ">
                            <tr>
                                <td>Name Product</td>
                                <td>:</td>
                                <td><?php echo $brg->nama_brg ?></td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td><?php echo $brg->keterangan ?></td>
                            </tr>

                            <tr>
                                <td>Product</td>
                                <td>:</td>
                                <td><?php echo $brg->kategori ?></td>
                            </tr>

                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>Rp. <?php echo
                                        number_format($brg->harga, 0, ',', '.')  ?></td>
                            </tr>

                            <tr>
                                <td>Stock</td>
                                <td>:</td>
                                <td><?php echo $brg->stok ?> pcs</td>
                            </tr>
                        </table>
                        <p class="fw-bold mb-4">We provide the best in our products and we have chosen quality materials and will not disappoint our customers. We also always re-check the goods that we will sell to customers so that customers do not have to doubt about our products.</p>


                        <?php echo anchor('Dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-success btn-custom  mb-2 ">Buy Now</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Akhir Product -->