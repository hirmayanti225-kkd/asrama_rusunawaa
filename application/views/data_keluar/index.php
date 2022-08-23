<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Keluar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('data_keluar/tambah_data') ?>"><i
                    class="fa fa-plus"></i>
                Tambah Data Keluar</a>
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('data_keluar/print') ?>"><i
                    class="fa fa-print"></i>
                Print</a>
        </div>
        <br>
        <div class="card" style="width: 700px;">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" style="width: 80px;">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Kamar</th>
                                        <th class="text-center">Tanggal Keluar</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($out as $o) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $o->nama ?></td>
                                        <td class="text-center"><?php echo $o->kamar ?></td>
                                        <td class="text-center"><?php echo $o->tanggal_keluar ?></td>

                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-info"
                                                    href="<?php echo base_url('data_keluar/update_data/' . $o->id_checkout) ?>"><i
                                                        class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('data_keluar/delete_data/' . $o->id_checkout) ?>"><i
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