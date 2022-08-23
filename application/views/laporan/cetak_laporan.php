<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
    body {
        font-family: Arial;
        color: black;
    }
    </style>
</head>

<body>
    <center>
        <h1>ASRAMA RUSUNAWA</h1>
        <h2>Cetak Laporan Asrama Rusunawa</h2>
        <hr style="width: 50%; border-width: 5px; color: black">
        <br>

        <?php echo $subtitle ?>
        <br><br>
        <table class="text-center">
            <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">No</th>
                    <th class="text-center" style="width: 100px;">Kamar</th>
                    <th class="text-center" style="width: 200px;">Tanggal Bayar</th>
                    <th class="text-center" style="width: 200px;">Pembayaran</th>
                    <th class="text-center" style="width: 200px;">Sisa</th>
                    <th class="text-center" style="width: 100px;">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($datafilter as $j) : ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $j->kamar, "-", $j->nama ?></td>
                    <td class="text-center"><?php echo $j->tanggal_bayar ?></td>
                    <td class="text-center">Rp.
                        <?php echo number_format($j->jumlah, 0, ',', '.') ?></td>
                    <td class="text-center">Rp.
                        <?php echo number_format($j->sisa_jumlah, 0, ',', '.') ?></td>
                    <?php if ($j->status_bayar == 'Lunas') { ?>
                    <td class="text-center">
                        <h5 style="color: green;"><b>Lunas</b>
                    </td>
                    <?php } else { ?>
                    <td class="text-center">
                        <h5 style="color: red;"><b>Belum Lunas</b>
                    </td>
                    <?php } ?>
                </tr>
                <?php endforeach ?>

            </tbody>
        </table>

    </center>



</body>

</html>

<script type="text/javascript">
window.print();
</script>