<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Data Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <?php foreach ($kmr as $j) : ?>
                <form method="POST" action="<?php echo base_url('data_kmr/update_data_aksi') ?>">

                    <div class="form-group">
                        <label>Kamar</label>
                        <input type="hidden" name="id_kamar" class="form-control" value="<?php echo $j->id_kamar ?>">
                        <input type="text" name="kamar" class="form-control" value="<?php echo $j->kamar ?>">
                        <?php echo form_error('kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <div class="form-group">
                        <label>Status</label>
                        <input type="number" name="is_read" class="form-control" value="<?php echo $j->is_read ?>">
                        <?php echo form_error('is_read', '<div class="text-small text-danger"> </div>') ?>
                    </div>



                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('data_kmr') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->