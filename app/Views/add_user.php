<!-- <section class="content-header">
    <h4>Add New User</h4>
    <form action="<?= base_url('UserPemetaan/Add') ?>" method="post">
        <label for="nama">Kecamatan</label>
        <input type="text" name="kecamatan"><br>
        <label for="nama">Tahun</label>
        <input type="text" name="tahun"><br>
        <label for="nama">Luas Lahan</label>
        <input type="text" name="luas_lahan"><br>
        <label for="nama">Produksi</label>
        <input type="text" name="produksi"><br>
        <label for="nama">Produktifitas</label>
        <input type="text" name="produktifitas"><br>
        <button type="submit">SIMPAN</button>
    </form>
</section> -->


<section class="content">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Tambah Data Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('UserPemetaan/Add') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Tambahkan Kecamatan ">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" name="tahun" class="form-control" placeholder="Tambahkan Tahun">
                    </div>
                    <div class="form-group">
                        <label for="luas_lahan">Luas Lahan</label>
                        <input type="number" name="luas_lahan" class="form-control" placeholder="Masukkan Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label for="produksi">Produksi</label>
                        <input type="number" name="produksi" class="form-control" placeholder="Masukkan Jumlah Produksi">
                    </div>
                    <div class="form-group">
                        <label for="produktifitas">Produktifitas</label>
                        <input type="number" name="produktifitas" class="form-control" placeholder="Masukkan Jumlah Produktifitas">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</section>