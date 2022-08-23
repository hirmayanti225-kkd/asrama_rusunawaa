<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url('photo/') . $this->session->userdata('photo') ?>"
                        class="img-circle" />
                </div>
                <div class="pull-left info">
                    <p>Hello, <?= ucfirst($this->fungsi->hak_akses()->nama) ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
                </div>

            </div>
            <hr style="color:aquamarine;">
            <hr>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <?php if ($this->fungsi->hak_akses()->hak_akses == 1) { ?>
                <li
                    <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('dashboard') ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'data_pengguna' || $this->uri->segment(1) == 'data_registrasi' ? 'active' : '' ?>>
                    <a href="">
                        <i class="fa fa-users"></i> <span>Data Master</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">

                        <li <?= $this->uri->segment(1) == 'data_pengguna' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_pengguna') ?>"><i class="fa fa-circle-o"></i>
                                Data Member</a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'data_registrasi' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_registrasi') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Regitrasi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'data_kmr' || $this->uri->segment(1) == 'kamar_kosong' || $this->uri->segment(1) == 'jumlah_isi' || $this->uri->segment(1) == 'fasilitas' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Data Kamar</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li
                            <?= $this->uri->segment(1) == 'data_kmr' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_kmr') ?>">
                                <i class="fa fa-circle-o"></i> <span>Kamar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'jumlah_isi' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('jumlah_isi') ?>">
                                <i class="fa fa-circle-o"></i> <span>Jumlah Isi Kamar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'kamar_kosong' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('kamar_kosong/data_kamar') ?>"><i class="fa fa-circle-o"></i>
                                <span>Kamar
                                    Kosong</span></a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'fasilitas' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('fasilitas/index') ?>"><i class="fa fa-circle-o"></i>
                                <span>Fasilitas Kamar</span></a>
                        </li>
                    </ul>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'ansuran' || $this->uri->segment(1) == 'ansuran_sisa' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Ansuransi</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'ansuran' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('ansuran') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Ansuransi</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'ansuran_sisa' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('ansuran_sisa') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Sisa Ansuransi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li <?= $this->uri->segment(1) == 'data_pembayaran' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('data_pembayaran') ?>">
                        <i class="fa fa-folder"></i> <span>Data Pembayaran</span>
                    </a>
                </li>

                <li <?= $this->uri->segment(1) == 'pengumuman' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('pengumuman/pengumuman') ?>">
                        <i class="fa fa-edit"></i> <span>Pengumuman</span>
                    </a>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'data_keluar' || $this->uri->segment(1) == 'data_pindahan' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Arsip</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'data_keluar' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_keluar') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Keluar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'data_pindahan' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_pindahan') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Pindahan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li <?= $this->uri->segment(1) == 'laporan' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('laporan') ?>">
                        <i class="fa fa-th"></i> <span>Laporan</span>
                    </a>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'notif' || $this->uri->segment(1) == 'notif_pesan' || $this->uri->segment(1) == 'notif_slip' ? 'active' : '' ?>>
                    <?php
                        $notif = $this->db->get_where('notif_register', ['is_read' => 0])->result_array();
                        $notif_count = count($notif);
                        $notif_pesan = $this->db->get_where('notif_pesan', ['is_read' => 0])->result_array();
                        $notif_count2 = count($notif_pesan);
                        $nt = $notif_count + $notif_count2;
                        $notif_slip = $this->db->get_where('notif_slip', ['is_read' => 0])->result_array();
                        $notif_count3 = count($notif_slip);
                        $ns = $nt + $notif_count3;
                        ?>
                    <a href="#">
                        <i class="fa fa-bell-o"></i>
                        <span>Notifikasi</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="badge pull-right bg-red"><?= $ns ?></small>

                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'notif_register' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_register') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Registrasi</span><small
                                    class="badge pull-right bg-red"><?= $notif_count ?></small>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'notif_pesan' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_pesan') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Pesan</span><small
                                    class="badge pull-right bg-red"><?= $notif_count2 ?></small>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'notif_slip' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_slip') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Setoran</span><small
                                    class="badge pull-right bg-red"><?= $notif_count3 ?></small>
                            </a>
                        </li>
                    </ul>
                </li>

                <?php } ?>

                <?php if ($this->fungsi->hak_akses()->hak_akses == 3) { ?>


                <li <?= $this->uri->segment(1) == 'profil' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('profil') ?>">
                        <i class="fa fa-user"></i> <span>Profil</span>
                    </a>
                </li>
                <li <?= $this->uri->segment(1) == 'info_pembayaran' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('info_pembayaran') ?>">
                        <i class="fa fa-user"></i> <span>Info Pembayaran</span>
                    </a>
                </li>
                <li <?= $this->uri->segment(1) == 'slip' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('slip/slip') ?>">
                        <i class="fa fa-laptop"></i>
                        <span>Slip Pembayaran</span>
                    </a>
                </li>

                <li <?= $this->uri->segment(1) == 'member' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('member/data_transaksi') ?>">
                        <i class="fa fa-table"></i> <span>Data Transaksi</span>
                    </a>
                </li>


                <li class="treeview"
                    <?= $this->uri->segment(1) == 'pesan' || $this->uri->segment(1) == 'm_pindah_kamar' || $this->uri->segment(1) == 'm_keluar' || $this->uri->segment(1) == 'fasilitas' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Keperluan</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'pesan' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('pesan/pesan') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Pesan</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'm_pindah_kamar' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('m_pindah_kamar') ?>">
                                <i class="fa fa-circle-o"></i> <span>Pindah Kamar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'm_keluar' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('m_keluar') ?>"><i class="fa fa-circle-o"></i>
                                <span>Berhenti </span></a>
                        </li>
                    </ul>
                </li>



                <li <?= $this->uri->segment(1) == 'notif_pengumuman' ? 'class="active"' : '' ?>>
                    <?php
                        $notif_pengumuman = $this->db->get_where('notif_pengumuman', ['is_read' => 0])->result_array();
                        $notif_count_p = count($notif_pengumuman);
                        ?>
                    <a href="<?php echo base_url('notif_pengumuman') ?>">
                        <i class="fa fa-laptop"></i>
                        <span>Notifikasi Pengumuman</span><small
                            class="badge pull-right bg-red"><?= $notif_count_p ?></small>
                    </a>
                </li>

                <?php } ?>

                <?php if ($this->fungsi->hak_akses()->hak_akses == 2) { ?>
                <li
                    <?= $this->uri->segment(1) == 'dashboard_pengurus' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('dashboard_pengurus') ?>">
                        <i class="fa fa-dashboard"></i> <span>Profil</span>
                    </a>
                </li>

                <li <?= $this->uri->segment(1) == 'data_registrasi' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('data_registrasi') ?>">
                        <i class="fa fa-user"></i> <span>Data Member</span>
                    </a>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'data_kmr' || $this->uri->segment(1) == 'kamar_kosong' || $this->uri->segment(1) == 'jumlah_isi' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Data Kamar</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li
                            <?= $this->uri->segment(1) == 'data_kmr' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('data_kmr') ?>">
                                <i class="fa fa-circle-o"></i> <span>Kamar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'jumlah_isi' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('jumlah_isi') ?>">
                                <i class="fa fa-circle-o"></i> <span>Jumlah Isi Kamar</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'kamar_kosong' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('kamar_kosong/data_kamar') ?>"><i
                                    class="fa fa-circle-o"></i>Kamar
                                Kosong</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'ansuran' || $this->uri->segment(1) == 'ansuran_sisa' ? 'active' : '' ?>>
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Ansuransi</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'ansuran' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('ansuran') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Ansuransi</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'ansuran_sisa' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('ansuran_sisa') ?>">
                                <i class="fa fa-circle-o"></i> <span>Data Sisa Ansuransi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li <?= $this->uri->segment(1) == 'data_pembayaran' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('data_pembayaran') ?>">
                        <i class="fa fa-folder"></i> <span>Data Pembayaran</span>
                    </a>
                </li>

                <li <?= $this->uri->segment(1) == 'pengumuman' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('pengumuman/pengumuman') ?>">
                        <i class="fa fa-edit"></i> <span>Pengumuman</span>
                    </a>
                </li>




                <li <?= $this->uri->segment(1) == 'laporan' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('laporan') ?>">
                        <i class="fa fa-th"></i> <span>Laporan</span>
                    </a>
                </li>

                <li class="treeview"
                    <?= $this->uri->segment(1) == 'notif' || $this->uri->segment(1) == 'notif_pesan' || $this->uri->segment(1) == 'notif_slip' ? 'active' : '' ?>>
                    <?php
                        $notif = $this->db->get_where('notif_register', ['is_read' => 0])->result_array();
                        $notif_count = count($notif);
                        $notif_pesan = $this->db->get_where('notif_pesan', ['is_read' => 0])->result_array();
                        $notif_count2 = count($notif_pesan);
                        $nt = $notif_count + $notif_count2;
                        $notif_slip = $this->db->get_where('notif_slip', ['is_read' => 0])->result_array();
                        $notif_count3 = count($notif_slip);
                        $ns = $nt + $notif_count3;
                        ?>
                    <a href="#">
                        <i class="fa fa-bell-o"></i>
                        <span>Notifikasi</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="badge pull-right bg-red"><?= $ns ?></small>

                    </a>
                    <ul class="treeview-menu">
                        <li <?= $this->uri->segment(1) == 'notif_register' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_register') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Registrasi</span><small
                                    class="badge pull-right bg-red"><?= $notif_count ?></small>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'notif_pesan' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_pesan') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Pesan</span><small
                                    class="badge pull-right bg-red"><?= $notif_count2 ?></small>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'notif_slip' ? 'class="active"' : '' ?>>
                            <a href="<?php echo base_url('notif_slip') ?>">
                                <i class="fa fa-circle-o"></i>
                                <span>Notifikasi Setoran</span><small
                                    class="badge pull-right bg-red"><?= $notif_count3 ?></small>
                            </a>
                        </li>
                    </ul>
                </li>



                <?php } ?>





            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>