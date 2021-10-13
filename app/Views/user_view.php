<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Data Kecamatan</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->
                        <a href="<?= base_url('Login') ?>" style="margin-right: 0%;" class="btn btn-info">LOGIN</a>
                        <!-- <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Kecamatan</th>
                        <th>Tahun</th>
                        <th>Luas Lahan</th>
                        <th>Produksi</th>
                        <th>Produktifitas</th>
                    </tr>
                    <tr>
                        <?php foreach ($data as $r) { ?>
                    <tr>
                        <td><?= $r->kecamatan ?></td>
                        <td><?= $r->tahun ?></td>
                        <td><?= $r->luas_lahan ?></td>
                        <td><?= $r->produksi ?></td>
                        <td><?= $r->produktifitas ?></td>
                    </tr>
                <?php } ?>
                </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</section>
