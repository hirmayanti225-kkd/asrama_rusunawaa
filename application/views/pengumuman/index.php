<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pesan
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card" style="width: 500px;">
            <form method="POST" action="<?php echo base_url('pesan/pesan_aksi') ?>">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama"
                        value="<?= ucfirst($this->fungsi->hak_akses()->nama) ?>">

                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" name="keluhan" rows="5"></textarea>
                </div>

                <button onclick="return confirm('Pilih OK untuk mengirim!')" class="btn btn-sm btn-success"
                    type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>


    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->