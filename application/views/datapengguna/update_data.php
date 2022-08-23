<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Data Pengguna
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 70% ; margin-bottom: 100px">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($pengguna as $p) : ?>
                                <form method="POST" action="<?php echo base_url('data_pengguna/update_data_aksi') ?>"
                                    enctype="multipart/form-data">
                                    <td style="width: 250px;">
                                        <div class="form-group">
                                            <label>No. Pokok</label>
                                            <input type="text" name="nomor_pokok" class="form-control"
                                                value="<?php echo $p->nomor_pokok ?>">
                                            <?php echo form_error('nomor_pokok', '<div class="text-small text-danger"> </div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control"
                                                value="<?php echo $p->nama ?>">
                                            <?php echo form_error('nama', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="hidden" name="id_pengguna" class="form-control"
                                                value="<?php echo $p->id_pengguna ?>">
                                            <input type="text" name="alamat" class="form-control"
                                                value="<?php echo $p->alamat ?>">
                                            <?php echo form_error('alamat', '<div class="text-small text-danger"> </div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <input type="hidden" name="pendidikan" class="form-control"
                                                value="<?php echo $p->pendidikan ?>">
                                            <input type="text" name="pendidikan" class="form-control"
                                                value="<?php echo $p->pendidikan ?>">
                                            <?php echo form_error('pendidikan', '<div class="text-small text-danger"> </div>') ?>
                                        </div>


                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control"
                                                value="<?php echo $p->id_member ?>">
                                                <option value="<?php echo $p->jenis_kelamin ?>">
                                                    <?php echo $p->jenis_kelamin ?></option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>No. WA</label>
                                            <input type="text" name="wa" class="form-control"
                                                value="<?php echo $p->wa ?>">
                                            <?php echo form_error('wa', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Kamar</label>
                                            <select name="id_kamar" class="form-control">
                                                <option value="<?php echo $p->id_kamar ?>"><?php echo $p->kamar ?>
                                                </option>
                                                <?php foreach ($kamar as $k) : ?>
                                                <?php
                                                        if ($k->is_read == '0') { ?>
                                                <option value="<?php echo $k->id_kamar ?>"><?php echo $k->kamar ?>
                                                </option>
                                                </option>
                                                <?php } ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </td>
                                    <td style="width: 250px;">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control"
                                                value="<?php echo $p->username ?>">
                                            <?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"
                                                value="<?php echo md5($p->password) ?>">
                                            <?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" name="tanggal_masuk" class="form-control"
                                                value="<?php echo $p->tanggal_masuk ?>">
                                            <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $p->status ?>"><?php echo $p->status ?>
                                                </option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                            <?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Hak Akses</label>
                                            <select name="hak_akses" class="form-control">
                                                <option value="<?php echo $p->hak_akses ?>">
                                                    <?php if ($p->hak_akses == '1') {
                                                            echo "Admin";
                                                        } else if ($p->hak_akses == '2') {
                                                            echo "Pengurus";
                                                        } else {
                                                            echo "Member";
                                                        } ?>
                                                </option>
                                                <option value="1">Admin</option>
                                                <option value="2">Pengurus</option>
                                                <option value="3">Member</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="photo" class="form-control">
                                        </div>

                                    </td>


                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('data_pengguna') ?>" class="btn btn-warning">Kembali</a>

                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->