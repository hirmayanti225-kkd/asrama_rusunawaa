<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Transaksi
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Pembayaran</th>
                                    <th class="text-center">Sisa</th>
                                    <th class="text-center" style="width: 100px">status</th>
                                    <th class="text-center" style="width: 200px">Cetak Slip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($gaji1 as $g1) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $g1->tanggal_bayar ?>
                                    </td>
                                    <td class="text-center">Rp. <?php echo number_format($g1->jumlah, 0, ',', '.') ?>
                                    </td>
                                    <td class="text-center">Rp. <?php echo number_format($g1->jumlah, 0, ',', '.') ?>
                                    </td>
                                    <?php if ($g1->status_bayar == 'Lunas') { ?>
                                    <td class="text-center">
                                        <h5 style="color: green;"><b>Lunas
                                    </td>
                                    <?php } else { ?>
                                    <td class="text-center">
                                        <h5 style="color: red;"><b>Belum Lunas
                                    </td>
                                    <?php } ?>
                                    <td>
                                        <center>
                                            <a class="btn btn-sm btn-primary"
                                                href="<?php echo base_url('member/cetak_slip/' . $g1->id_bayar_kamar) ?>">
                                                <i class="fa fa-print"></i></a>
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