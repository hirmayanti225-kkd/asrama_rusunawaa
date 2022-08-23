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
    <title>Form Masuk Asrama Rusunawa</title>

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
                            <h2 class="title">Form Masuk</h2>

                        </div>
                        <div class="col-2">
                            <p class="title pull-right"><a href="<?php echo base_url('home_page') ?>"><i
                                        class="fa fa-home"></i></a></p>

                        </div>
                    </div>
                    <form method="POST" action="<?php echo base_url('login') ?>">
                        <div class="input-group">
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="username" placeholder="Username"
                                    required>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group">
                                <input class="input--style-4" type="password" name="password" placeholder="Password"
                                    required>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--green" type="submit" value="Login"
                                style="width: 100%;">MASUK</button>
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