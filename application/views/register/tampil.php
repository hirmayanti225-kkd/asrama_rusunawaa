<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Registrasi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                </thead>
                <tbody>
                    <tr>
                        <?php echo form_open('register2/search') ?>
                        <td> <a></a>
                        </td>
                        <td style="width: 250px;">
                            <input type="text" name="keyword" class="form-control" placeholder="Search">
                        </td>
                        <td style="width: 100px;" class="mt-5"> <button type="submit"
                                class="btn btn-success">Cari</button>
                        </td>
                        <?php echo form_close() ?>

                    </tr>
                </tbody>
            </table>
        </div>
        <?= $this->session->flashdata('pesan') ?>

        <div class="card" style="width: 1300px;">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="allTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" style="width: 150px;">Nama</th>
                                        <th class="text-center" style="width: 150px;">Alamat</th>
                                        <th class="text-center">No. WA</th>
                                        <th class="text-center" style="width: 150px;">Pendidikan</th>
                                        <th class="text-center" style="width: 200px;">Alumni</th>
                                        <th class="text-center">No. Hp Orang Tua</th>
                                        <th class="text-center" style="width: 200px;">Tanggal Daftar</th>
                                        <th class="text-center" style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($register2 as $r) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?= $r['nama'] ?></td>
                                        <td class="text-center"><?= $r['alamat'] ?></td>
                                        <td class="text-center"><?= $r['wa'] ?></td>
                                        <td class="text-center"><?= $r['pendidikan'] ?></td>
                                        <td class="text-center"><?= $r['alumni'] ?></td>
                                        <td class="text-center"><?= $r['hp'] ?></td>
                                        <td class="text-center"><?= date('D, d-M-Y',  $r['tanggal_dibuat']) ?></td>
                                        <td>
                                            <center>
                                                <a onclick="return confirm('Yakin Hapus?')"
                                                    class="btn btn-sm btn-danger"
                                                    href="<?php echo base_url('register2/hapus/' . $r['id_register']) ?>"><i
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