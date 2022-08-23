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
    <div class="card-body" style="width: 100%;">
        <center>
            <h1>ASRAMA RUSUNAWA</h1>
            <h2>Daftar Bayar Asrama Rusunawa</h2>
            <hr style="width: 50%; border-width: 5px; color: black">
        </center>
        <table></table>

        <?php foreach ($print as $p) : ?>

        <table style="width: 100%">
            <tr>
                <td width="20%">Nama Member</td>
                <td width="2%">:</td>
                <td><?php echo $p->nama ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
            <tr>
                <td>Kamar</td>
                <td>:</td>
                <td><?php echo $p->id_kamar ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo substr($p->tanggal_bayar, 8, 2) ?></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?php echo substr($p->tanggal_bayar, 5, 2) ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?php echo substr($p->tanggal_bayar, 0, 4) ?></td>
            </tr>
        </table>

        <table class="table table-striped table-bordered mt-3">
            <tr>
                <th class="text-center" width="5%">No</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pembayaran</td>
                <td>Rp. <?php echo number_format($p->jumlah, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Sisa</td>
                <td>Rp. <?php echo number_format($p->sisa_jumlah, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Status</td>
                <td><?php echo $p->status_bayar ?></td>
            </tr>

            <tr>
                <th colspan="2" style="text-align: right;">Total Pembayaran : </th>
                <th>Rp.
                    <?php echo number_format($p->jumlah, 0, ',', '.') ?>
                </th>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td></td>
                <td>
                    <p>Penyetor</p>
                    <br>
                    <br>
                    <br>
                    <p class="font-weight-bold"><?php echo $p->nama ?></p>
                </td>

                <td width="200px">
                    <p>Selong, <?php echo date("d M Y") ?> <br>Bendahara</p>
                    <br>
                    <br>
                    <br>
                    <p>___________________</p>
                </td>
            </tr>
        </table>

        <?php endforeach; ?>

    </div>

</body>

</html>

<script type="text/javascript">
window.print();
</script>