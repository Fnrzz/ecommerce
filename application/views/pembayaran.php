<div class="container-fluid" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-8 col-sm-8">
            <div class="alert alert-info fw-bold">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {

                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total Payments : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br>
            <h3 class="mb-3 fw-bold">Form Payments : </h3>

            <form method="POST" action="<?php echo base_url() ?>Dashboard/proses_pesanan">

                <div class="form-group">
                    <label class="fw-bold my-2"> Full Name : </label>
                    <input type="text" name="nama" placeholder="Your Full Name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="fw-bold my-2"> Address : </label>
                    <input type="text" name="alamat" placeholder="Your Address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="fw-bold my-2"> Phone Number : </label>
                    <input type="number" name="no_hp" placeholder="Your Phone Number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="fw-bold my-2"> Choose Courier : </label>
                    <select name="kurir" class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS INDONESIA</option>
                        <option>J&T</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="fw-bold my-2"> Payment Options : </label>
                    <select name="pembayaran" class="form-control">
                        <option>BRI</option>
                        <option>MANDIRI</option>
                        <option>BCA</option>
                        <option>DANA</option>
                    </select>
                </div>

                <div class="form-group mt-3 text-danger">
                    <label class="fw-bold " style="font-size: 12px;">*The order will be continued via whatsapp which will be sent by our admin</label><br>
                    <label class="fw-bold " style="font-size: 12px;">*Enter all form data correctly</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-custom  mt-3">Check Out</button>
                </div>
            </form>
        <?php
                } else {
                    echo "Keranjang Belanja Masih Kosong";
                }

        ?>
        </div>
        <div class="col-md-2 col-sm-2"></div>
    </div>
</div>