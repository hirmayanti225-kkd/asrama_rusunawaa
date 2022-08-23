<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Daftar Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card-body">
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('data_kmr/tambah_data') ?>"><i
                    class="fa fa-plus"></i>
                Tambah Kamar</a>
            <a href="<?php echo base_url('data_kmr/tandaisudahdibacasemua') ?>" class="btn btn-sm btn-success mb-3"
                onclick="return confirm('Tandai semua sudah dibaca');">
                Tandai
                Sudah Terisi Semua</a>
        </div><br>
        <div class="card" style="width: 700px;">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" style="width: 80px;">No</th>
                                        <th class="text-center" style="width: 100px;">Kamar</th>
                                        <th class="text-center" style="width: 100px;">Keterangan</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kmr as $k) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $k->kamar ?></td>
                                        <td>
                                            <?php if ($k->is_read == 0) : ?>
                                            <a href="<?php echo base_url('data_kmr/tandaisudahdibaca/' . $k->id_kamar) ?>"
                                                class="btn btn-sm btn-success">Tandai sudah diisi</a>
                                            <?php else : ?>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-info"
                                                    href="<?php echo base_url('data_kmr/update_data/' . $k->id_kamar) ?>"><i
                                                        class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('data_kmr/delete_data/' . $k->id_kamar) ?>"><i
                                                        class="fa fa-eraser"></i></a>
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