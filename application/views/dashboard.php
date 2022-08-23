<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Asrama Rusunawa</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 95% ; margin-bottom: 100px">
            <div class="card-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    <?php echo $user ?>
                                </h3>
                                <p>
                                    Member
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?php echo base_url('member_data') ?>" class="small-box-footer">
                                Info Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    <?php echo $kamar ?>
                                </h3>
                                <p>
                                    Kamar
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-room"></i>
                            </div>
                            <a href="<?php echo base_url('kamar/data_kamar') ?>" class="small-box-footer">
                                Info Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    <?php echo $bayar ?>
                                </h3>
                                <p>
                                    Pembayaran
                                </p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="<?php echo base_url('data_kamar') ?>" class="small-box-footer">
                                Info Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>Laporan
                                </h3>
                                <p>
                                    pembayaran
                                </p>
                            </div>
                            <div class="icon">
                            </div>
                            <a href="<?php echo base_url('laporan2') ?>" class="small-box-footer">
                                Info Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->



            </div>
            <section class="col-lg-6 connectedSortable">

                <h3 class="box-title">Notifikasi</h3>
                <hr>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <input type="text" class="knob" data-readonly="true" value="<?php echo $notif ?>"
                                data-width="60" data-height="60" data-fgColor="#f56954" />
                            <div class="knob-label"><a href="<?php echo base_url('notif_register') ?>">Notifikasi
                                    Registrasi</a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <input type="text" class="knob" data-readonly="true" value="<?php echo $notif_k ?>"
                                data-width="60" data-height="60" data-fgColor="#00a65a" />
                            <div class="knob-label"><a href="<?php echo base_url('notif_pesan') ?>">Notifikasi
                                    Pesan</a></div>
                        </div><!-- ./col -->
                        <div class="col-xs-4 text-center">
                            <input type="text" class="knob" data-readonly="true" value="<?php echo $notif_s ?>"
                                data-width="60" data-height="60" data-fgColor="#3c8dbc" />
                            <div class="knob-label"><a href="<?php echo base_url('notif_slip') ?>">Notifikasi Slip
                                    Pembayaran</a></div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <hr>
                    <div class="container">
                        <div class="card" style="width: 500px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5110541843574!2d116.52687771416451!3d-8.642847190280152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4f3df2b91005%3A0xdcf433e0001d7c86!2sRusunawa%20Pancor%20Sanggeng!5e0!3m2!1sid!2sid!4v1658802514925!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div><!-- /.box-footer -->
            </section>

        </div><!-- /.box -->

    </section>

    <section class="col-lg-6 connectedSortable">
        <!-- Calendar -->
        <div class="box box-warning">
            <div class="box-header">
                <i class="fa fa-calendar"></i>
                <div class="box-title">Calendar</div>

            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar"></div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
    </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->