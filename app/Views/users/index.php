<h2><?php echo $title; ?></h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['username']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="<?php echo base_url();?>/users/edit/<?= $user['id']; ?>">Edit</a>
                <a href="<?php echo base_url();?>/users/delete/<?= $user['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>