<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Registrasi
            <small>Asrama Rusunawa</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('data_registrasi/print') ?>"><i
                    class="fa fa-print"></i>
                Print</a>
        </div>
        <br>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center" style="width: 150px">No. Pokok</th>
                                    <th class="text-center" style="width: 150px">Nama Lengkap</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Pendidikan</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center" style="width: 150px">No. WA</th>
                                    <th class="text-center">Kamar</th>
                                    <th class="text-center">Tanggal Masuk</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Hak Akses</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center" style="width: 200px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pengguna as $p) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $p->nomor_pokok ?></td>
                                    <td class="text-center"><?php echo $p->nama ?></td>
                                    <td class="text-center"><?php echo $p->alamat ?></td>
                                    <td class="text-center"><?php echo $p->pendidikan ?></td>
                                    <td class="text-center"><?php echo $p->jenis_kelamin ?></td>
                                    <td class="text-center"><?php echo $p->wa ?></td>
                                    <td class="text-center"><?php echo $p->kamar ?></td>
                                    <td class="text-center"><?php echo $p->tanggal_masuk ?></td>

                                    <?php if ($p->status == 'Aktif') { ?>
                                    <td class="text-center">
                                        <h5 style="color: green;"><b>Aktif</b>
                                    </td>
                                    <?php } else { ?>
                                    <td class="text-center">
                                        <h5 style="color: red;"><b>Tidak Aktif</b>
                                    </td>
                                    <?php } ?>

                                    <?php if ($p->hak_akses == '1') { ?>
                                    <td class="text-center">Admin</td>
                                    <?php } else if ($p->hak_akses == '2') { ?>
                                    <td class="text-center">Pengurus</td>
                                    <?php } else { ?>
                                    <td class="text-center">Member</td>
                                    <?php } ?>



                                    <td class="text-center"><img src="<?php echo base_url() . 'photo/' . $p->photo ?>"
                                            width="130px" height="100px"></td>

                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-info"
                                                href="<?php echo base_url('data_registrasi/update_data/' . $p->id_pengguna) ?>"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-primary"
                                                href="<?php echo base_url('data_registrasi/cetak/' . $p->id_pengguna) ?>">
                                                <i class="fa fa-print"></i></a>
                                            <a class="btn btn-sm btn-success" href="https://web.whatsapp.com/">WA</a>

                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"
                                                href="<?php echo base_url('data_registrasi/delete_data/' . $p->id_pengguna) ?>"><i
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


    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->