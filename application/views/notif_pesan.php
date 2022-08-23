<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Notifikasi Pesan
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

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <a href="<?php echo base_url('notif_pesan/tandaisudahdibacasemua') ?>"
                                                class="btn btn-success"
                                                onclick="return confirm('Tandai semua sudah dibaca');">
                                                Tandai
                                                Sudah Dibaca Demua</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center" style="width: 100px;">No</th>
                                    <th class="text-center" style="width: 250px;">Judul</th>
                                    <th class="text-center" style="width: 550px;">Pesan</th>
                                    <th class="text-center" style="width: 150px;">Keterangan</th>
                                    <th class="text-center" style="width: 150px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($notifikasi_k as $nk) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $nk->judul ?></td>
                                    <td class="text-center"><?php echo $nk->isi_pesan ?></td>
                                    <td>
                                        <?php if ($nk->is_read == 0) : ?>
                                        <a href="<?php echo base_url('notif_pesan/tandaisudahdibaca/' . $nk->id_notif_pesan) ?>"
                                            class="btn btn-sm btn-success">Tandai sudah dibaca</a>
                                        <?php else : ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <center>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"
                                                href="<?php echo base_url('notif_pesan/hapus/' . $nk->id_notif_pesan) ?>"><i
                                                    class="fa fa-eraser"></i></a>
                                            <a class="btn btn-sm btn-success"
                                                href="<?php echo base_url('notif_pesan/detail/' . $nk->id_notif_pesan) ?>"><i
                                                    class="fa fa-eye"></i></a>
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