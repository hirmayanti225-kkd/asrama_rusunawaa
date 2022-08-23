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
    <h3 class="text-center">CETAK DATA PENGGUNA</h3>
    <hr>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Pendidikan</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center" style="width: 150px">No. WA</th>
                                <th class="text-center">Kamar</th>
                                <th class="text-center">Tanggal Masuk</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengguna as $p) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p->nama ?></td>
                                <td class="text-center"><?php echo $p->alamat ?></td>
                                <td class="text-center"><?php echo $p->pendidikan ?></td>
                                <td class="text-center"><?php echo $p->jenis_kelamin ?></td>
                                <td class="text-center"><?php echo $p->wa ?></td>
                                <td class="text-center"><?php echo $p->kamar ?></td>
                                <td class="text-center"><?php echo $p->tanggal_masuk ?></td>

                                <td class="text-center"><img src="<?php echo base_url() . 'photo/' . $p->photo ?>"
                                        width="150px" height="100px"></td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    window.print();
    </script>

</body>

</html>