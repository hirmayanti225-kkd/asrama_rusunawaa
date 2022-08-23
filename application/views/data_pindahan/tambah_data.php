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
                <form method="POST" action="<?php echo base_url('data_pindahan/tambah_data_aksi') ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <select name="id_pengguna" class="form-control">
                            <option value="">--Pilih Nama--</option>
                            <?php foreach ($nama as $n) : ?>
                            <option value="<?php echo $n->id_pengguna ?>"><?php echo $n->nama ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Asal Kamar</label>
                        <input type="text" name="asal_kamar" class="form-control">
                        <?php echo form_error('asal_kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Kamar</label>
                        <select name="id_kamar" class="form-control">
                            <option value="">--Pilih Kamar--</option>
                            <?php foreach ($pindah as $j2) : ?>
                            <option value="<?php echo $j2->id_kamar ?>"><?php echo $j2->kamar ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pindah</label>
                        <input type="date" name="tanggal_pindah" class="form-control">
                        <?php echo form_error('tanggal_pindah', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('data_pindahan') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->