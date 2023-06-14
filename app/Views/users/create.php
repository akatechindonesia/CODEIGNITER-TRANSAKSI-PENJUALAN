<h2><?= $title; ?></h2>

<form method="POST" action="<?= base_url('/users/store'); ?>">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <input type="submit" class="btn btn-primary" value="Create">
</form>