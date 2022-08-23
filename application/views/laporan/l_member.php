<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Laporan
            <small>Asrama Rusunawa</small>
        </h1>

    </section>
    <section class="content">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    </thead>
                    <tbody>
                        <tr>
                            <td style="max-width: 30px;">
                                <h4 class="text-center"><b>Filter File By Tanggal</b></h4>
                                <br>
                                <div class="card text-white bg-info mb-3">
                                    <form action="<?php echo base_url('laporan/filter') ?>" method="POST"
                                        class="form-group">

                                        <input class="form-control" type="hidden" name="nilaifilter" value="1">

                                        Tanggal Awal <br>
                                        <input class="form-control" type="date" name="tanggalawal" required=""><br>

                                        Tanggal Akhir <br>
                                        <input class="form-control" type="date" name="tanggalakhir" required=""><br>
                                        <input class="btn btn-sm btn-success" type="submit" value="Print"
                                            style="width: 400px;">

                                    </form>
                                </div>
                            </td>
                            <td style="max-width: 30px;">
                                <h4 class="text-center"><b>Filter File By Bulan</b></h4>
                                <br>
                                <div class="card text-white bg-info mb-3">
                                    <form action="<?php echo base_url('laporan/filter') ?>" method="POST"
                                        class="form-group">

                                        <input class="form-control" type="hidden" name="nilaifilter" value="2">

                                        Pilih Tahun <br>
                                        <select class="form-control" name="tahun1" required="">
                                            <?php foreach ($tahun as $t) : ?>
                                            <option value="<?php echo $t->tahun ?>"><?php echo $t->tahun ?></option>
                                            <?php endforeach ?>
                                        </select>

                                        Bulan Awal <br>
                                        <select class="form-control" name="bulanawal" required="">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select><br>

                                        Bulan Akhir <br>
                                        <select class="form-control" name="bulanakhir" required="">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select><br>
                                        <input class="btn btn-sm btn-success" type="submit" value="Print"
                                            style="width: 400px;">

                                    </form>
                                </div>
                            </td>
                            <td style="max-width: 30px;">
                                <h4 class="text-center"><b>Filter File By Tahun</b></h4>
                                <br>
                                <div class="card text-white bg-info mb-3">
                                    <form action="<?php echo base_url('laporan/filter') ?>" method="POST">

                                        <input class="form-control" type="hidden" name="nilaifilter" value="3">

                                        Pilih Tahun <br>
                                        <select class="form-control" name="tahun2" required="">
                                            <?php foreach ($tahun as $t) : ?>
                                            <option value="<?php echo $t->tahun ?>"><?php echo $t->tahun ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <br>
                                        <input class="btn btn-sm btn-success" type="submit" value="Print"
                                            style="width: 400px;">
                                    </form>
                                </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->