<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Sisa Ansuransi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('ansuran_sisa/tambah_data_aksi') ?>">

                    <div class="form-group">
                        <label>Pembayaran</label>
                        <input type="text" name="s_pembayaran" class="form-control">
                        <?php echo form_error('s_pembayaran', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="sisa_jumlah" class="form-control">
                        <?php echo form_error('sisa_jumlah', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('ansuran_sisa') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->