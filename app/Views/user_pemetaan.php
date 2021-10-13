<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Data Kecamatan</h3> <a class="btn btn-info" style="margin-left: 2%;" href="<?= base_url('UserPemetaan/FormAdd') ?>">TAMBAH</a>

                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
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
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <?php foreach ($data as $r) { ?>
                    <tr>
                        <td><?= $r->kecamatan ?></td>
                        <td><?= $r->tahun ?></td>
                        <td><?= $r->luas_lahan ?></td>
                        <td><?= $r->produksi ?></td>
                        <td><?= $r->produktifitas ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?= base_url('UserPemetaan/FormEdit/' . $r->id_pm) ?>">UBAH</a>
                            <a class="btn btn-danger" href="<?= base_url('UserPemetaan/Delete/' . $r->id_pm) ?>">HAPUS</a>
                        </td>
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
