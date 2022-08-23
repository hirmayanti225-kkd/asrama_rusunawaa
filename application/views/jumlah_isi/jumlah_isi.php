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


        <div class="container-fluid">

            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('jumlah_isi/tambah_data') ?>"><i
                    class="fa fa-plus"></i> Tambah Jumlah Isi Kamar</a>
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
                                        <th class="text-center">Kamar</th>
                                        <th class="text-center">Jumlah Isi</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($isi as $i) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $i->no_kamar ?></td>
                                        <td class="text-center"><?php echo $i->jumlah ?></td>

                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-info"
                                                    href="<?php echo base_url('jumlah_isi/update_data/' . $i->id_jlh) ?>"><i
                                                        class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('jumlah_isi/delete_data/' . $i->id_jlh) ?>"><i
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