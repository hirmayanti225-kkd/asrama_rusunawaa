<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Jumlah Isi Kamar
            <small>Control panel</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card" style="width: 60% ; margin-bottom: 100px">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('kamar/tambah_isi_aksi') ?>"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Jumlah</label>
                        <select name="jlh" class="form-control">
                            <option value="">--Pilih Jumlah--</option>
                            <?php foreach ($jlh as $j) : ?>
                            <option value="<?php echo $j->jlh ?>"><?php echo $j->jlh ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="<?php echo base_url('kamar/a01') ?>" class="btn btn-warning">Kembali</a>

                </form>
            </div>
        </div>



    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->