<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ganti Password
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card" style="width: 40%">
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('ganti_password/ganti_password_aksi') ?>">

                        <div class="form-grup">
                            <label>Password Baru</label>
                            <input type="password" name="passBaru" class="form-control">
                            <?php echo form_error('passBaru', '<div class="text-small text-danger"> </div>') ?>
                        </div>

                        <div class="form-grup">
                            <label>Ulangi Password Baru</label>
                            <input type="password" name="ulangPass" class="form-control">
                            <?php echo form_error('ulangPass', '<div class="text-small text-danger"> </div>') ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->


    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->