<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Data Pembayaran
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="card" style="width: 90% ; margin-bottom: 100px">
                                <div class="card-body">
                                    <?php foreach ($kamar as $j) : ?>
                                    <form method="POST"
                                        action="<?php echo base_url('data_pembayaran/update_data_aksi') ?>">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="hidden" name="id_bayar_kamar" class="form-control"
                                                value="<?php echo $j->id_bayar_kamar ?>">
                                            <input type="text" name="nama" class="form-control"
                                                value="<?php echo $j->nama ?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Kamar</label>
                                            <select name="id_kamar" class="form-control">
                                                <option value="<?php echo $j->id_kamar ?>">
                                                    <?php echo $j->kamar ?></option>
                                                <?php foreach ($kmr as $k) : ?>
                                                <option value="<?php echo $k->id_kamar ?>">
                                                    <?php echo $k->kamar ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control"
                                                value="<?php echo $j->keterangan ?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="photo" class="form-control"
                                                value="<?php echo $j->photo ?>">
                                        </div>


                                        <div class="form-group">
                                            <label>Tanggal Bayar</label>
                                            <input type="date" name="tanggal_bayar" class="form-control"
                                                value="<?php echo $j->tanggal_bayar ?>">
                                            <?php echo form_error('tanggal_bayar', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <select name="id_ansuran" class="form-control">
                                                <option value="<?php echo $j->id_ansuran ?>">
                                                    <?php echo $j->id_ansuran ?></option>
                                                <?php foreach ($ansuran as $a) : ?>
                                                <option value="<?php echo $a->id_ansuran ?>">
                                                    <?php echo $a->pembayaran ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Sisa</label>
                                            <select name="id_sisa" class="form-control">
                                                <option value="<?php echo $j->id_sisa ?>"><?php echo $j->id_sisa ?>
                                                </option>
                                                <?php foreach ($ansuran_sisa as $s) : ?>
                                                <option value="<?php echo $s->id_sisa ?>"><?php echo $s->s_pembayaran ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status_bayar" class="form-control"
                                                value="<?php echo $j->status_bayar ?>">
                                                <option value="<?php echo $j->status_bayar ?>">
                                                    <?php echo $j->status_bayar ?>
                                                </option>
                                                <option value="Lunas">Lunas</option>
                                                <option value="Belum Lunas">Belum Lunas</option>
                                            </select>
                                            <?php echo form_error('status_bayar', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="<?php echo base_url('data_kamar') ?>"
                                            class="btn btn-warning">Kembali</a>

                                    </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </td>


                    </tr>
                </tbody>
            </table>
        </div>


    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->