<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail register
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Calendar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan_notif') ?>

                    <a href="<?php echo base_url('register2/tandaisudahdibacasemua') ?>" class="btn btn-success"
                        onclick="return confirm('Tandai semua keluhan diterima');">
                        Tandai
                        diterima keluhan semua</a><br>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Keluhan</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center" style="width: 150px;">Keterangan</th>

                                    <th class="text-center" style="width: 150px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($notif as $kn) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $kn['nama'] ?></td>
                                    <td class="text-center"><?php echo $kn['alamat'] ?></td>
                                    <td class="text-center"><?= date('D, d-M-Y',  $kn['tanggal_dibuat']) ?></td>
                                    <td>
                                        <center>
                                            <?php if ($kn['is_read'] == 0) : ?>
                                            <a onclick="return confirm('Apakah anda menerima keluhan ini ?')"
                                                href="<?php echo base_url('register2/tandaisudahdibaca/' . $kn['id']) ?>"
                                                class="btn btn-sm btn-success">Diterima</a>
                                            <?php else : ?>
                                            <?php endif; ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"
                                                href="<?php echo base_url('register2/hapus/' . $k['id_keluhan']) ?>"><i
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