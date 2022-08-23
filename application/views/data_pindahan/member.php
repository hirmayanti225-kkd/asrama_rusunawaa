<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Member Pindah Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php echo $this->session->flashdata('pesan_notif') ?>
        <div class="card-body" style="width :70%">
            <div class="alert alert-danger">
                <br> Bagi member yang ingin pindah kamar, silahkan untuk konfirmasinya melalui halaman ini
                juga, anda bisa menekan tombol "+" di bawah ini! Terima kasih. <br>
                <br> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pindah">+
                    Form Pindah</button><br><br>
            </div>
        </div>

        <div id="pindah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-tittle">Form Member Pindah Kamar</h4>
                        <form method="POST" action="<?php echo base_url('data_pindahan/tambah_data_m_aksi') ?>">
                            <hr>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->nama) ?>">
                            </div>

                            <div class="form-group">
                                <label>Kamar Baru</label>
                                <input type="hidden" class="form-control" name="id_pengguna"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->id_pengguna) ?>">
                                <select name="id_kamar" required class="form-control">
                                    <option disabled="disabled" selected="selected" value="">Pilih Kamar</option>
                                    <?php foreach ($pindahan as $k) : ?>
                                    <?php
                                        if ($k->is_read == '0') { ?>
                                    <option value="<?php echo $k->id_kamar ?>"><?php echo $k->kamar ?></option>
                                    </option>
                                    <?php } ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Pindah*</label>
                                <input type="hidden" name="asal_kamar" class="form-control"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->id_kamar) ?>">
                                <input type="date" name="tanggal_pindah" class="form-control" required>
                            </div>


                            <button type="submit" onclick="return confirm('Pilih OK untuk mengirim!')"
                                class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url('data_pindahan') ?>" class="btn btn-warning">Kembali</a>

                        </form>
                    </div>

                </div>
            </div>
        </div>



    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->