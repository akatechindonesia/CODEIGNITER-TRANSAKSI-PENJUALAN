<h2><?= $title; ?></h2>

<form action="<?= base_url('/barang/update/' . $barang['id']); ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang']; ?>" required>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" id="harga" value="<?= $barang['harga']; ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>