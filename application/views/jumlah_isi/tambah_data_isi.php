<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Jumlah Isi Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('jumlah_isi/tambah_data_aksi') ?>">

                    <div class="form-group">
                        <label>Kamar</label>
                        <input type="text" name="no_kamar" class="form-control">
                        <?php echo form_error('no_kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <select name="jumlah" class="form-control">
                            <option value="">--Pilih Jumlah--</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('jumlah_isi') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->