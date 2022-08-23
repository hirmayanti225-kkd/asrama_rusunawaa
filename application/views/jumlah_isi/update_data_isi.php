<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Jumlah Isi Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 360px ; margin-bottom: 100px">
            <div class="card-body">
                <?php foreach ($isi as $j) : ?>
                <form method="POST" action="<?php echo base_url('jumlah_isi/update_data_aksi') ?>">

                    <div class="form-group">
                        <label>Kamar</label>
                        <input type="hidden" name="id_jlh" class="form-control" value="<?php echo $j->id_jlh ?>">
                        <input type="text" name="no_kamar" class="form-control" value="<?php echo $j->no_kamar ?>">
                        <?php echo form_error('no_kamar', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <select name="jumlah" class="form-control">
                            <option value="<?php echo $j->jumlah ?>"><?php echo $j->jumlah ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('jumlah_isi') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->