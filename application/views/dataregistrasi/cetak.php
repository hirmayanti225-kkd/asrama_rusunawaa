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
        <h2>Cetak Data Registrasi</h2>
        <a class="btn btn-sm btn-success" href="https://web.whatsapp.com/">whatsapp</a>

        <hr style="width: 50%; border-width: 5px; color: black">
    </center>

    <?php foreach ($print as $p) : ?>

    <table style="width: 70%">
        <tr>
            <td width="55%"></td>
            <td width="20%">Nama Lengkap</td>
            <td width="1%">:</td>
            <td><?php echo $p->nama ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $p->alamat ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Pendidikan</td>
            <td>:</td>
            <td><?php echo ($p->pendidikan) ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo ($p->jenis_kelamin) ?></td>
        </tr>
        <tr>
            <td></td>
            <td>No. WA</td>
            <td>:</td>
            <td><?php echo ($p->wa) ?></td>
        </tr>
        <tr style="color: green;">
            <td></td>
            <td>Kamar</td>
            <td>:</td>
            <td><?php echo ($p->kamar) ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Tanggal</td>
            <td>:</td>
            <td><?php echo ($p->tanggal_masuk) ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Photo</td>
            <td>:</td>
            <td><img src="<?php echo base_url() . 'photo/' . $p->photo ?>" width="150px" height="100px">
                <hr>
            </td>
        </tr>
        <tr style="color: red;">
            <td></td>
            <td>Keterangan</td>
            <td>:</td>
            <td>Login menggunakan nomor kamar, <br>Perhatikan huruf dan angkanya persis sama!</td>
        </tr>
    </table>

    <?php endforeach; ?>

</body>

</html>

<script type="text/javascript">
window.print();
</script>