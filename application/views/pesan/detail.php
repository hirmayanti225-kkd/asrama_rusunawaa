 <!-- Right side column. Contains the navbar and content of the page -->
 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Data Pesan
             <small>Asrama Rusunawa</small>
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container">

             <?php foreach ($pesan as $p) : ?>
             <div class="card-body">
                 <div class="row">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                             <thead class="thead-dark">
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>
                                         <table class="table" style="width: 350px">
                                             <tr>
                                                 <td>Nama</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->nama ?></td>
                                             </tr>
                                             <tr>
                                                 <td>Isi Pesan</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->isi_pesan ?></td>
                                             </tr>
                                             <tr>
                                                 <td>
                                                     <a href="<?php echo base_url('pengumuman/pengumuman') ?>"
                                                         class="btn btn-sm btn-success" style="width: 250px;">Buat
                                                         Pengumuman</a>
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