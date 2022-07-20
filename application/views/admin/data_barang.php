<div class="container-fluid">
    <button class="btn btn-sm btn-success mb-3 " data-toggle="modal" data-target="#tambah_barang"> <i class=" fas fa-plus fa-sm"></i> Add Items</button>

    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td>Rp. <?php echo number_format($brg->harga, 0, ',', '.')  ?></td>
                <td><?php echo $brg->stok ?></td>

                <td>
                    <?php echo anchor('admin/Data_barang/edit/' . $brg->id_brg, '
                    <div class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"> Edit</i>
                    </div>') ?>
                </td>
                <td>
                    <?php echo anchor('admin/Data_barang/hapus/' . $brg->id_brg, '
                    <div class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"> Delete</i>
                    </div>') ?>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Items</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'admin/Data_barang/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Barang :</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan :</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kategori :</label>
                        <select name="kategori" class="form-control">
                            <option>Hoodie</option>
                            <option>Sweater</option>
                            <option>tshirt</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga :</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Stok :</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar Product :</label>
                        <input type="file" name="gambar" class="form-control " style="height: 50px;">
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>