<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Data Fasilitas
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <?php foreach ($fasilitas as $j) : ?>
                <form method="POST" action="<?php echo base_url('fasilitas/update_data_aksi') ?>">

                    <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="hidden" name="id_fasilitas" class="form-control"
                            value="<?php echo $j->id_fasilitas ?>">
                        <input type="text" name="fasilitas" class="form-control" value="<?php echo $j->fasilitas ?>">
                        <?php echo form_error('fasilitas', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" value="<?php echo $j->jumlah ?>">
                        <?php echo form_error('jumlah', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('fasilitas') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->