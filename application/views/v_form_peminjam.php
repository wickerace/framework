<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form method="post" class="<?= base_url('Peminjam/insert'); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan nama anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Judul Buku</label>
                <select type="text" name="id_buku" class="form-control">
                    <option value="">Pilih buku</option>
                    <?php foreach ($buku as $bk) : ?>
                        <option value=""><?= $bk->judul_buku; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Peminjaman</label>
                <input type="date" name="tgl_pinjam" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Pengembalian</label>
                <input type="date" name="tgl_kembali" class="form-control">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>