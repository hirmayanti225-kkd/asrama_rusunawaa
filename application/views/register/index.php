<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Pendaftaran Asrama Rusunawa</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url() ?>assets_regis/vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets_regis/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>assets_regis/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets_regis/vendor/datepicker/daterangepicker.css" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>assets_regis/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper p-t-130 p-b-100 font-poppins" style="background-color: gray;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <div class="row row-space">
                        <div class="col-2">
                            <h2 class="title">Form Pendaftaran</h2>

                        </div>
                        <div class="col-2">
                            <p class="title pull-right"><a href="<?php echo base_url('home_page') ?>"><i
                                        class="fa fa-home"></i></a></p>

                        </div>
                    </div>

                    <form method="POST" action="<?php echo base_url('data_registrasi/tambah_data_member_aksi') ?>"
                        enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap *</label>
                                    <input class="input--style-4" type="text" placeholder="_ _ _ _ _" name="nama"
                                        required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat *</label>
                                    <input class="input--style-4" type="text" placeholder="_ _ _ _ _" name="alamat"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal *</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="tanggal_masuk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin *</label>
                                    <div class="p-t-10">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="jenis_kelamin" class="form-control" required>
                                                <option style="background-color: lightgray;" disabled="disabled"
                                                    selected="selected" value="">Pilih Jenis
                                                    Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pendidikan *</label>
                                    <input class="input--style-4" type="text" name="pendidikan" placeholder="_ _ _ _ _"
                                        required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No. WhatsApp *</label>
                                    <input class="input--style-4" type="text" name="wa" placeholder="_ _ _ _ _"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Photo *</label>
                                    <input class="input--style-4" type="file" name="photo" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="label">Kamar *</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="id_kamar" required>
                                        <option disabled="disabled" selected="selected" value="">Pilih Kamar</option>
                                        <?php foreach ($kamar as $k) : ?>
                                        <?php
                                            if ($k->is_read == '0') { ?>
                                        <option value="<?php echo $k->id_kamar ?>"><?php echo $k->kamar ?></option>
                                        </option>
                                        <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">

                        </div>
                        <div class="p-t-15">
                            <button onclick="return confirm('Mohon Menunggu Konfirmasi Kami Melalui WhatsApp Anda!')"
                                class="btn btn--radius-2 btn--green" type="submit" style="width: 100%;">KIRIM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets_regis/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url() ?>assets_regis/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets_regis/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets_regis/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets_regis/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->