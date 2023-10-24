<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form method="post" class="<?= base_url('Peminjam/update'); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan nama anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan nama anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tagnggal pinjam</label>
                <input type="date" name="tgl_pinjam" class="form-control">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>