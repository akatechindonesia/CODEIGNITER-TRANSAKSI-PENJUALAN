<h2><?php echo $title; ?></h2>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama User</th>
            <th>Nama Barang</th>
            <th>Nama Supplier</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transaksi as $index => $row) : ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $row['nama_user'] ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['nama_supplier'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td>
                <a href="<?php echo base_url(); ?>/transaksi/edit/<?= $row['id'] ?>">Edit</a>
                <a href="<?php echo base_url(); ?>/transaksi/delete/<?= $row['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>