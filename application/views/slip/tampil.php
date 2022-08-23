 <!-- Right side column. Contains the navbar and content of the page -->
 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Data Detail Slip Pembayaran
             <small>Asrama Rusunawa</small>
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">



         <div class="container">

             <?php foreach ($slip as $p) : ?>
             <div class="card-body">
                 <div class="row">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="allTable" width="50%" cellspacing="0">
                             <thead class="thead-dark">
                             </thead>
                             <tbody>
                                 <tr>
                                     <td style="width: 300px"> <img style="width: 250px"
                                             src="<?php echo base_url('photo/' . $p->photo) ?>">

                                     </td>
                                     <td>
                                         <table class="table" style="width: 350px">
                                             <tr>
                                                 <td>Nama</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->nama ?></td>
                                             </tr>
                                             <tr>
                                                 <td>Keterangan</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->keterangan ?></td>
                                             </tr>
                                             <tr>
                                                 <td>Kamar</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->kamar ?></td>
                                             </tr>
                                             <tr>

                                                 <td>
                                                     <a href="<?php echo base_url('data_pembayaran/update_data/' . $p->id_bayar_kamar) ?>"
                                                         class="btn btn-sm btn-success" style="width: 250px;">Edit
                                                     </a>
                                                 </td>

                                             </tr>
                                         </table>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>


                 </div>
             </div>
             <?php endforeach; ?>
         </div>

     </section><!-- /.content -->
 </aside><!-- /.right-side -->
 </div><!-- ./wrapper -->