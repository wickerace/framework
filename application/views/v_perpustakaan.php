 <!-- Main content -->
 <section class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <?php echo $this->session->flashdata('msg'); ?>
                         <a href="<?= base_url('Peminjam/insert'); ?>" class="btn btn-block btn-primary btn-lg col-md-2">TAMBAH DATA</a>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <table id="example2" class="table table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>ID Peminjam</th>
                                     <th>Nama Peminjam</th>
                                     <th>ID Buku</th>
                                     <th>Alamat</th>
                                     <th>Tanggal Peminjaman</th>
                                     <th>Tanggal Pengembalian</th>
                                     <th>Option</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($Datapeminjam as $data) : ?>
                                     <tr>
                                         <td><?= $data->id_peminjam; ?></td>
                                         <td><?= $data->nama_peminjam; ?></td>
                                         <td><?= $data->id_buku; ?></td>
                                         <td><?= $data->alamat; ?></td>
                                         <td><?= $data->tgl_pinjam; ?></td>
                                         <td><?= $data->tgl_kembali; ?></td>
                                         <td>
                                             <a href="#" class="btn btn-block btn-success btn-sm"><i class="nav-icon fas fa-pen"></i></a>
                                             <a href="<?= base_url('Peminjam/delete');  ?>" class="btn btn-block btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>

                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>ID Peminjam</th>
                                     <th>Nama Peminjam</th>
                                     <th>ID Buku</th>
                                     <th>Alamat</th>
                                     <th>Tanggal Peminjaman</th>
                                     <th>Tanggal Pengembalian</th>
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