<div class="container-fluid">
    <h4>Detail Pesanan : <div class="btn btn-sm btn-info"><?php echo $invoice->id ?></div>
    </h4>

    <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered table-striped" style="overflow-x: scroll;">
            <thead>
                <tr align="center">
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Product</th>
                    <th>Jumlah Pesanan</th>
                    <th>Harga Satuan</th>
                    <th>Sub-total</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                $total = 0;
                foreach ($pesanan as $psn) :
                    $subtotal = $psn->jumlah * $psn->harga;
                    $total += $subtotal;
                ?>
                    <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $psn->id_brg ?></td>
                        <td><?php echo $psn->nama_brg ?></td>
                        <td align="center"><?php echo $psn->jumlah ?></td>
                        <td align="right">Rp. <?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                        <td align="right">Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="5" align="right">Total :</td>
                    <td align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                </tr>
            </tbody>

        </table>

        <a href="<?php echo base_url('admin/Invoice') ?>" class="btn btn-sm btn-secondary">Back To Invoice</a>
    </div>

</div>