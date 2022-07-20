<div class="container-fluid">
    <div class="h3">Edit Data Barang</div>

    <?php foreach ($barang as $brg) : ?>

        <form method="POST" action="<?php echo base_url() . 'admin/Data_barang/update' ?>">

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Kategori :</label>
                <select name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
                    <option>Hoodie</option>
                    <option>Sweater</option>
                    <option>tshirt</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-sm btn-success">Save Changes</button>

        </form>

    <?php endforeach; ?>
</div>