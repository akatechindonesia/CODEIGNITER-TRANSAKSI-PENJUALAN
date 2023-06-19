<h2><?php echo $title; ?></h2>
<?php $validation = \Config\Services::validation(); ?>
<form action="<?= base_url('/barang/store'); ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" required>

        <?php if ($validation->getError('nama_barang')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nama_barang'); ?>
            </div>
        <?php } ?>

    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga" id="harga" required>
        <?php if ($validation->getError('harga')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('harga'); ?>
            </div>
        <?php } ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>