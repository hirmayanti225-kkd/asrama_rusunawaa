<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Member Berhenti Menetap
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php echo $this->session->flashdata('pesan_notif') ?>
        <div class="card-body" style="width :70%">
            <div class="alert alert-danger">
                <br>
                Apabila member ingin berhenti menetap di asrama, silahkan untuk konfirmasinya melalui halaman ini.
                Anda bisa menekan tombol "+" di bawah ini! Terima kasih.<br><br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#keluar">+
                    Form Keluar</button><br><br>
                <br>
            </div>
        </div>

        <div id="keluar" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-tittle">Form Member Keluar</h4>
                        <form method="POST" action="<?php echo base_url('data_keluar/tambah_data_m_aksi') ?>">
                            <hr>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->nama) ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="hidden" class="form-control" name="id_kamar"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->id_kamar) ?>">
                                <input type="hidden" class="form-control" name="id_pengguna"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->id_pengguna) ?>">
                                <input type="date" name="tanggal_keluar" class="form-control">
                                <?php echo form_error('tanggal_keluar', '<div class="text-small text-danger"> </div>') ?>
                            </div>

                            <button type="submit" onclick="return confirm('Pilih OK untuk mengirim!')"
                                class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url('data_keluar') ?>" class="btn btn-warning">Kembali</a>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->