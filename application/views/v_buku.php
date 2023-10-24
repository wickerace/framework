 <!-- Main content -->
 <section class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <a href="<?= base_url('Buku/insert'); ?>" class="btn btn-block btn-primary btn-lg col-md-2">TAMBAH DATA</a>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <table id="example2" class="table table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>ID Buku</th>
                                     <th>Judul Buku</th>
                                     <th>Pengarang</th>
                                     <th>Tahun terbit</th>
                                     <th>Kategori</th>
                                     <th>Option</th>
                                 </tr>
                             </thead>
                             <tbody>

                                 <?php foreach ($databuku as $data) : ?>
                                     <tr>
                                         <td><?= $data->id_buku; ?></td>
                                         <td><?= $data->judul_buku; ?></td>
                                         <td><?= $data->pengarang; ?></td>
                                         <td><?= $data->tahun_terbit; ?></td>
                                         <td><?= $data->kategori; ?></td>
                                         <td>
                                             <a href="#" class="btn btn-block btn-success btn-sm"><i class="nav-icon fas fa-pen"></i></a>
                                             <a href="#" class="btn btn-block btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>
                                         </td>
                                     </tr>

                                 <?php endforeach; ?>

                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>ID Buku</th>
                                     <th>Judul Buku</th>
                                     <th>Pengarang</th>
                                     <th>Tahun terbit</th>
                                     <th>Kategori</th>
                                     <th>Option</th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
 </section>
 <!-- /.content -->