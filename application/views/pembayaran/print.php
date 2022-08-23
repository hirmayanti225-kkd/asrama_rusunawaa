<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url() ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="<?php echo base_url() ?>assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css"
        media='print' />
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <title>Print</title>
</head>

<body>
    <hr>
    <h3 class="text-center">CETAK DATA PEMBAYARAN</h3>
    <hr>
    <table class="table table-striped table-bordered mt-3" style="width: 100%;">
        <thead>

            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Kamar</th>
                <th class="text-center">Tanggal Bayar</th>
                <th class="text-center">Pembayaran</th>
                <th class="text-center">Sisa</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($kamar as $j) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $j->kamar, " - ", $j->nama ?></td>
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
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
    window.print();
    </script>

</body>

</html>