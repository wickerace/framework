<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form method="post" class="<?= base_url('Buku/insert'); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">ID Buku</label>
                <input type="text" name="id_buku" class="form-control" placeholder="Masukkan ID Buku">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Judul Buku</label>
                <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>