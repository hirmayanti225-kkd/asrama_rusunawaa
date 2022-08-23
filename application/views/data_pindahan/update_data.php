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
                <?php foreach ($pindah as $a) : ?>
                <form method="POST" action="<?php echo base_url('data_pindahan/update_data_aksi') ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_pindahan" class="form-control"
                            value="<?php echo $a->id_pindahan ?>">
                        <select name="id_pengguna" class="form-control">
                            <option value="<?php echo $a->id_pengguna ?>"><?php echo $a->nama ?>
                            </option>
                            <?php foreach ($nama as $j2) : ?>
                            <option value="<?php echo $j2->id_pengguna ?>"><?php echo $j2->nama ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_pengguna', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Asal Kamar</label>
                        <input type="text" name="asal_kamar" class="form-control" value="<?php echo $a->asal_kamar ?>">
                        <?php echo form_error('asal_kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Kamar</label>
                        <input type="hidden" name="id_pindahan" class="form-control"
                            value="<?php echo $a->id_pindahan ?>">
                        <select name="id_kamar" class="form-control">
                            <option value="<?php echo $a->id_kamar ?>"><?php echo $a->kamar ?>
                            </option>
                            <?php foreach ($kmr as $j2) : ?>
                            <option value="<?php echo $j2->id_kamar ?>"><?php echo $j2->kamar ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Keluar</label>
                        <input type="date" name="tanggal_pindah" class="form-control"
                            value="<?php echo $a->tanggal_pindah ?>">
                        <?php echo form_error('tanggal_pindah', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('data_pindahan') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->