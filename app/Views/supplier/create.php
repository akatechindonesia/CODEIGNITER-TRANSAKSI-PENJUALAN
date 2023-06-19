<h2><?= $title; ?></h2>
<?php $validation = \Config\Services::validation(); ?>
<form action="<?= base_url('/supplier/store'); ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" required>

        <?php if ($validation->getError('nama_supplier')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('nama_supplier'); ?>
        </div>
        <?php } ?>

    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" required></textarea>

        <?php if ($validation->getError('alamat')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('alamat'); ?>
        </div>
        <?php } ?>

    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>