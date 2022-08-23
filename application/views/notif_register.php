<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Notifikasi Registrasi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 1000px;">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('pesan_notif') ?>

                        <a href="<?php echo base_url('notif_register/tandaisudahdibacasemua') ?>"
                            class="btn btn-success" onclick="return confirm('Tandai semua sudah dibaca');">
                            Tandai
                            Sudah Dilihat Semua</a><br>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" style="width: 100px;">No</th>
                                        <th class="text-center" style="width: 250px;">Judul</th>
                                        <th class="text-center" style="width: 550px;">Pesan</th>
                                        <th class="text-center" style="width: 150px;">Keterangan</th>
                                        <th class="text-center" style="width: 350px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($notifikasi as $n) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $n->keterangan ?></td>
                                        <td class="text-center"><?php echo $n->isi_notif ?></td>
                                        <td>
                                            <center>
                                                <?php if ($n->is_read == 0) : ?>
                                                <a href="<?php echo base_url('notif_register/tandaisudahdibaca/' . $n->id_register) ?>"
                                                    class="btn btn-sm btn-success">Diterima</a>
                                                <?php else : ?>
                                                <?php endif; ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('notif_register/hapus/' . $n->id_register) ?>"><i
                                                        class="fa fa-eraser"></i></a>
                                                <a class="btn btn-sm btn-success"
                                                    href="<?php echo base_url('data_registrasi/tampil/' . $n->id_register) ?>"><i
                                                        class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"
                                                    href="https://web.whatsapp.com/">whatsapp</a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->