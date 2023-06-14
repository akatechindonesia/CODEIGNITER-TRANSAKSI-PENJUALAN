<h2><?= $title; ?></h2>

<form method="POST" action="<?= base_url('/transaksi/store'); ?>">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="user_id">User</label>
        <select name="user_id" class="form-control" required>
            <option value="">---------- Pilih User ---------- </option>
            <?php foreach ($users as $user) : ?>
            <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="barang_id">Barang</label>
        <select name="barang_id" class="form-control" required>
            <option value="">---------- Pilih Barang ---------- </option>
            <?php foreach ($barang as $item) : ?>
            <option value="<?= $item['id'] ?>"><?= $item['nama_barang'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="supplier_id">Supplier</label>
        <select name="supplier_id" class="form-control" required>
            <option value="">---------- Pilih Supplier ---------- </option>
            <?php foreach ($suppliers as $supplier) : ?>
            <option value="<?= $supplier['id'] ?>"><?= $supplier['nama_supplier'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>