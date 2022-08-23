<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Fasilitas
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card-body">

            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('fasilitas/tambah_data') ?>"><i
                    class="fa fa-plus"></i>
                Tambah Fasilitas</a>
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
                                        <th class="text-center" style="width: 100px;">Fasilitas</th>
                                        <th class="text-center" style="width: 100px;">Jumlah</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($fasilitas as $k) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $k->fasilitas ?></td>
                                        <td class="text-center"><?php echo $k->jumlah ?></td>


                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-info"
                                                    href="<?php echo base_url('fasilitas/update_data_fa/' . $k->id_fasilitas) ?>"><i
                                                        class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('fasilitas/delete_data/' . $k->id_fasilitas) ?>"><i
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