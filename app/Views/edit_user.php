<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>

<body>
    <h4>Edit User</h4>
    <form action="<?= base_url('UserPemetaan/Edit/' . $data->id_pm) ?>" method="post">
        <label for="nama">Kecamatan</label>
        <input type="text" name="kecamatan" value="<?= $data->kecamatan ?>"><br>
        <label for=" nama">Tahun</label>
        <input type="text" name="tahun" value="<?= $data->tahun ?>"><br>
        <label for=" nama">Luas Lahan</label>
        <input type="text" name="luas_lahan" value="<?= $data->luas_lahan ?>"><br>
        <label for=" nama">Produksi</label>
        <input type="text" name="produksi" value="<?= $data->produksi ?>"><br>
        <label for=" nama">Produktifitas</label>
        <input type="text" name="produktifitas" value="<?= $data->produktifitas ?>"><br>
        <button type=" submit">SIMPAN</button>
    </form>
</body>

</html> -->

<section class="content">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Edit Data Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('UserPemetaan/Edit/' . $data->id_pm) ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" value="<?= $data->kecamatan ?>" class="form-control" placeholder="Tambahkan Kecamatan ">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" name="tahun" value="<?= $data->tahun ?>" class="form-control" placeholder="Tambahkan Tahun">
                    </div>
                    <div class="form-group">
                        <label for="luas_lahan">Luas Lahan</label>
                        <input type="number" name="luas_lahan" value="<?= $data->luas_lahan ?>" class="form-control" placeholder="Masukkan Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label for="produksi">Produksi</label>
                        <input type="number" name="produksi" value="<?= $data->produksi ?>" class="form-control" placeholder="Masukkan Jumlah Produksi">
                    </div>
                    <div class="form-group">
                        <label for="produktifitas">Produktifitas</label>
                        <input type="number" name="produktifitas" value="<?= $data->produktifitas ?>" class="form-control" placeholder="Masukkan Jumlah Produktifitas">
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