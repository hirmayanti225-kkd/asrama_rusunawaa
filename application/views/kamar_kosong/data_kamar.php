<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Kamar
            <small>Asrama Rusunawa</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="col-lg-2 connectedSortable">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <hr>
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '1') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a01') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>01</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a01') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>01</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '2') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a02') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>02</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a02') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>02</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '3') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a03') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>03</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a03') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>03</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '4') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a04') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>04</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a04') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>04</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '5') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a05') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>05</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a05') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>05</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="col-lg-2 connectedSortable">
        <div class="table-responsive">
            <table class="table table-bordered" id="allTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <hr>

                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '6') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a06') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>06</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a06') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>06</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '7') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a07') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>07</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a07') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>07</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '8') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a08') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>08</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a08') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>08</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '9') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a09') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>09</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a09') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>09</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '10') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/a10') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>10</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/a10') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>10</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="col-lg-2 connectedSortable">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <hr>

                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '11') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b11') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>11</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b11') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>11</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '12') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b12') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>12</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b12') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>12</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">

                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '13') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b13') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>13</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b13') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>13</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '14') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b14') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>14</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b14') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>14</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '15') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b15') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>15</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b15') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>15</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="col-lg-2 connectedSortable">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <hr>

                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '16') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b16') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>16</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b16') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>16</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '17') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b17') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>17</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b17') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>17</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '18') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b18') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>18</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b18') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>18</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '19') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b19') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>19</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b19') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>19</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="10%" cellspacing="0">
                <tbody class="text-center">
                    <?php foreach ($isi as $i) : ?>
                    <tr>
                        <?php if ($i->no_kamar == '20') if ($i->jumlah == '4') { ?>
                        <td class="text-center badge bg-green">
                            <a href="<?php echo base_url('kamar/b20') ?>" class="badge bg-green"
                                style="height: 50px; width:50px;">
                                <h4>20</h4>
                            </a>
                            <br>
                        </td>
                        <?php } else { ?>
                        <td class="text-center badge bg-red">
                            <a href="<?php echo base_url('kamar/b20') ?>" class="badge bg-red"
                                style="height: 50px; width:50px;">
                                <h4>20</h4>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</aside><!-- /.right-side -->
</div><!-- ./wrapper -->