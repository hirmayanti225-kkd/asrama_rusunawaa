<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Pembayaran
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

                            <div class="card" style="width: 50% ; margin-bottom: 100px">
                                <div class="card-body">
                                    <form method="POST"
                                        action="<?php echo base_url('data_pembayaran/tambah_data_aksi') ?>">

                                        <div class="form-group">
                                            <label>Kamar</label>
                                            <select name="id_kamar" class="form-control">
                                                <option value="">--Pilih Kamar--</option>
                                                <?php foreach ($kamar as $j2) : ?>
                                                <option value="<?php echo $j2->id_kamar ?>"><?php echo $j2->kamar ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Member</label>
                                            <select name="nama" class="form-control">
                                                <option value="">--Pilih Nama--</option>
                                                <?php foreach ($pengguna as $p) : ?>
                                                <option value="<?php echo $p->id_pengguna ?>">
                                                    <?php echo $p->nama ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Bayar</label>
                                            <input type="date" name="tanggal_bayar" class="form-control">
                                            <?php echo form_error('tanggal_bayar', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <select name="id_ansuran" class="form-control">
                                                <option value="">--Pilih Pembayaran--</option>
                                                <?php foreach ($ansuran as $a) : ?>
                                                <option value="<?php echo $a->id_ansuran ?>">
                                                    <?php echo $a->pembayaran ?>
                                                    <?php endforeach; ?>

                                            </select>
                                            <?php echo form_error('id_ansuran', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Sisa</label>
                                            <select name="id_sisa" class="form-control">
                                                <option value="">--Pilih Sisa Sembayaran--</option>
                                                <?php foreach ($ansuran_sisa as $s) : ?>
                                                <option value="<?php echo $s->id_sisa ?>"><?php echo $s->s_pembayaran ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('id_sisa', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status_bayar" class="form-control">
                                                <option value="">--Pilih Status Pembayaran--</option>
                                                <option value="Lunas">Lunas</option>
                                                <option value="Belum Lunas">Belum Lunas</option>
                                            </select>
                                            <?php echo form_error('status_bayar', '<div class="text-small text-danger"> </div>') ?>
                                        </div>


                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <a href="<?php echo base_url('data_pembayaran') ?>"
                                            class="btn btn-warning">Kembali</a>

                                    </form>
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