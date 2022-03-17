<div class="container-fluid">
    <button class="btn btn-sm btn-primary ml-4 mb-4" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sa"></i>  Tambah Barang</button>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php 
        $no=1;
        foreach($barang as $brg){ ?>
            <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $brg->nama_brg; ?></td>
                <td><?= $brg->kategori; ?></td>
                <td class="text-center"><?= $brg->harga; ?></td>
                <td class="text-center"><?= $brg->stok; ?></td>
                <td class="text-center"><?= anchor('dashboard/detail/'. $brg->id_brg, '<div class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></div>'); ?></td>
                <td class="text-center"><?= anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td class="text-center"><?= anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url().'admin/data_barang/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang
                            <input type="text" name="nama_brg" class="form-control" style="width: 450px;">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Kategori
                            <select name="kategori" id="kategori" class="form-control" style="width: 450px;">
                                <option value="">La Liga</option>
                                <option value="">Serie A</option>
                                <option value="">Bundes Liga</option>
                                <option value="">Premier League</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Harga
                            <input type="text" name="harga" class="form-control" style="width: 450px;">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Stok
                            <input type="text" name="stok" class="form-control" style="width: 450px;">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk
                            <input type="file" name="gambar" class="form-control" style="width: 450px;">
                        </label>
                    </div>         
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>