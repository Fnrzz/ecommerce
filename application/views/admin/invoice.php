<div class="container-fluid">
    <h4>Invoice Pemesanan :</h4>

    <div class="table-responsive">
        <table class="table table-sm table-striped table-bordered table-hover" style="overflow-x: scroll;">

            <thead>
                <tr class="text-center">
                    <th>Id invoice</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat Pengiriman</th>
                    <th>No HP</th>
                    <th>Kurir</th>
                    <th>Pembayaran</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Batas Pembayaran</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>

            <?php foreach ($invoice as $inv) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $inv->id ?></td>
                        <td><?php echo $inv->nama ?></td>
                        <td><?php echo $inv->alamat ?></td>
                        <td><?php echo $inv->no_hp ?></td>
                        <td><?php echo $inv->kurir ?></td>
                        <td><?php echo $inv->pembayaran ?></td>
                        <td><?php echo $inv->tgl_pesan ?></td>
                        <td><?php echo $inv->batas_bayar ?></td>
                        <td>
                            <?php echo anchor('admin/Invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
                        </td>
                        <td>
                            <?php echo anchor('admin/Invoice/hapus/' . $inv->id, '
                            <div class="btn btn-success btn-sm">
                                 Selesai
                            </div>') ?>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>


        </table>
    </div>
</div>