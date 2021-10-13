<section class="content">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Tambah Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('Login/AddAdmin') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="kecamatan">Username</label>
                        <input type="text" name="uname" class="form-control" placeholder="Masukkan Username ">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Tahun">
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