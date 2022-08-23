<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Ansuransi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('data_keluar/tambah_data_aksi') ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <select name="id_pengguna" class="form-control">
                            <option value="">--Pilih Nama--</option>
                            <?php foreach ($nama as $j2) : ?>
                            <option value="<?php echo $j2->id_pengguna ?>"><?php echo $j2->nama ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kamar</label>
                        <select name="id_kamar" class="form-control">
                            <option value="">--Pilih Kamar--</option>
                            <?php foreach ($kmr as $j2) : ?>
                            <option value="<?php echo $j2->id_kamar ?>"><?php echo $j2->kamar ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="form-control">
                        <?php echo form_error('tanggal_keluar', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('data_keluar') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->