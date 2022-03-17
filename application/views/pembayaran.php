<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents()) {
                    foreach($keranjang as $item){
                        $grand_total += $item['subtotal'];
                    }
                    echo "Total Belanja Anda: Rp. ". number_format($grand_total, 0, ',','.');
                 ?>
            </div>
            <br><br>
            <h4>Input Alamat Pengiriman dan Pembayaran</h4>

            <form action="<?= base_url() ?>dashboard/proses_pesanan" method="POST">
                <div class="form-group">
                    <label>Nama Lengkap
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" style="width:350px;">
                    </label>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" style="width:350px;">
                    </label>
                </div>
                <div class="form-group">
                    <label>No. Telepon
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control" style="width:350px;">
                    </label>
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman
                        <select name="" id="" class="form-control">
                            <option value="">JNE</option>
                            <option value="">JNT</option>
                            <option value="">POS Indonesia</option>
                            <option value="">GOJEK</option>
                        </select>
                    </label>
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran
                        <select name="" id="" class="form-control">
                            <option value="">DANA</option>
                            <option value="">GOPAY</option>
                            <option value="">OVO</option>
                            <option value="">BRI</option>
                        </select>
                    </label>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>

            <?php 
                }else{
                    echo "<h5>Keranjang Belanja Anda Masih Kosong!</h5>";
                } ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>