<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr class="text-center">
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php 
        $no=1;
        foreach($this->cart->contents() as $items) { ?>
            <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td class="text-center"><?= $items['qty']; ?></td>
                <td class="text-center">Rp. <?= number_format($items['price'], 0, ',','.'); ?></td>
                <td class="text-center">Rp. <?= number_format($items['subtotal'], 0, ',','.'); ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4">Harga Total</td>
            <td class="text-center">Rp. <?= number_format($this->cart->total(), 0, ',','.') ?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?= base_url('dashboard/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?= base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>