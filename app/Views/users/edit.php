<h2><?= $title; ?></h2>

<form action="<?= base_url(); ?>/users/update/<?= $user['id']; ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" value="<?= $user['username']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <input type="submit" class="btn btn-primary" value="Update">
</form>