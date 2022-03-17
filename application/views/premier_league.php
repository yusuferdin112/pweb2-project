<div class="container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active mb-3">
                <img src="<?= base_url().'/assets/image/gudang_jersey.png'; ?>" class="d-block w-100 rounded" alt="...">
            </div>
        </div>
    </div>

    <div class="row text-center ">
        <?php foreach($premier_league as $brg){ ?>
            <div class="card" style="width: 16rem; margin:5px;">
                <img src="<?= base_url().'/assets/image/'.$brg->gambar; ?>" alt="" class="card-img-top mt-3" style="width: 150px; margin: auto;" >
                <div class="card-body">
                    <h5 class="card-title"><?= $brg->nama_brg; ?></h5>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga, 0,',','.'); ?></span>
                    <br>
                    <?= anchor('dashboard/tambah_ke_keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); ?>    
                    <?= anchor('dashboard/detail/'. $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>'); ?>    
                </div>
            </div>
        <?php } ?>
    </div>
</div>