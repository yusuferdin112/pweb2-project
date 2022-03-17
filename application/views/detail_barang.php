<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach($barang as $brg) { ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url(). '/assets/image/'. $brg->gambar ?>" alt="" class="card-img-top" style="width: 290px;">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><b><?= $brg->nama_brg; ?></b></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><b><?= $brg->kategori; ?></b></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><b><?= $brg->stok; ?></b></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><b>Rp. <?= number_format($brg->harga, 0,',','.'); ?></b></td>
                            </tr>
                        </table>
                        <br>
                        <?= anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>'); ?>
                        <?= anchor('dashboard/tambah_ke_keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>