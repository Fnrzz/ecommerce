<div class="container-fluid" style="padding-top:8rem ;">
    <h4>Cart Items :</h4>
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered table-striped table-hover ">

            <tr align="center">
                <th>Action</th>
                <th>No</th>
                <th>Product Name</th>
                <th>Total Items</th>
                <th>Price</th>
                <th>Sub-Total</th>
            </tr>

            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

                <tr>

                    <td align="center"><a href="<?php echo base_url('Dashboard/delete/' . $items['rowid']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i></a></td>
                    <td align="center"><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td align="center"><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>

                </tr>


            <?php endforeach; ?>

            <tr>
                <td colspan="5" align="right" class="fw-bold">Total :</td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
            </tr>
        </table>
    </div>

    <div style="margin-top:2rem;" align="right">
        <a href="<?php echo base_url('Welcome') ?>" class="btn btn-secondary btn-custom">Back To Shop</a>
        <a href="<?php echo base_url('Dashboard/pembayaran') ?>" class="btn btn-success btn-custom">Check Out</a>
    </div>

</div>