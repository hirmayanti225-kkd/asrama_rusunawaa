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
    <h3 class="text-center">CETAK DATA MEMBER PINDAH KAMAR</h3>
    <hr>
    <table class="table table-striped table-bordered mt-3" style="width: 100%;">
        <thead>

            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Asal Kamar</th>
                <th class="text-center">Kamar Sekarang</th>
                <th class="text-center">Tanggal Pindah</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($kamar as $j) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $j->nama ?></td>
                <td class="text-center"><?php echo $j->asal_kamar ?></td>
                <td class="text-center"><?php echo $j->kamar ?></td>
                <td class="text-center"><?php echo $j->tanggal_pindah ?></td>

                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
    window.print();
    </script>

</body>

</html>