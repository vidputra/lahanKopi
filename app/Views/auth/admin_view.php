<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 style="font-family: cursive; font-size: 16px; font-weight: 400;" class="box-title">Data Admin</h3> <a class="btn btn-info" style="margin-left: 2%;" href="<?= base_url('Login') ?>">LOGIN</a>

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
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <?php foreach ($data as $r) { ?>
                    <tr>
                        <td><?= $r->uname ?></td>
                        <td type="password"><?= $r->password ?></td>
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