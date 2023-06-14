<h2><?= $title; ?></h2>

<form action="<?= base_url('/supplier/update/' . $supplier['id']); ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" value="<?= $supplier['nama_supplier']; ?>" required>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" required><?= $supplier['alamat']; ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>