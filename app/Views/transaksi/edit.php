<h2><?= $title; ?></h2>

<form method="POST" action="/transaksi/update/<?= $transaksi['id'] ?>">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="user_id">User ID</label>
        <select name="user_id" id="user_id" class="form-control">
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['id'] ?>" <?= ($user['id'] == $transaksi['user_id']) ? 'selected' : '' ?>>
                    <?= $user['username'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="barang_id">Barang ID</label>
        <select name="barang_id" id="barang_id" class="form-control">
            <?php foreach ($barang as $item) : ?>
                <option value="<?= $item['id'] ?>" <?= ($item['id'] == $transaksi['barang_id']) ? 'selected' : '' ?>>
                    <?= $item['nama_barang'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="supplier_id">Supplier ID</label>
        <select name="supplier_id" id="supplier_id" class="form-control">
            <?php foreach ($suppliers as $supplier) : ?>
                <option value="<?= $supplier['id'] ?>" <?= ($supplier['id'] == $transaksi['supplier_id']) ? 'selected' : '' ?>>
                    <?= $supplier['nama_supplier'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" value="<?= $transaksi['quantity'] ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" value="<?= $transaksi['harga'] ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>