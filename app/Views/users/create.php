<h2><?= $title; ?></h2>
<?php $validation = \Config\Services::validation(); ?>
<form method="POST" action="<?= base_url('/users/store'); ?>">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" required>
        <?php if ($validation->getError('username')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('username'); ?>
            </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
        <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
            </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
        <?php if ($validation->getError('password')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('password'); ?>
            </div>
        <?php } ?>
    </div>

    <input type="submit" class="btn btn-primary" value="Create">
</form>