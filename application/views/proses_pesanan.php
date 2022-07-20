<div class="container-fluid" style="padding-top:8rem ;">
    <div class="alert alert-success fw-bold fs-3">Thank You For Order :)</div>

    <h4>Order Card :</h4>

    <div class="table-responsive">
        <table class="table table-sm table-bordered table-striped table-hover " style="overflow-x: scroll;">

            <tr align="center">
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

                    <td align="center"><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td align="center"><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>

                </tr>


            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right" class="fw-bold">Total :</td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
            </tr>
        </table>
    </div>



    <div class="row text-end" style="margin-top: 3rem;">
        <div class="col-md-12">
            <a href="<?php echo base_url('Dashboard/hapus') ?>" class="btn btn-secondary btn-custom">Back To Shop</a>
        </div>
    </div>


</div>