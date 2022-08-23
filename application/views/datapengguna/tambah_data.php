<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Member
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 60% ; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('data_pengguna/tambah_data_aksi') ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>No. Pokok</label>
                        <input type="text" name="nomor_pokok" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                        <?php echo form_error('alamat', '<div class="text-small text-danger"> </div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control">
                        <?php echo form_error('pendidikan', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                        <?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>No. WA</label>
                        <input type="text" name="wa" class="form-control">
                        <?php echo form_error('wa', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <select name="id_kamar" class="form-control">
                            <option value="">Pilih Kamar</option>
                            <?php foreach ($pengguna as $k) : ?>
                            <?php
                                if ($k->is_read == '0') { ?>
                            <option value="<?php echo $k->id_kamar ?>"><?php echo $k->kamar ?></option>
                            </option>
                            <?php } ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control">
                        <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" class="form-control">
                            <option value="">--Pilih Hak Akses--</option>
                            <option value="1">Admin</option>
                            <option value="2">Pengurus</option>
                            <option value="3">Member</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="photo" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('data_pengguna') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>



    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->