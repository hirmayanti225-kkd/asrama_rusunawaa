<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Pembayaran
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-sm btn-success" href="<?php echo base_url('data_pembayaran/tambah_data') ?>"><i
                    class="fa fa-plus"></i>
                Tambah Data Pembayaran</a>
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('data_pembayaran/print') ?>"><i
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
                                    <th class="text-center">Kamar</th>
                                    <th class="text-center">Tanggal Bayar</th>
                                    <th class="text-center">Pembayaran</th>
                                    <th class="text-center">Sisa</th>
                                    <th class="text-center" style="width: 150px;">Status</th>
                                    <th class="text-center" style="width: 150px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kamar as $j) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center">
                                        <?php echo $j->kamar, " - ", $j->nama ?></td>
                                    <td class="text-center"><img src="<?php echo base_url() . 'photo/' . $j->photo ?>"
                                            width="150px" height="100px"></td>
                                    <td class="text-center"><?php echo $j->tanggal_bayar ?></td>
                                    <td class="text-center">Rp.
                                        <?php echo number_format($j->jumlah, 0, ',', '.') ?></td>
                                    <td class="text-center">Rp.
                                        <?php echo number_format($j->sisa_jumlah, 0, ',', '.') ?></td>
                                    <?php if ($j->status_bayar == 'Lunas') { ?>
                                    <td class="text-center">
                                        <h5 style="color: green;"><b>Lunas</b></h5>
                                    </td>
                                    <?php } else { ?>
                                    <td class="text-center">
                                        <h5 style="color: red;"><b>Belum Lunas</b></h5>
                                    </td>
                                    <?php } ?>


                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-info"
                                                href="<?php echo base_url('data_pembayaran/update_data/' . $j->id_bayar_kamar) ?>"><i
                                                    class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger"
                                                href="<?php echo base_url('data_pembayaran/delete_data/' . $j->id_bayar_kamar) ?>"><i
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