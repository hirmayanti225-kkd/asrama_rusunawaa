 <!-- Right side column. Contains the navbar and content of the page -->
 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Profil
             <small>Asrama Rusunawa</small>
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">


         <div class="alert alert-success font-weight-bold mb-4" style="width: 65%">Selamat datang, Anda login sebagai
             Operator</div>

         <div class="container">

             <?php foreach ($member as $p) : ?>
             <div class="card-body">
                 <div class="row">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                             <thead class="thead-dark">
                             </thead>
                             <tbody>
                                 <tr>
                                     <td style="width: 300px"> <img style="width: 250px"
                                             src="<?php echo base_url('photo/' . $p->photo) ?>">
                                         <hr>
                                         <a href="<?php echo base_url('data_pengguna/update_data_op/' . $p->id_pengguna) ?>"
                                             class="btn btn-sm btn-success" style="width: 250px;">Edit Profile</a>
                                     </td>
                                     <td>
                                         <table class="table" style="width: 350px">
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
                                                 <td>Status</td>
                                                 <td>:</td>
                                                 <td><?php echo $p->status ?></td>
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