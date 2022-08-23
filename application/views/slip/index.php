<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Slip Pembayaran
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php echo $this->session->flashdata('pesan_notif') ?>
        <div class="alert alert-danger"> Untuk Member (Penghuni) yang telah melakukan pembayaran, baik itu melalui bank
            maupun bendahara.
            Silahkan masukkan bukti pembayaran anda berupa FOTO SLIP kepada pengurus melalui form ini.
            Anda bisa menekan tombol "+" di bawah ini! Terima kasih.
            <hr>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">+
                slip pembayaran</button>
        </div>
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-tittle">Form Pengumuman</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('slip/slip_aksi') ?>" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->nama) ?>">
                                <input type="hidden" class="form-control" name="id_kamar"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->id_kamar) ?>">

                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="5" required
                                    placeholder="contoh : slip pembayaran tahun 2022"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Slip</label>
                                <input type="file" name="photo" class="form-control" required>
                            </div>
                            <button onclick="return confirm('Pilih OK untuk mengirim!')" class="btn btn-sm btn-success"
                                type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->