 <!-- Right side column. Contains the navbar and content of the page -->
 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Data Registrasi
             <small>Asrama Rusunawa</small>
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">

         <div class="container">

             <?php foreach ($register as $p) : ?>
             <div class="card-body">
                 <div class="row">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                             <thead class="thead-dark">
                             </thead>
                             <tr>
                                 <td>
                                     <table class="table" style="width: 350px">
                                         <tr>
                                             <td style="width: 300px"> <img style="width: 250px"
                                                     src="<?php echo base_url('photo/' . $p->photo) ?>"></td>
                                         </tr>
                                         <tr>
                                             <td>Nama</td>
                                             <td>:</td>
                                             <td><?php echo $p->nama ?></td>
                                         </tr>
                                         <tr>
                                             <td>Alamat</td>
                                             <td>:</td>
                                             <td><?php echo $p->alamat ?></td>
                                         </tr>
                                         <tr>
                                             <td>Pendidikan</td>
                                             <td>:</td>
                                             <td><?php echo $p->pendidikan ?></td>
                                         </tr>
                                         <tr>
                                             <td>Jenis Kelamin</td>
                                             <td>:</td>
                                             <td><?php echo $p->jenis_kelamin ?></td>
                                         </tr>
                                         <tr>
                                             <td>No. WA</td>
                                             <td>:</td>
                                             <td><?php echo $p->wa ?></td>
                                         </tr>

                                         <tr>
                                             <td>Kamar</td>
                                             <td>:</td>
                                             <td><?php echo $p->kamar ?></td>
                                         </tr>

                                         <tr>
                                             <td>Tanggal Masuk</td>
                                             <td>:</td>
                                             <td><?php echo $p->tanggal_masuk ?></td>
                                         </tr>

                                         <tr>
                                             <td>Status</td>
                                             <td>:</td>
                                             <td><?php echo $p->status ?></td>
                                         </tr>
                                         <tr>
                                             <td>
                                                 <a href="<?php echo base_url('data_registrasi/update_data/' . $p->id_pengguna) ?>"
                                                     class="btn btn-sm btn-success" style="width: 250px;">Edit
                                                     Profile</a>
                                             </td>
                                         </tr>
                                     </table>
                                 </td>
                             </tr>
                         </table>
                     </div>


                 </div>
             </div>
             <?php endforeach; ?>
         </div>

     </section><!-- /.content -->
 </aside><!-- /.right-side -->
 </div><!-- ./wrapper -->