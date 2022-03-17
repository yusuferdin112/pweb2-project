<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Barang</h3>

    <?php foreach($barang as $brg){ ?>
        <form action="<?= base_url(). 'admin/data_barang/update' ?>" method="post">
            <div class="form-group">
                <label>Nama Barang
                    <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg ?>">
                    <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>" style="width: 450px;">
                </label>
            </div>
            <div class="form-group">
                <label>Kategori
                    <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>" style="width: 450px;">
                </label>
            </div>
            <div class="form-group">
                <label>Harga
                    <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>" style="width: 450px;">
                </label>
            </div>
            <div class="form-group">
                <label>Stok
                    <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>" style="width: 450px;"> 
                </label>
            </div>
            
            <button type="submit" class="btn btn-primary ">Simpan</button>
        </form>
    <?php } ?>
</div>