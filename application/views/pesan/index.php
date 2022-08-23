<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pesan
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <?php echo $this->session->flashdata('pesan_notif') ?>
        <div class="card-body" style="width :70%">
            <div class="alert alert-danger"><br> Untuk Member (penghuni) yang ingin
                memberikan masukkan atau ada yang ingin disampaikan kepada pengurus asrama,
                anda bisa menekan tombol "+" di bawah ini! Terima kasih.<br><br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">+
                    Kirim Pesan</button><br><br>
            </div>
        </div>
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-tittle">Form Pesan</h4>
                    </div>
                    <form method="POST" action="<?php echo base_url('pesan/pesan_aksi') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?= ucfirst($this->fungsi->hak_akses()->nama) ?>">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="isi_pesan">Isi Pesan</label>
                                <textarea type="text" name="isi_pesan" class="form-control" id="isi_pesan" rows="5"
                                    required></textarea>
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