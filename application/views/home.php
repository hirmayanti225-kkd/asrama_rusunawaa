<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="content">

        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">nama</th>
                                    <th class="text-center">alamat</th>
                                    <th class="text-center">pendidikan</th>
                                    <th class="text-center" style="width: 100px">kamar</th>
                                    <th class="text-center" style="width: 100px">Kelas</th>
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
                                    <td class="text-center"><?php echo $p->kamar ?></td>
                                    <td class="text-center"><?php echo $p->keterangan ?></td>


                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</body>

</html>