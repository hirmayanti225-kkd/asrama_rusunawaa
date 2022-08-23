<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Profil
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 60% ; margin-bottom: 100px">
            <div class="card-body">

                <?php foreach ($pengguna as $p) : ?>
                <form method="POST" action="<?php echo base_url('data_pengguna/update_data_op_aksi') ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $p->nama ?>">
                        <?php echo form_error('nama', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="hidden" name="id_pengguna" class="form-control"
                            value="<?php echo $p->id_pengguna ?>">
                        <input type="text" name="alamat" class="form-control" value="<?php echo $p->alamat ?>">
                        <?php echo form_error('alamat', '<div class="text-small text-danger"> </div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="hidden" name="pendidikan" class="form-control"
                            value="<?php echo $p->pendidikan ?>">
                        <input type="text" name="pendidikan" class="form-control" value="<?php echo $p->pendidikan ?>">
                        <?php echo form_error('pendidikan', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" value="<?php echo $p->id_member ?>">
                            <option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>No. WA</label>
                        <input type="hidden" name="wa" class="form-control" value="<?php echo $p->wa ?>">
                        <input type="text" name="wa" class="form-control" value="<?php echo $p->wa ?>">
                        <?php echo form_error('wa', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <select type="hidden" name="id_kamar" class="form-control">
                            <option value="<?php echo $p->id_kamar ?>"><?php echo $p->kamar ?></option>
                            <?php foreach ($kamar as $j1) : ?>
                            <option value="<?php echo $j1->id_kamar ?>"><?php echo $j1->kamar ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $p->username ?>">
                        <?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"
                            value="<?php echo md5($p->password) ?>">
                        <?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="tanggal_masuk" class="form-control"
                            value="<?php echo $p->tanggal_masuk ?>">
                        <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" class="form-control">
                            <option value="<?php echo $p->hak_akses ?>">
                                <?php if ($p->hak_akses == '2') {
                                        echo "Pengurus";
                                    } ?>
                            </option>
                            <option value="2">Pengurus</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="<?php echo $p->status ?>"><?php echo $p->status ?></option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="photo" class="form-control" value="<?php echo $p->photo ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('dashboard_pengurus') ?>" class="btn btn-warning">Kembali</a>

                </form>
                <?php endforeach; ?>
            </div>
        </div>



    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->