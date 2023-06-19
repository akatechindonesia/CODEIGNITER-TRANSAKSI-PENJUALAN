<h2><?= $title; ?></h2>
<?php $validation = \Config\Services::validation(); ?>
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
        <?php if ($validation->getError('user_id')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('user_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="barang_id">Barang</label>
        <select name="barang_id" class="form-control" required>
            <option value="">---------- Pilih Barang ---------- </option>
            <?php foreach ($barang as $item) : ?>
            <option value="<?= $item['id'] ?>"><?= $item['nama_barang'] ?></option>
            <?php endforeach; ?>
        </select>
        <?php if ($validation->getError('barang_id')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('barang_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="supplier_id">Supplier</label>
        <select name="supplier_id" class="form-control" required>
            <option value="">---------- Pilih Supplier ---------- </option>
            <?php foreach ($suppliers as $supplier) : ?>
            <option value="<?= $supplier['id'] ?>"><?= $supplier['nama_supplier'] ?></option>
            <?php endforeach; ?>
        </select>
        <?php if ($validation->getError('supplier_id')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('supplier_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" class="form-control" required>
        <?php if ($validation->getError('quantity')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('quantity'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" required>
        <?php if ($validation->getError('harga')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('harga'); ?>
        </div>
        <?php } ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>