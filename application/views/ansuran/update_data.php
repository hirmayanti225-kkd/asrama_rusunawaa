<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Data Ansuransi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <?php foreach ($ansuran as $a) : ?>
                <form method="POST" action="<?php echo base_url('ansuran/update_data_aksi') ?>">

                    <div class="form-group">
                        <label>Pembayaran</label>
                        <input type="hidden" name="id_ansuran" class="form-control"
                            value="<?php echo $a->id_ansuran ?>">
                        <input type="text" name="pembayaran" class="form-control" value="<?php echo $a->pembayaran ?>">
                        <?php echo form_error('pembayaran', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control"
                            value="<?php echo number_format($a->jumlah, 0, ',', '.')  ?>">
                        <?php echo form_error('jumlah', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('ansuran') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->